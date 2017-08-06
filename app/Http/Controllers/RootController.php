<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryParent;
use Illuminate\Support\Facades\View;
use Cart;

class RootController extends Controller
{
    //
    public function __construct()
	{
		$category_parent = CategoryParent::all();
		
		View::share('category_parent_list', $category_parent);
	}
}
