<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreBookPostRequest extends Request {

	protected $rules = [
		'book_name' 		=> 'required|min:3|max:255|unique:books',
		'author'		=> 'required|min:3|max:255',
		'publication'		=> 'required|min:3|max:255',
		'description' 		=> 'required',
		'rate'			=> 'required|between:0,999999.99',
		'discount'		=> 'required|between:0,99999.99',
		'discount_qty'		=> 'required|integer',
		'book_type_id'		=> 'required|exists:book_types',
		'category_id'		=> 'required|exists:categories',
		'download_link' 	=> 'required|mimes:jpeg,bmp,png,jpg',
	];

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
	 * @return array
	 */
	public function rules()
	{

		if ($this->book_id) {
			$this->rules['book_name'] = 'required|min:3|max:255';
			$this->rules['download_link'] = 'mimes:jpeg,bmp,png,jpg';
			return $this->rules;
		} else {
			return $this->rules;
		}
	}

}
