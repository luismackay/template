<?php 
namespace App\Models;

use CodeIgniter\Model;

class CasinoModel extends Model
{
    protected $table      = 'casinos';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['name', /* otros campos */];
     

     /** Devuelve todos los casinos ordenados por nombre */
    public function getAll()
    {
        return $this->orderBy('name','ASC')->findAll();
    }
}
