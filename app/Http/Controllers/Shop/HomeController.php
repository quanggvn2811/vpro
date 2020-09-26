<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class HomeController extends Controller
{
    public function getHome(){
    	$data['prod_featured'] = Product::where('prod_featured', 1)->orderBy('prod_id', 'DESC')->take(8)->get();
    	$data['prod_new'] = Product::orderBy('prod_id', 'DESC')->take(8)->get();
    	return view('shop.home', $data);
    }

    public function getDetails($id){
    	return view('shop.products.productDetails');
    }
}
