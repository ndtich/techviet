<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'product';

    
	public function categoryChild()
	{
		return $this->belongsTo('App\CategoryChild','id_category_categoryChild');
	}
}
