<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
	public function index()
	{
		//		$categories = Category::all(); // this not good
		//get all categories with relationship
		$categories = Category::with('products')->paginate();
		return view('admin.category.index', compact('categories'));
	}

	public function store(Request $request)
	{
		$request->validate([
			'name' => 'required|string|unique:categories|max:50',
		]);
		Category::create($request->all());
		return redirect()->route('category.create')
			->with('success', 'Category created successfully.');
	}

	public function create()
	{
		return view('admin.category.create');
	}

	public function edit(Category $category)
	{
		return view('admin.category.edit', compact('category'));
	}

	public function update(Request $request, Category $category)
	{
		$request->validate([
			'name' => 'required|string|unique:categories|max:50',
		]);
		$category->update($request->all());
		return redirect()->route('category.index')
			->with('success', 'Category updated successfully');
	}

	public function destroy(Category $category)
	{
		$category->delete();
		return redirect()->route('category.index')
			->with('success', 'Category deleted successfully');
	}
}
