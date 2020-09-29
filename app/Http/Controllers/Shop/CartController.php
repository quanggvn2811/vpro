<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Cart;
use Mail;
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
    public function getUpdateCart(Request $request){
        Cart::update($request->rowId, $request->qty);
    }
    public function getDeleteCart($rowId){
       if($rowId == 'all'){
            Cart::destroy();
            return redirect('/');
       } else {
        Cart::remove($rowId);
        return back();
       }     
    }
    public function postSendEmail(Request $request){
        $data['info'] = $request->all();
        $data['cartlist'] = Cart::content();
        $data['total'] = Cart::total();
        $email = $request->email;

       Mail::send('shop.shopping.email', $data, function ($message) use ($email) {
            $message->from('giapvanngocquang@gmail.com', 'VProshop');
        
            $message->to($email, $email);
        
            $message->cc('ngocquang97bg@gmail.com', 'Ngoc Quang');
        
            $message->subject('Xác nhận mua hàng từ VProshop');
        
        });
       Cart::destroy();
       return view('shop.shopping.complete');
    }
}
