<?php 
namespace App\Models;
use CodeIgniter\Model;

class ContadorComensalesModel extends Model
{
    protected $table      = 'contador_comensales';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['casino_id','fecha','cantidad', 'activo'];

    // Auto-protege creado_en
    protected $useTimestamps = false;

    // Validación simple
    protected $validationRules = [
        'casino_id' => 'required|integer',
        'fecha'     => 'required|valid_date[Y-m-d]',
        'cantidad'  => 'required|integer|greater_than_equal_to[0]',
    ];

     public function traer_registro(int $casinoId, string $fecha, int $dias = 5): array
    {
        // Calcula la fecha de inicio (fecha - $dias días)
        $dtInicio = date('Y-m-d', strtotime("$fecha -{$dias} days"));

        // Construye la consulta
        return $this->db
            ->table('contador_comensales c')
            ->select("cs.name, c.id, c.fecha, c.cantidad, if(c.activo=1,'Abierto','Cerraddo') as estado")
            ->join('casinos cs', 'c.casino_id = cs.id')
            ->where('c.casino_id', $casinoId)
            ->where('c.fecha >=', $dtInicio)
            ->where('c.fecha <=', $fecha)
            ->orderBy('c.fecha', 'DESC')
            ->get()
            ->getResultArray();
    }
}