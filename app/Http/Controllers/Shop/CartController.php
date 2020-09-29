<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Cart;
class CartController extends Controller
{
    public function getAddCart($id){
    	$product = Product::find($id);
    	Cart::add(['id' => $product->prod_id, 'name' => $product->prod_name, 'qty' => 1, 'price' => $product->prod_price, 'weight'=>'1', 'options' => ['img' => $product->prod_picture]]);
    	//dd(Cart::content());
    	return redirect('cart/show');
    }
    public function getShowCart(){
    	$data['total'] = Cart::total();
    	$data['products'] = Cart::content();
    	return view('shop.shopping.cart-list', $data);
    }
}
