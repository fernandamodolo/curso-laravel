<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products=['Product01','Product02','Product03'];
        return $products;
    }
  
    public function show($id)
    {
        return" Exibindo o produto do id: {$id}";
    }
}
