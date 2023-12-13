<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Product extends BaseController
{

    protected $productModel;
    public function __construct()
    {
        // $this->model = new \App\Models\ModelProduct();
        $this->productModel = new ProductModel();
    }

    public function index() //: string
    {
        $product = $this->productModel->findAll();

        $data = [
            'title' => 'Crud Codeigniter 4',
            'product' => $product,
        ];
        return view('product/product_view', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Add Product',
        ];
        return view('product/add', $data);
    }

    public function save()
    {
        $this->productModel->save($this->request->getVar());

        session()->setFlashdata('success', 'Product added succesfully');
        return redirect()->to('/product');
    }

    public function edit($id)
    {
        $product = $this->productModel->find($id);

        $data = [
            'title' => 'Edit Product',
            'product' => $product,
        ];

        return view('product/edit', $data);
    }

    public function update()
    {
        $data = $this->request->getVar();
        // dd($data['id']);
        // $this->productModel->where('id', $data['id']);
        // $this->productModel->update($data);
        session()->setFlashdata('success', 'Product updated succesfully');
        $this->productModel->save($this->request->getVar());
        return redirect()->to('/product');

    }

    public function delete($id)
    {
        $this->productModel->delete($id);
        session()->setFlashdata('success', 'Product deleted succesfully');
        return redirect()->to('/product');
    }
}
