<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model {

	use SoftDeletes;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'books';

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $primaryKey = 'book_id';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['book_name', 'author', 'publication', 'description', 'rate', 'discount', 'discount_qty', 'book_type_id', 'category_id', 'download_link', 'show_home_page'];

	// get category of the book
	public function category()
	{
		return $this->hasOne('App\Models\Category', 'category_id', 'category_id');
	}

	// get category of the book
	public function book_type()
	{
		return $this->hasOne('App\Models\BookType', 'book_type_id', 'book_type_id');
	}

}
