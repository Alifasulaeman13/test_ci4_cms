<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Product extends BaseController
{
    protected $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    // READ: Tampilkan semua produk
    public function index()
    {
        $data['products'] = $this->productModel->findAll();
        return view('product/index', $data);
    }

    // CREATE: Form tambah produk
    public function create()
    {
        return view('product/create');
    }

    // CREATE: Simpan produk ke database
    public function store()
    {
        $this->productModel->save([
            'product_name' => $this->request->getPost('product_name'),
            'qty_in_stock' => $this->request->getPost('qty_in_stock'),
            'price'        => $this->request->getPost('price')
        ]);
        return redirect()->to('/product');
    }

    // UPDATE: Form edit produk
    public function edit($id)
    {
        $data['product'] = $this->productModel->find($id);
        return view('product/edit', $data);
    }

    // UPDATE: Simpan perubahan ke database
    public function update($id)
    {
        $this->productModel->update($id, [
            'product_name' => $this->request->getPost('product_name'),
            'qty_in_stock' => $this->request->getPost('qty_in_stock'),
            'price'        => $this->request->getPost('price')
        ]);
        return redirect()->to('/product');
    }

    // DELETE: Hapus produk
    public function delete($id)
    {
        $this->productModel->delete($id);
        return redirect()->to('/product');
    }
}
