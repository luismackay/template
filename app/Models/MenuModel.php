<?php
// app/Models/MenuModel.php
namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table      = 'menu';
    protected $primaryKey = 'idmenu';
    protected $allowedFields = [
        'name', 'img', 'valid', 'orden'
    ];
    protected $returnType = 'array';
    public    $useTimestamps = false;


    public function getAllOrdered()
    {
        return $this->orderBy('orden','ASC')->findAll();
    }
}