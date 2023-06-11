<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BukuModel;

class BukuController extends BaseController
{
    public function create()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahunTerbit' => 'required|numeric|greater_than[1800]|less_than[2024]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('error', $validation->getErrors());
        }

        $judul = $this->request->getPost('judul');
        $penulis = $this->request->getPost('penulis');
        $penerbit = $this->request->getPost('penerbit');
        $tahunTerbit = $this->request->getPost('tahunTerbit');

        $bukuModel = new BukuModel();
        $data = [
            'judul' => $judul,
            'penulis' => $penulis,
            'penerbit' => $penerbit,
            'tahun_terbit' => $tahunTerbit
        ];
        $bukuModel->insert($data);

        return redirect()->back()->with('success', 'Data buku berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $bukuModel = new BukuModel();
        $data = $bukuModel->find($id);

        echo json_encode($data);
    }

    public function update($id)
    {
        $bukuModel = new BukuModel();

        $data = [
            'judul' => $this->request->getPost('editJudul'),
            'penulis' => $this->request->getPost('editPenulis'),
            'penerbit' => $this->request->getPost('editPenerbit'),
            'tahun_terbit' => $this->request->getPost('editTahunTerbit')
        ];

        $bukuModel->update($id, $data);

        return redirect()->to('/')->with('success', 'Data buku berhasil diperbarui');
    }

    public function delete($id)
    {
        $bukuModel = new BukuModel();
        $bukuModel->delete($id);

        return redirect()->to('/')->with('success', 'Data buku berhasil dihapus');
    }
}
