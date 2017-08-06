<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;

class CartController extends RootController
{
    //
    
    function index()
    {
    	return view('pages/cart');
    }

    function addCart($id)
    {
    	$product = Product::where('id', $id)->first();
    	Cart::add(array('id'=>$id, 'name'=> $product->name, 'qty'=> 1 , 'price' => $product->price, 'options' => array('img' => $product->image_logo )));
    	return redirect()->route('cart');
    }

    function deleteCartItem(Request $rq)
    {
    	Cart::remove($rq->rowid);
    	return redirect()->route('cart');
    }

    function destroyCart()
    {
    	Cart::destroy();
    	return redirect()->route('cart');
    }

    function getCheckOut()
    {
    	return view('pages/checkout');
    }
}
