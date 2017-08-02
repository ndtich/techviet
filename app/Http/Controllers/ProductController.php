<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends RootController
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

    function getPreview()
    {
    	return view('pages/preview');
    }
}
