<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	protected $fillable = [
		'category_id',
		'name',
		'description',
		'price'
	];

	/**
	* Category from this product
	* @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	*/
	public function category()
	{
		return $this->belongsTo('App\Category');
	}

}
