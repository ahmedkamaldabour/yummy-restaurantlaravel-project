<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
	{
		// // get all categories from database
		 $categories = Category::all();
		// // get all products from database
		 $meals = Product::all();
		return view('front.menu', compact('meals'));
	}
}
