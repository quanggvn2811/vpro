<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
	// Show products
    public function getProduct(){
    	return view('admin.product');
    }

    // Add product
    public function getAddProduct(){
    	return view('admin.addproduct');
    }
    public function postAddProduct(){

    }

    // Edit product
    public function getEditProduct($id){
    	return view('admin.editproduct');
    }
    public function postEditProduct($id){
    	
    }

    // Delete product
    public function deleteProduct($id){
    	echo 'delete';
    }
}
