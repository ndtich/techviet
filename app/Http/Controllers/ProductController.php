<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends RootController
{
    //
    function getListProduct($id_categoryChild)
    {
    	$list = Product::where('id_category_child', $id_categoryChild)->get();
    	return view('pages/listproduct',['data'=>$list]);
    }

    function getDetailProduct($id)
    {
    	$product = Product::where('id', $id)->first();
    	return view('pages/detailproduct',['data'=>$product]);
    }

    function getPreview($id)
    {
    	$product = Product::where('id', $id)->first();
    	return view('pages/preview',['data'=>$product]);
    }
}
