<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	/**
	* All products from this category
	* @return \Illuminate\Database\Eloquent\Relations\HasMany
	*/
	public function products()
	{
		return $this->hasMany('App\Product');
	}

}
