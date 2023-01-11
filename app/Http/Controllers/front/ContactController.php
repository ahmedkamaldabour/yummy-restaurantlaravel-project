<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContentRequest;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\Contact;
use function compact;
use function view;

class ContactController extends Controller
{
	public function index()
	{
		$galleries = Gallery::all();
		return view('front.contact', compact('galleries'));
	}

	public function store(StoreContentRequest $request)
	{

//		dd($request->all());
		Contact::create($request->all());
		return redirect()->back()->with('success', 'Your message has been sent successfully');

	}
}
