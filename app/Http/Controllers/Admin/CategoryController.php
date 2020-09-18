<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AddCategoryRequest;
use App\Http\Requests\EditCategoryRequest;

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


    public function getEditCate($id){
        $data['cateEdit'] = Category::find($id);
        return view('admin.editcategory', $data);
    }
    public function postEditCate(EditCategoryRequest $request, $id){
        $cate = Category::find($id);
        $cate->cate_name = $request->name;
        $cate->cate_slug = str_slug($request->name);
        $cate->save();
        return redirect()->intended('admin/categories/');
    }
    
    public function deleteCate($id){
        Category::destroy($id);
        return back();

    }
}
