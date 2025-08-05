<?php 
namespace App\Models;
use CodeIgniter\Model;

class ContadorComensalesModel extends Model
{
    protected $table      = 'contador_comensales';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['casino_id','fecha','cantidad'];

    // Auto-protege creado_en
    protected $useTimestamps = false;

    // Validación simple
    protected $validationRules = [
        'casino_id' => 'required|integer',
        'fecha'     => 'required|valid_date[Y-m-d]',
        'cantidad'  => 'required|integer|greater_than_equal_to[0]',
    ];
}