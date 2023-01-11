<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAboutRequest;
use App\Models\About;
use App\traits\UplodaImage;
use Illuminate\Http\Request;
use function compact;
use function dd;
use function view;

class AdminAboutController extends Controller
{
	use UplodaImage;

	public function index()
	{
		$abouts = About::all();
		return view('admin.about.index', compact('abouts'));
	}

	public function store(StoreAboutRequest $request)
	{
		$data = About::create($request->all());
		$mainImage = $this->uploadImage($request->main_image, 'images/about');
		$otherImage = $this->uploadImage($request->other_image, 'images/about');
		$data->update([
			'main_image'  => $mainImage,
			'other_image' => $otherImage,
		]);
		return redirect()->route('about.index')
			->with('success', 'About created successfully.');
	}

	public function create()
	{
		return view('admin.about.create');
	}

	public function update(StoreAboutRequest $request, About $about)
	{
		$about->update($request->all());
		// check if the request have been modified
		if ($request->hasFile('main_image')) {
			$this->deleteOldImage($about->main_image, 'images/about');
			$mainImage = $this->uploadImage($request->file('main_image'), 'images/about');
			$about->update(['main_image' => $mainImage]);
		}
		if ($request->hasFile('other_image')) {
			$this->deleteOldImage($about->other_image, 'images/about');
			$otherImage = $this->uploadImage($request->file('other_image'), 'images/about');
			$about->update(['other_image' => $otherImage]);
		}
		return redirect()->route('about.index')
			->with('success', 'About updated successfully.');
	}

	public function edit(About $about)
	{
		return view('admin.about.update', compact('about'));
	}

	public function destroy(About $about)
	{
		$this->deleteOldImage($about->main_image, 'images/about');
		$this->deleteOldImage($about->other_image, 'images/about');
		$about->delete();
		return redirect()->route('about.index')
			->with('success', 'About deleted successfully.');
	}
}


