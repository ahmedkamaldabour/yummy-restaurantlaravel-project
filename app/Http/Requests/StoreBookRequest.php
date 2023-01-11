<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
{
	protected $redirect = '/#book-a-table';

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, mixed>
	 */
	public function rules()
	{
		return [
			// name, email , time , data , #of people, message , phone
			'name'    => 'required|string|min:3|max:50',
			'email'   => 'required|string|email|max:255',
			'date'    => 'required|date_format:Y-m-d|after:now',
			'time'    => 'required|date_format:H:i',
			'number_of_people'  => 'required|integer|min:1:max:15',
			'message' => 'max:255',
			'phone'   => 'required|string|min:3|max:15',
		];
	}

}
