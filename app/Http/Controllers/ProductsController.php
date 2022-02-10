<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return Products::get();
    }

    public function show(Products $products, $productId)
    {
        return $products->find($productId);
    }

}
