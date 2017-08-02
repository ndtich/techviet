<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryParent;

class HomeController extends Controller
{
    //
    function index()
    {
    	$category_parent = CategoryParent::all();
    	return view('pages/home',['category_parent_list'=> $category_parent]);
    }
}
