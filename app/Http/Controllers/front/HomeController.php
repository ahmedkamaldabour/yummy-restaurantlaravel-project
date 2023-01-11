<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Gallery;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{

	public function index()
	{
		// get all gallery images
		$galleries = Gallery::all();
		// get about page
		$abouts = About::findorfail(1);
		return view('front.index', compact('galleries', 'abouts'));
	}
}
