<?php

namespace App\Controllers;

use App\Models\CategoryModel;

class KategoriController extends BaseController
{
    protected $kategori;

    function __construct()
    {
        $this->kategori = new CategoryModel();
    }

    public function index()
    {
        $kategori = $this->kategori->findAll();
        $data['product_category'] = $kategori;

        return view('v_kategori', $data);
    }

    /*
    fungsi dibawah ini yang bertanggung jawab untuk
    menangani request dari http://localhost:8080/produk/edit/23
    */
    public function edit($id)
    {
        $dataForm = [
            'name' => $this->request->getPost('name'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        $this->kategori->update($id, $dataForm);

        return redirect('kategori')->with('success', 'Data Berhasil Diubah');
    }

    public function delete($id)
    {
        $this->kategori->delete($id);

        return redirect('kategori')->with('success', 'Data Berhasil Dihapus');
    }

    public function create()
    {
        $dataForm = [
            'name' => $this->request->getPost('name'),
            'created_at' => date('Y-m-d H:i:s'),
        ];

        $this->kategori->insert($dataForm);

        return redirect('kategori')->with('success', 'Data Berhasil Ditambah');
    }
}
