<?php
// app/Models/RoleModel.php
namespace App\Models;

use CodeIgniter\Model;

class RoleModel extends Model
{
    protected $table      = 'role';
    protected $primaryKey = 'id';
    protected $allowedFields = ['idempresa','idapp','idlevel'];
    protected $returnType = 'array';
    public    $useTimestamps = false;


    /**
     * Devuelve un array de idapp permitidos para un nivel dado.
     *
     * @param int $level
     * @return int[]
     */
   public function getAppIdsForLevel(int $level): array
    {
        $rows = $this->select('idapp')->where('idlevel',$level)->findAll();
        return array_column($rows, 'idapp');
    }
}
