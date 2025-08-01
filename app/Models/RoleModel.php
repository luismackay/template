<?php
// app/Models/RoleModel.php
namespace App\Models;

use CodeIgniter\Model;

class RoleModel extends Model
{
    protected $table      = 'role';
    protected $primaryKey = 'id';
    protected $allowedFields = ['idempresa','idapp','idlevel','created_at','updated_at'];
    public    $useTimestamps = false;

    /**
     * Devuelve un array de idapp permitidos para un nivel dado.
     *
     * @param int $level
     * @return int[]
     */
    public function getAllowedAppIds(int $level): array
    {
        // findColumn() extrae directamente la columna 'idapp' como array
        return $this
            ->select('idapp')
            ->where('idlevel', $level)
            ->findColumn('idapp');
    }
}
