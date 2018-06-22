<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ProductVueController extends Controller
{
    public function index()
    {
        $product = DB::table('product')->get();
        return $product;
    }
}
