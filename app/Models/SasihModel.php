<?php

namespace App\Models;

use CodeIgniter\Model;

class SasihModel extends Model
{
    protected $table      = 'sasih';
    public function getSasih($sasih = false)
    {
        if ($sasih == false) {
            return $this->findAll();
        }
        return $this->where(['bulan' => $sasih])->first();
    }
}
