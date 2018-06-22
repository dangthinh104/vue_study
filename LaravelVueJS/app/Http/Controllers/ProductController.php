<?php

namespace App\Http\Controllers;

use function view;

class ProductController extends Controller
{
    public function index()
    {
        return view('product');
    }
}
