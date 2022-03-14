<?php

namespace App\Models;

use CodeIgniter\Model;

class PegawaiModel extends Model
{
    protected $table = 'data_pegawai';

    public function getPegawai($nip = false)
    {
        if ($nip == false) {
            return $this->findAll();
        }

        return $this->where(['nip' => $nip])->first();
    }
}
