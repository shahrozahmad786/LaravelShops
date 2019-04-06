<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories=Category::all();
        $name='Category';

        return view('admin.categories.index',compact('categories','name'));
    }
}
