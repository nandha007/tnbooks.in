<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model {

	use SoftDeletes;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'categories';

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $primaryKey = 'category_id';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['category_name', 'description'];

	public function book()
	{
		return $this->BelongsToMany('App\Models\Book', 'category_id', 'category_id');
	}

}