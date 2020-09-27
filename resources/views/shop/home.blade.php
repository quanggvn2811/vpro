@extends('shop.master')
@section('title', 'VProshop | Home')
@section('content')

<div id="wrap-inner">
	<div class="products">
		<h3>sản phẩm nổi bật</h3>
		<div class="product-list row">
			@foreach($prod_featured as $product)
			<div class="product-item col-md-3 col-sm-6 col-xs-12">
				<a href="#"><img src="{{asset('storage/avatars/'. $product->prod_picture)}}" class="img-thumbnail"></a>
				<p><a href="#">{{$product->prod_name}}</a></p>
				<p class="price">{{number_format($product->prod_price)}}</p>	  
				<div class="marsk">
					<a href="{{URL::to('details/'. $product->prod_id.'/'.$product->prod_slug.'.html')}}">Xem chi tiết</a>
				</div>                                    
			</div>
			@endforeach
		</div>                	                	
	</div>

	<div class="products">
		<h3>sản phẩm mới</h3>
		<div class="product-list row">
			@foreach($prod_new as $product)
			<div class="product-item col-md-3 col-sm-6 col-xs-12">
				<a href="#"><img src="{{asset('storage/avatars/'. $product->prod_picture)}}" class="img-thumbnail"></a>
				<p><a href="#">{{$product->prod_name}}</a></p>
				<p class="price">{{number_format($product->prod_price)}}</p>	  
				<div class="marsk">
					<a href="{{URL::to('details/'. $product->prod_id.'/'.$product->prod_slug.'.html')}}">Xem chi tiết</a>
				</div>                      	                        
			</div>
		 @endforeach
		</div>    
	</div>
</div>
@endsection