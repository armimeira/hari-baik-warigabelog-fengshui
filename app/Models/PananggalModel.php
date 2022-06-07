<?php

namespace App\Models;

use CodeIgniter\Model;

class PananggalModel extends Model
{
    protected $table      = 'pananggal';
    public function getPananggal($panang = false)
    {
        if ($panang == false) {
            return $this->findAll();
        }
        return $this->where(['angka_pananggal' => $panang])->first();
    }
}