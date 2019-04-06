<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
        public function index()
        {  
            $products=Product::all();
            $name='Product';
            
            return view('admin.products.index',compact('name','products'));
        }
}
