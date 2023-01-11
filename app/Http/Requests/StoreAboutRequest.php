<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAboutRequest extends FormRequest
{
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
			// main_image , other_image , title , body , footer , phone
			'main_image'  => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			'other_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			'title'       => 'required|string|min:3',
			'description' => 'required|string|min:3',
			'footer'      => 'required|string|min:3',
			'phone'       => 'required|string',
		];
	}
}
