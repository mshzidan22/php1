<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;


class CategoryController extends Controller
{
    public function index()
    {
        $cats = Category::all();
        return $cats;
    }

    public function getAllAdsByCategoryId($id){
        $cat = Category::find($id);
        $products = $cat->products;
        return $products;
    }
}
