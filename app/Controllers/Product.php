<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Product extends BaseController
{
    protected $ProductModel;
    public function __construct()
    {
        $this->ProductModel = new ProductModel();
    }

    public function index()
    {
        $product = $this->ProductModel->findall();

        $data = [
            'title' => 'Product',
            'product' => $product
        ];

        // cara connect DB tanpa model
        // $db = \config\Database::connect();
        // $product = $db->query("SELECT * FROM product");
        // foreach ($product->getResultArray() as $row) {
        //     d($row);
        // }


        return view('product/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Produk'
        ];

        return view('product/create', $data);
    }

    public function save()
    {
        $this->komikModel->save([
            'kodebarang' => $this->request->getVar('kodebarang'),
            'namabarang' => $this->request->getVar('namabarang'),
            'hargabarang' => $this->request->getVar('hargabarang'),
            'description' => $this->request->getVar('description')


        ]);
    }
}
