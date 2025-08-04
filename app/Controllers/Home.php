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

        // 2) Cargo los modelos
        $roleModel = new RoleModel();
        $appModel  = new AppModel();
        $menuModel = new MenuModel();

        // 3) Obtengo el nivel del usuario
        $idlevel = $session->get('idlevel');

        // 4) Recupero los ID de app permitidos
        $appIds = $roleModel->getAllowedAppIds((int)$idlevel);

        // 5) Recupero las apps y los menús
        $apps      = $appModel->getAppsByIds($appIds);
        $menus     = $menuModel->where('valid', 1)
                               ->orderBy('orden', 'ASC')
                               ->findAll();

        // 6) Agrupo apps por menú
        $appsByMenu = [];
        foreach ($apps as $app) {
            $appsByMenu[$app['idmenu']][] = $app;
        }
        

        // 7) Paso todo al template
        return view('welcome', [
            'titulo'     => 'Bienvenido',
            'menus'      => $menus,
            'appsByMenu' => $appsByMenu,
            'session'    => $session,
        ]);


    }
  
}
