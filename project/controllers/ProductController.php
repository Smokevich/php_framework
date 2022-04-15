<?php

namespace Project\Controllers;

use \Core\Controller;
use \Project\Models\Product;

class ProductController extends Controller
{

    public function show($value)
    {
        $id = $value['id'];
        if ($this->checkCount($id)) {
            $product = new Product;
            $value = $product->getById($id);
            $this->title = $value['name'];
            return $this->render('product/show', $value);
        }
    }

    public function all()
    {
        $product = new Product;
        $this->title = 'Все продукты';
        return $this->render('product/all', $product->getAll());
    }

    private function checkCount($id)
    {
        $product = new Product;
        if ($product->getCount()[0] > $id && $id >= 1) {
            return true;
        }
        return false;
    }
}
