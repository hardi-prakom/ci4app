<?php

namespace App\Controllers;

use App\Models\PegawaiModel;

class Pegawai extends BaseController
{
    protected $pegawaiModel;
    public function __construct()
    {
        $this->pegawaiModel = new PegawaiModel();
    }
    public function index()
    {
        // $pegawai = $this->pegawaiModel->findAll();

        $data = [
            'title' => 'Data Pegawai | SIMPEG',
            'pegawai' => $this->pegawaiModel->getPegawai()
        ];


        return view('pegawai/index', $data);
    }

    public function detail($nip)
    {
        $data = [
            'title' => 'Detail Pegawai',
            'pegawai' => $this->pegawaiModel->getPegawai($nip)
        ];
        return view('pegawai/detail', $data);
    }
}
