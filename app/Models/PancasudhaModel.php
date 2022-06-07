<?php

namespace App\Models;

use CodeIgniter\Model;

class PancasudhaModel extends Model
{
    protected $table      = 'pancasudha';
    public function getPancasudha($panca = false)
    {
        return $this->where(['pancasudha' => $panca])->first();
    }
}
