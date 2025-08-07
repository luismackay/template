<?php namespace App\Controllers;

use App\Models\ContadorComensalesModel;
use App\Models\CasinoModel;
use App\Models\RoleModel;
use App\Models\AppModel;
use App\Models\MenuModel;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;


class Comensales extends BaseController
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

        echo view('comensales/create', $data);
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

        echo view('comensales/index', $data);
    }
    /**
     * Endpoint AJAX para traer clientes (antes en Maincore)
     */
    public function traer_registro_ajax()
    {
       // var_dump("ENTRE"); exit();
        // Obtén el JSON decodeado en un array
        //$input = $this->request->getJSON(true);

        // Sólo aceptamos POST
        //$casino_id = isset($input['casino_id']) ? (int)$input['casino_id'] : 0;
        //$fecha    = $input['fecha'] ?? '';

        $casino_id = (int) $this->request->getPost('casino_id');
        $fecha    = $this->request->getPost('fecha');

        $model   = new ContadorComensalesModel();
        $rows    = $model->traer_registro((int)$casino_id, $fecha, 5);
         
        
        // Construcción de la tabla
        $table = '';
        if (! empty($rows)) {
            $table  = '<table class="table table-striped text-nowrap" id="tabla-listado-ventas" width="100%">';
            $table .= '<thead><tr class="info">
                       <th>Casino</th>
                       <th>Fecha</th>
                       <th>Cantidad</th>
                       <th>Estado</th>
                       <th class="text-center"><i class="fas fa-cog text-primary"></i></th>
                    </tr></thead><tbody>';
            foreach ($rows as $v) {
                
                $table .= '<tr>'
                        . '<td>'.esc($v['name']).'</td>'
                        . '<td>'.esc($v['fecha']).'</td>'
                        . '<td>'.esc($v['cantidad']).'</td>'
                        . '<td>'.esc($v['estado']).'</td>'
                        . '<td class="text-center">';
                        if ($v['estado']=== 'Abierto'){
                            $table .= '<button type="button" '
                            . 'class="btn btn-primary btn-xs m-r-5 btn-edit-comensal" '
                            . 'data-id="'.esc($v['id']).'" '
                            . 'data-fecha="'.esc($v['fecha']).'" '
                            . 'data-casino="'.esc($v['name']).'" '
                            . 'data-cantidad="'.esc($v['cantidad']).'" '
                            . 'data-toggle="tooltip" title="Editar Comensales">'
                            . '<i class="fas fa-list-ol"></i></button>';
                        }else{
                            $table .= '
                                <!-- Sin acción -->';
                        }
                    
                
            }

            $table .= '</tbody></table>';
        }

        return $this->response->setJSON([
            'table'                => $table
        ]);
    }
    public function actualizar()
    {
        $id       = (int) $this->request->getPost('id');
        $cantidad = (int) $this->request->getPost('cantidad');

        $model = new ContadorComensalesModel();

        if (! $model->find($id)) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Registro no encontrado'
            ]);
        }

        $model->update($id, ['cantidad' => $cantidad, 'activo' => '1']);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Cantidad actualizada correctamente'
        ]);
    }
}