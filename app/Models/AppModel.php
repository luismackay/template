<?php
// app/Models/AppModel.php
namespace App\Models;

use CodeIgniter\Model;

class AppModel extends Model
{
    protected $table      = 'app';
    protected $primaryKey = 'idapp';
    protected $allowedFields = [
        'function','name','img','idmenu','leaf','visible','valid','created_at','updated_at'
    ];
    public    $useTimestamps = false;

    /**
     * Devuelve las apps cuyo idapp esté en el array $ids,
     * sólo las que estén marcadas como valid = 1, ordenadas por menú y nombre.
     *
     * @param int[] $ids
     * @return array
     */
    public function getAppsByIds(array $ids): array
    {
        if (empty($ids)) {
            return [];
        }

        return $this
            ->whereIn('idapp', $ids)
            ->where('valid', 1)
            ->orderBy('idmenu', 'ASC')
            ->orderBy('name', 'ASC')
            ->findAll();
    }
}
