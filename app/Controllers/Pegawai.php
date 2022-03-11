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
        $pegawai = $this->pegawaiModel->findAll();
        $data = [
            'title' => 'Data Pegawai | SIMPEG',
            'pegawai' => $pegawai
        ];


        return view('pegawai/index', $data);
    }
}
