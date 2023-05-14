<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Product;
use CodeIgniter\API\ResponseTrait;

class ProductController extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $product = new Product();
        $data['products'] = $product->findAll();
        return $this->respond($data, 200, 'Products Loaded Successfully');

    }

    public function create()
    {
        $product = new Product();
        $data = [
            'name' => $this->request->getVar('name'),
            'price' => $this->request->getVar('price')
        ];
        $product->save($data);
        return $this->respondCreated($data, 'Product Creadted Successfully');
    }

    public function edit($id)
    {
        $product = new Product();
        $data = [
            'name' => $this->request->getVar('name'),
            'price' => $this->request->getVar('price')
        ];
        $product->save($data, ['id' => $id]);
        return $this->respondUpdated($data, 'Product Updated Successfully');
    }

    public function delete($id)
    {
        $product = new Product();
        $data = [ 'id' => $id];
        $product->delete($data);
        return $this->respondDeleted($data, 'Product Deleted Successfully');
    }
}