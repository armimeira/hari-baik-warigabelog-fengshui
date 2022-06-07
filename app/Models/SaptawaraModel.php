<?php

namespace App\Models;

use CodeIgniter\Model;

class SaptawaraModel extends Model
{
    protected $table      = 'hari_baik_bepergian';
    public function getSaptawara($sapta = false)
    {
        return $this->where(['sapta_wara' => $sapta])->findAll();
    }
}
