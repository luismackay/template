<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsuarioModel;
use App\Models\LevelModel;

class Auth extends Controller
{
    public function login()
    {
        helper(['form', 'url']);
        //var_dump(this->request->getMethod());

        if ($this->request->getMethod() === 'POST') {
            $identity = $this->request->getPost('identity');
            $password = $this->request->getPost('password');

            $usuarioModel = new UsuarioModel();

            // Buscar por username o email
            $usuario = $usuarioModel
                ->where('active', 1)
                ->groupStart()
                    ->where('username', $identity)
                    ->orWhere('email', $identity)
                ->groupEnd()
                ->first();

            if ($usuario && password_verify($password, $usuario['password'])) {
                $levelModel = new LevelModel();
                $level = $levelModel->find($usuario['idlevel']); 
               session()->set([
                    'id'         => $usuario['idusers'],
                    'username'   => $usuario['username'],
                    'first_name' => $usuario['first_name'],
                    'last_name'  => $usuario['last_name'],
                    'idlevel'    => $usuario['idlevel'],
                     'level_name' => $level['name'] ?? 'Sin nivel',
                    'logueado' => true
                ]);
                
               return redirect()->route('/');

            } else {
                return redirect()->back()->with('error', 'Credenciales inválidas');
            }
        }

        return view('auth/login', ['titulo' => 'Iniciar sesión']);
    }
}