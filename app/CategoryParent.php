<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryParent extends Model
{
    protected $table = 'category_parent';

    public function categoryChild()
	{
		return $this->hasMany('App\categoryChild','id_category_parent');
	}
}
