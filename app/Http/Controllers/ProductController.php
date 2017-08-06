<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\CategoryChild;
use App\categoryParent;

class ProductController extends RootController
{
    //
    function getListProductByChild($id_categoryChild)
    {
    	$categoryChild = CategoryChild::where('id',$id_categoryChild)->first();
    	$list = Product::where('id_category_child', $id_categoryChild)->latest()->paginate(5);
    	$count = Product::where('id_category_child', $id_categoryChild)->count();
    	return view('pages/listproduct',['data'=>$list,'categoryChild'=>$categoryChild, 'count' => $count]);
    }

    function getListProductByParent($id_categoryParent)
    {
    	$categoryParent = CategoryParent::where('id', $id_categoryParent)->first();
    	$listChild = $categoryParent->categoryChild;

    	$idChild = array();
    	foreach($listChild as $row)
    	{
    		array_push($idChild,$row->id);
    	}
    	
    	$list = Product::whereIn('id_category_child', $idChild)->latest()->paginate(5);
    	$count = Product::whereIn('id_category_child', $idChild)->count();
    	//var_dump($list);
    	return view('pages/listproductpa',['data'=>$list, 'categoryParent' =>$categoryParent, 'count'=>$count]);
    }

    function getDetailProduct($id)
    {
    	$product = Product::where('id', $id)->first();
    	$productRelative = Product::where('id_category_child', $product->id_category_child)->inRandomOrder()->take(10)->get();
    	$categoryChild = $product->categoryChild;
    	$categoryParent = $categoryChild->categoryParent;
    	return view('pages/detailproduct',['data'=>$product,'productRelative' =>$productRelative, 'categoryChild' => $categoryChild, 'categoryParent' => $categoryParent]);
    }

    function getPreview($id)
    {
    	$product = Product::where('id', $id)->first();
    	return view('pages/preview',['data'=>$product]);
    }
}
