<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\RoleModel;
use App\Models\AppModel;
use App\Models\MenuModel;

class Home extends Controller
{
    public function index()
    {
        $session = session();
         // 1) Si no está logueado, lo envío al login
        if (! session()->get('logueado')) {
            return redirect()->to('login');
        }

         $userLevel = $session->get('idlevel');

         // 1) IDs de apps permitidas
        $appIds    = (new RoleModel())
                      ->getAppIdsForLevel($userLevel);

        // 2) Apps visibles
        $apps      = (new AppModel())
                      ->getByIds($appIds);

        // 3) Menús ordenados
        $menusRaw  = (new MenuModel())
                      ->getAllOrdered();

        //var_dump($menusRaw); exit();
        // 4) Agrupo apps bajo cada menú
        $menus = [];
        foreach ($menusRaw as $m) {
             $menus[$m['idmenu']] = [
                'menu' => $m,
                'apps' => [],
            ];
        }
        foreach ($apps as $app) {
            // asegúrate de que la FK en tu tabla app sea 'menu_id'
            $mid = $app['idmenu'];
            if (isset($menus[$mid])) {
                $menus[$mid]['apps'][] = $app;
            }
        }
        // Elimino menús vacíos
        $menus = array_filter($menus, fn($e) => count($e['apps']) > 0);
        $firstApp = array_values($apps)[0];
        // 5) Paso todo a la vista
        return view('welcome', [
            'titulo' => SYSTEM_NAME,
            'menus'  => $menus,
            'session'=> $session,
            'firstApp' => $firstApp
        ]);


    }
  
}
