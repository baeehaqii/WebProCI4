<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Matakuliah extends BaseController
{
    public function index()
    {
        return view('view-form-matakuliah');
    }

    public function __construct()
    {
        $this->validation = \Config\Services::validation();
    }

    public function cetak()
    {
        $this->validation->setRule(
            'kode',
            'Kode Matakuliah',
            'required|min_length[3]',
            [
                'required' => 'Kode Matakuliah Harus diisi',
                'min_length' => 'Kode terlalu pendek'
            ]
        );

        $this->validation->setRule(
            'nama',
            'Nama Matakuliah',
            'required|min_length[3]',
            [
                'required' => 'Nama Matakuliah Harus diisi',
                'min_length' => 'Nama terlalu pendek'
            ]
        );

        if (!$this->validation->withRequest($this->request)->run()) {
            return view('view-form-matakuliah');
        } else {
            $data = [
                'kode' => $this->request->getPost('kode'),
                'nama' => $this->request->getPost('nama'),
                'sks' => $this->request->getPost('sks')
            ];
            return view('view-data-matakuliah', $data);
        }
    }


}