<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use DB;
class HomeController extends Controller
{
    public function getHome(){
    	$data['prod_featured'] = Product::where('prod_featured', 1)->orderBy('prod_id', 'DESC')->take(8)->get();
    	$data['prod_new'] = Product::orderBy('prod_id', 'DESC')->take(8)->get();
    	return view('shop.home', $data);
    }

    public function getDetails($id){
    	$data['product'] = Product::find($id);
    	return view('shop.products.productDetails', $data);
    }
    public function getProductLine($id){
    	$data['category'] = Category::find($id);
    	$data['productsline'] = Product::where('cate_id', $id)->orderBy('prod_id', 'DESC')->paginate(8);
    	return view('shop.products.productLine', $data);
    }
}
