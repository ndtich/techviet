<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryChild extends Model
{
    protected $table = 'category_child';

    public function product()
	{
		return $this->hasMany('App\Product','id_category_child');
	}
	public function categoryParent()
	{
		return $this->belongsTo('App\CategoryParent','id_category_parent');
	}
}
