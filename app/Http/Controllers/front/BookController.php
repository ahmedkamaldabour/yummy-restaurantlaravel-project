<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBookRequest;
use App\Models\BookTable;
use Illuminate\Http\Request;
use function redirect;

class BookController extends Controller
{
	public function store(StoreBookRequest $request)
	{
		// store the data in the database using the eloquent model
		//		$data = new BookTable();
		//		$data->name = $request->name;
		//		$data->email = $request->email;
		//		$data->phone = $request->phone;
		//		$data->date = $request->date;
		//		$data->time = $request->time;
		//		$data->message = $request->message;
		//		$data->number_of_people = $request->number_of_people;
		//		$data->save();
		// save the data in the database using the eloquent model
		BookTable::create($request->all());
		return redirect()->to(URL()->previous().'#book-a-table')
			->with('success', 'Your booking has been received. We will contact you shortly.');
	}
}
