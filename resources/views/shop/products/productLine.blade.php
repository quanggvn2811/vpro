@extends('shop.master')
@section('title', 'VPro | Products line')
@section('content')
<link rel="stylesheet" href="css/category.css">
<div id="wrap-inner">
	<div class="products">
		<h3>{{$category->cate_name}}</h3>
		<div class="product-list row">
			@foreach($productsline as $product)
			<div class="product-item col-md-3 col-sm-6 col-xs-12">
				<a href="#"><img src="{{URL::to('storage/avatars/'. $product->prod_picture)}}" class="img-thumbnail"></a>
				<p><a href="#">{{$product->prod_name}}</a></p>
				<p class="price">{{number_format($product->prod_price)}}</p>	  
				<div class="marsk">
					<a href="{{URL::to('details/'. $product->prod_id . '/' . $product->prod_slug . '.html')}}">Xem chi tiết</a>
				</div>                                    
			</div>
			@endforeach
		</div>                	                	
	</div>

	<div id="pagination">
		{{-- <ul class="pagination pagination-lg justify-content-center">
			<li class="page-item">
				<a class="page-link" href="#" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span>
					<span class="sr-only">Previous</span>
				</a>
			</li>
			<li class="page-item disabled"><a class="page-link" href="#">1</a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item">
				<a class="page-link" href="#" aria-label="Next">
					<span aria-hidden="true">&raquo;</span>
					<span class="sr-only">Next</span>
				</a>
			</li>
		</ul> --}}
		{{$productsline->links()}}
	</div>
</div>
@endsection