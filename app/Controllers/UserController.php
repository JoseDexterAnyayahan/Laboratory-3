<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    private $products;
    public function __construct()
    {
        $this->products = new \App\Models\ProductsModel();
    }
    public function index()
    {
        $data = [
            'where' => 'Home',
            'products' => $this->products->findAll(),
        ];
        return view('user/index', $data);
    }
    public function singleprod($id)
    {
        $data = [
            'where' => 'Product Details',
            'products' => $this->products->where('id', $id)->first(),
        ];
        // var_dump($data);
        return view('user/single-product', $data);

    }
    public function contact()
    {

        $data = [
            'where' => 'Contacts',
        ];
        return view('user/contact', $data);
    }
}