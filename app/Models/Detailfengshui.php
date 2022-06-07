<?php

namespace App\Models;

use CodeIgniter\Model;

class Detailfengshui extends Model
{
    protected $table      = 'shio';
    public function getDetailfengshui($shio = false)
    {
        if ($shio == false) {
            return $this->findAll();
        }
        return $this->where(['angka_shio' => $shio])->first();
    }
}
