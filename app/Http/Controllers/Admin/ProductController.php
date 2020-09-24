<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AddProductRequest;
use App\Models\Product;
use DB;

class ProductController extends Controller
{
	// Show products
    public function getProduct(){
        // $data['productlist'] = Product::all();
        $data['productlist'] = DB::table('vp_products')->join('vp_categories', 'vp_products.cate_id', '=', 'vp_categories.cate_id')->orderBy('prod_id', 'DESC')->get();
        return view('admin.product', $data);
    }

    // Add product
    public function getAddProduct(){
        $data['catelist'] = Category::all();
        return view('admin.addproduct', $data);
    }
    public function postAddProduct(AddProductRequest $request){
        $product = new Product;
        $filename = $request->prod_picture->getClientOriginalName();
        $product->prod_name = $request->prod_name;
        $product->prod_slug = str_slug($request->prod_name);
        $product->prod_price = $request->prod_price;
        $product->prod_picture = $filename;
        $product->prod_accessories = $request->prod_accessories;
        $product->prod_warranty = $request->prod_warranty;
        $product->prod_promotion = $request->prod_promotion;
        $product->prod_status = $request->prod_status;
        $product->prod_instock = $request->prod_instock;
        $product->prod_description = $request->prod_description;
        $product->prod_featured = $request->prod_featured;
        $product->cate_id = $request->cate_id;

        $request->prod_picture->storeAs('public/avatars', $filename);
        $product->save();
        return back();

    }

    // Edit product
    public function getEditProduct($id){
    	return view('admin.editproduct');
    }
    public function postEditProduct($id){
    	
    }

    // Delete product
    public function deleteProduct($id){
    	echo 'deleted';
    }
}
