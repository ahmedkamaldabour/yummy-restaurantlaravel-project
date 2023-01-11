<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\traits\UplodaImage;
use Illuminate\Http\Request;
use function dd;

class AdminGalleryController extends Controller
{
	use UplodaImage;

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$galleries = Gallery::all();
		return view('admin.gallery.index', compact('galleries'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		// validate the request
		$request->validate([
			'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		]);
		// upload the image
		$gallery_image = $this->uploadImage($request->file('image'), 'images/gallery');
		// store the image in the database
		Gallery::create([
			'image' => $gallery_image,
		]);
		return redirect()->route('gallery.index')->with('success', 'Image added successfully');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('admin.gallery.create');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Gallery $gallery)
	{
		return view('admin.gallery.edit', compact('gallery'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int                       $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Gallery $gallery)
	{
		// validate the request
		$request->validate([
			'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		]);
		// upload the image
		$gallery_image = $this->uploadImage($request->file('image'), 'images/gallery');
		// delete the old image
		$this->deleteOldImage($gallery->image, 'images/gallery');
		// update the image in the database
		$gallery->update([
			'image' => $gallery_image,
		]);
		return redirect()->route('gallery.index')->with('success', 'Image updated successfully');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Gallery $gallery)
	{
		// delete the image
		$this->deleteOldImage($gallery->image, 'images/gallery');
		// delete the image from the database
		$gallery->delete();
		return redirect()->route('gallery.index')->with('success', 'Image deleted successfully');
	}
}
