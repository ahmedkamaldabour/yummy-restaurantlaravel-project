<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
	public function index()
	{
		$abouts = About::findorfail(1);
		return view('front.about', compact('abouts'));
	}
}
