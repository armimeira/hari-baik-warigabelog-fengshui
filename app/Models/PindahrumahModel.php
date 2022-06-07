<?php

namespace App\Models;

use CodeIgniter\Model;

class PindahrumahModel extends Model
{
    protected $table      = 'pindah_rumah';
    public function getPindahRumah($pindah = false)
    {
        if ($pindah == false) {
            return $this->findAll();
        }
        return $this->where(['angka_shio' => $pindah])->first();
    }
}
