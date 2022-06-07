<?php

namespace App\Models;

use CodeIgniter\Model;

class FengshuiModel extends Model
{
    protected $table      = 'fengshui';
    public function getFengshui($angka_kua)
    {
        return $this->where(['angka_kua' => $angka_kua])->first();
    }
}
