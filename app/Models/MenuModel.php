<?php
// app/Models/MenuModel.php
namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table      = 'menu';
    protected $primaryKey = 'idmenu';
    protected $allowedFields = [
        'name', 'img', 'valid', 'orden', 'created_at', 'updated_at'
    ];
    public    $useTimestamps = false;
}