<?php

namespace App\Models;

use CodeIgniter\Model;

class PangarasanModel extends Model
{
    protected $table      = 'pangarasan';
    public function getPangarasan($panga = false)
    {
        return $this->where(['pangarasan' => $panga])->first();
    }
}
