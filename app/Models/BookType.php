<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookType extends Model {

	use SoftDeletes;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'book_types';

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $primaryKey = 'book_type_id';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['book_type', 'description'];

	public function book()
	{
		return $this->BelongsToMany('App\Models\Book', 'book_type_id', 'book_type_id');
	}

}
