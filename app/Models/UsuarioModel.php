<?php
namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'idusers';

    protected $allowedFields = [
        'username', 'password', 'email', 'active',
        'first_name', 'last_name'
    ];

    protected $returnType = 'array';
}
