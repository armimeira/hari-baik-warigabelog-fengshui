<?php

namespace App\Models;

use CodeIgniter\Model;

class WarigaModel extends Model
{
    protected $table      = 'kalender';
    public function getWariga($tanggal = null)
    {
        //dd($tanggal);
        if ($tanggal == null) {
            return $this->findAll();
        }
        return $this->where(['tanggal' => $tanggal])->first();
    }
}
