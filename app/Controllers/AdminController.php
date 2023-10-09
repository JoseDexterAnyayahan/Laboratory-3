<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    private $products;
    public function __construct()
    {
        $this->products = new \App\Models\ProductsModel;
    }
    public function index()
    {
        $data = [
            'products' => $this->products->findAll(),
        ];
        return view('admin/manage', $data);
    }
    public function add()
    {
        $productName = $this->request->getPost('productName');
        $category = $this->request->getPost('category');
        $details = $this->request->getPost('details');
        $price = $this->request->getPost('price');
        $availability = $this->request->getPost('availability');
        $img = $this->request->getFile('img');


        $validationRules = [
            'productName' => 'required',
            'category' => 'required',
            'details' => 'required',
            'price' => 'required|numeric',
            'availability' => 'required',
            'img' => 'uploaded[img]|max_size[img,1024]|is_image[img]',
        ];



        if (!$validationRules) {
            return redirect()->back()->withInput()->with('error', 'Failed to upload the image.');
        }


        if ($img->isValid() && !$img->hasMoved()) {

            $newName = $img->getRandomName();


            $img->move(ROOTPATH . 'public/assets/img/product/', $newName);
            $imgname = 'assets/img/product/' . $newName;


            $data = [
                'productname' => $productName,
                'category' => $category,
                'details' => $details,
                'price' => $price,
                'availability' => $availability,
                'img' => $imgname,

            ];

            $this->products->insert($data);
            //var_dump($data);

            return redirect()->to('/manage')->with('success', 'Product added successfully.');
        }

        return redirect()->back()->withInput()->with('error', 'Failed to upload the image.');
    }
    public function delete($id)
    {

        $product = $this->products->find($id);

        if (!$product) {
            return redirect()->to('/manage')->with('error', 'Product not found.');
        }


        $this->products->delete($id);

        return redirect()->to('/manage')->with('success', 'Product deleted successfully.');
    }
    public function edit()
    {
        // Retrieve form data
        $productId = $this->request->getPost('product_id');
        $productName = $this->request->getPost('productName');
        $category = $this->request->getPost('category');
        $details = $this->request->getPost('details');
        $price = $this->request->getPost('price');
        $availability = $this->request->getPost('availability');

        // Initialize the data array
        $data = [
            'productname' => $productName,
            'category' => $category,
            'details' => $details,
            'price' => $price,
            'availability' => $availability,
        ];

        // Check if a file with name 'img' exists in the request
        if ($this->request->getFile('img')) {
            // Check if the uploaded file is valid
            if ($this->request->getFile('img')->isValid()) {
                // Handle image upload and update the image column
                $newImage = $this->request->getFile('img');
                $newImageName = $newImage->getRandomName();
                $newImage->move(ROOTPATH . 'public/assets/img/product/', $newImageName);

                // Update the image file path in the data array
                $data['img'] = 'assets/img/product/' . $newImageName;
            }
        }

        // Update the product in the database
        $this->products->update($productId, $data);

        // Redirect or return a response as needed
        return redirect()->to('/manage')->with('success', 'Product updated successfully.');
    }



}