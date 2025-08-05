<?php namespace App\Controllers;

use App\Models\ContadorComensalesModel;
use App\Models\CasinoModel;
use App\Models\RoleModel;
use App\Models\AppModel;
use App\Models\MenuModel;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Inventario extends BaseController
{
    /** @var array */
    protected $menus;

    /**
     * Inicializa el controlador y carga $this->menus
     */
    public function initController(
        RequestInterface  $request,
        ResponseInterface $response,
        LoggerInterface   $logger
    ) {
        // Llama siempre antes al initController del padre
        parent::initController($request, $response, $logger);

        // Construye el menú dinámico
        $session  = session();
        $level    = $session->get('idlevel');

        $appIds   = (new RoleModel())->getAppIdsForLevel($level);
        $apps     = (new AppModel())->getByIds($appIds);
        $rawMenus = (new MenuModel())->getAllOrdered();

        $menus = [];
        foreach ($rawMenus as $m) {
            // Aquí $m es un array con clave 'idmenu'
            $menus[$m['idmenu']] = [
                'menu' => $m,
                'apps' => [],
            ];
        }

        foreach ($apps as $a) {
            // Usa la FK real de tu tabla app (probablemente 'menu_id')
            $mid = $a['idmenu'];
            if (isset($menus[$mid])) {
                $menus[$mid]['apps'][] = $a;
            }
        }

        // Sólo menús con al menos una app
        $this->menus = array_filter($menus, fn($e) => count($e['apps']) > 0);
    }

    /**
     * Formulario de creación de conteo
     */
    public function create()
    {
        helper('form');

        $comensalesModel = new ContadorComensalesModel();
        $casinoModel     = new CasinoModel();

        // Datos base para la vista
        $data = [
            'casinos' => $casinoModel->findAll(),
            'menus'   => $this->menus,
            'session' => session(),
            'titulo'  => SYSTEM_NAME,
        ];

        if ($this->request->getMethod() === 'POST') {
            $post = $this->request->getPost(['casino_id','fecha','cantidad']);

            if (! $comensalesModel->insert($post)) {
                $data['errors'] = $comensalesModel->errors();
            } else {
                return redirect()->to(site_url('comensales'))
                                 ->with('success','Guardado correctamente');
            }
        }

        echo view('inventario/create', $data);
    }

    /**
     * Listado de los últimos 3 días
     */
    public function index()
    {
        helper('form');
        $model  = new ContadorComensalesModel();

        $inicio = date('Y-m-d', strtotime('-2 days'));

        $data = [
            'registros'=> $model
                              ->where('fecha >=', $inicio)
                              ->orderBy('fecha','DESC')
                              ->findAll(),
            'menus'    => $this->menus,
            'session'  => session(),
            'titulo'   => SYSTEM_NAME,
        ];

        echo view('inventario/index', $data);
    }
}