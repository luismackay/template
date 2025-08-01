<?php
namespace App\Models;

use CodeIgniter\Model;

class LevelModel extends Model
{
    protected $table      = 'level';
    protected $primaryKey = 'idlevel';
    protected $allowedFields = ['name', 'description', 'valid'];
    public    $useTimestamps = false;
}
