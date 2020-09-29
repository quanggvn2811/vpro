<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use DB;
use App\Models\Comment;
use App\Http\Requests\SearchProductRequest;
class HomeController extends Controller
{
    public function getHome(){
    	$data['prod_featured'] = Product::where('prod_featured', 1)->orderBy('prod_id', 'DESC')->take(8)->get();
    	$data['prod_new'] = Product::orderBy('prod_id', 'DESC')->take(8)->get();
    	return view('shop.home', $data);
    }

    public function getDetails($id){
    	$data['product'] = Product::find($id);
        $data['comments'] = Comment::where('prod_id', $id)->paginate(5);
        return view('shop.products.productDetails', $data);
    }
    public function getProductLine($id){
    	$data['category'] = Category::find($id);
    	$data['productsline'] = Product::where('cate_id', $id)->orderBy('prod_id', 'DESC')->paginate(8);
    	return view('shop.products.productLine', $data);
    }
    public function postComment( Request $request, $id){
        $comment = new Comment();
        $comment['cmt_email'] = $request->email;
        $comment['cmt_username'] = $request->name;
        $comment['cmt_content'] = $request->content;
        $comment['prod_id'] = $id;
        $comment->save();
        return back();
    }
    public function searchList(SearchProductRequest $request){
        $search = $request->search;
        $data['keyword'] = $search;
        $search = str_replace(' ', '%', $search);
        $data['searchlist'] = Product::where('prod_name', 'like', '%'.$search.'%')
        ->orwhere('prod_description', 'like', '%'.$search.'%')->orderBy('prod_id', 'DESC')->paginate(8);
        $data['keyword'] = $search;
        return view('shop.search.search-list', $data);
    }
}
