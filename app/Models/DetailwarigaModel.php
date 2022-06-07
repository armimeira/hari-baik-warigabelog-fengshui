<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailwarigaModel extends Model
{
    protected $table      = 'kalender';
    public function getDetailwariga($detail = false)
    {
        if ($detail == false) {
            return $this->findAll();
        }
        return $this->where(['tanggal' => $detail])->first();
    }
}
