<?php

namespace App\Models;

use CodeIgniter\Model;

class PeluangusahaModel extends Model
{
    protected $table      = 'peluang_usaha';
    public function getPeluangusaha($usaha = false)
    {
        if ($usaha == false) {
            return $this->findAll();
        }
        return $this->where(['angka_shio' => $usaha])->first();
    }
}