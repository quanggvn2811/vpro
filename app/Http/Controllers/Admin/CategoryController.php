<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCate(){
    	return view('admin.category');
    }
    public function editCate(){
    	return view('admin.editcategory');
    }
}
