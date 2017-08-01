<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function getListProduct()
    {
    	return view('pages/listproduct');
    }

    function getDetailProduct()
    {
    	return view('pages/detailproduct');
    }
}
