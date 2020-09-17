<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AddCategoryRequest;

class CategoryController extends Controller
{
    public function getCate(){
    	$data['catelist'] = Category::all();
    	return view('admin.category', $data);
    }
    public function postCate(AddCategoryRequest $request){
    	$cate = new Category();
    	$cate->cate_name = $request->name;
    	$cate->cate_slug = str_slug($request->name);
    	$cate->save();
    	return back();
    }


    public function editCate(){
    	return view('admin.editcategory');
    }
    public function deleteCate(){
    	
    }
}
