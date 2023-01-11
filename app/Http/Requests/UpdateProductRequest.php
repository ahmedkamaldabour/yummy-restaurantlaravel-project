<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
			// name, price, description, category_id , image
			'name'        => 'required|string|max:100',
			'price'       => 'required|numeric|min:0',
			'description' => 'required|string|max:255',
			'image'       => 'image|mimes:jpeg,png,jpg,gif,svg|max:4048',
			'category_id' => 'required|exists:categories,id',
		];
	}
}
