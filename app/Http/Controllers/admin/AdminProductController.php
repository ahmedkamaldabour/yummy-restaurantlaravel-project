<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\traits\UplodaImage;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
	use UplodaImage;

	public function index()
	{
		// get all products
		$meals = Product::with('category')->paginate();
		return view('admin.products.index', compact('meals'));
	}

	public function store(StoreProductRequest $request)
	{
		$product = new Product();
		$product->name = $request->name;
		$product->price = $request->price;
		$product->description = $request->description;
		$product->category_id = $request->category_id;
		// upload image
		$image = $this->uploadImage($request->image, 'images/products');
		$product->image = $image;
		$product->save();
		return redirect()->route('product.index')
			->with('success', 'Product created successfully.');

	}

	public function update(UpdateProductRequest $request, Product $product)
	{
		$product->update($request->all());

		// check if the request have been modified
		if ($request->hasFile('image')) {
			$this->deleteOldImage($product->image, 'images/products');
			$image = $this->uploadImage($request->file('image'), 'images/products');
			$product->update(['image' => $image]);
		}
		return redirect()->route('product.index')
			->with('success', 'Product updated successfully.');
	}

	public function create()
	{
		// get all categories with relations
		$categories = Category::all();
		return view('admin.products.create', compact('categories'));
	}

	public function edit(Product $product)
	{
		$categories = Category::all();
		return view('admin.products.edit', compact('product', 'categories'));

	}

	public function destroy(Product $product)
	{
		$this->deleteOldImage($product->image, 'images/products');
		$product->delete();
		return redirect()->route('product.index')
			->with('success', 'Product deleted successfully.');
	}
}
