<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BookTable;
use Illuminate\Http\Request;

class AdminBookController extends Controller
{
	public function index()
	{
		// get all book with pagination
		$books = BookTable::paginate();
		return view('admin.book.index', compact('books'));
	}

	public function destroy(BookTable $bookTable)
	{
		$bookTable->delete();
		return redirect()->route('bookings')->with('success', 'Booking deleted successfully');
	}

	public function show(BookTable $bookTable)
	{
		return view('admin.book.show', compact('bookTable'));
	}
}
