@extends('shop.master')
@section('title', 'VPro | Cart list')
@section('content')
<link rel="stylesheet" href="css/cart.css">
<script>
	function updateCart(rowId, qty){
		$.get(
			'{{asset('cart/update')}}',
			{rowId:rowId,qty:qty},
			function(){
				location.reload();
			}
			);
	}
</script>
<div id="wrap-inner">
	<div id="list-cart">
		<h3>Giỏ hàng</h3>
		<form>
			<table class="table table-bordered .table-responsive text-center">
				<tr class="active">
					<td width="11.111%">Ảnh mô tả</td>
					<td width="22.222%">Tên sản phẩm</td>
					<td width="22.222%">Số lượng</td>
					<td width="16.6665%">Đơn giá</td>
					<td width="16.6665%">Thành tiền</td>
					<td width="11.112%">Xóa</td>
				</tr>
				@foreach($products as $product)
				<tr>
					<td><img width="200px" height="150px" class="img-responsive" src="{{asset('storage/avatars/'. $product->options->img)}}"></td>
					<td>{{$product->name}}</td>
					<td>
						<div class="form-group">
							<input class="form-control" type="number" value="{{$product->qty}}" onchange="updateCart('{{$product->rowId}}', this.value)">
						</div>
					</td>
					<td><span class="price">{{number_format($product->price)}}</span></td>
					<td><span class="price">{{number_format($product->price*$product->qty)}}</span></td>
					<td><a href="{{URL::to('cart/delete/'. $product->rowId)}}">Xóa</a></td>
				</tr>
				@endforeach
				</tr>
			</table>
			<div class="row" id="total-price">
				<div class="col-md-6 col-sm-12 col-xs-12">										
					Tổng thanh toán: <span class="total-price">{{$total}}</span>

				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					<a href="{{URL::to('/')}}" class="my-btn btn" style="width: 150px;">Mua tiếp</a>
					{{-- <a href="#" class="my-btn btn">Cập nhật</a> --}}
					<a href="{{URL::to('cart/delete/all')}}" onclick="confirm('Xoá giỏ hàng của bạn?');" class="my-btn btn" style="width: 150px;">Xóa giỏ hàng</a>
				</div>
			</div>
		</form>             	                	
	</div>

	<div id="xac-nhan">
		<h3>Xác nhận mua hàng</h3>
		<form method="post">
			@csrf
			<div class="form-group">
				<label for="email">Email address:</label>
				<input required type="email" class="form-control" id="email" name="email">
			</div>
			<div class="form-group">
				<label for="name">Họ và tên:</label>
				<input required type="text" class="form-control" id="name" name="name">
			</div>
			<div class="form-group">
				<label for="phone">Số điện thoại:</label>
				<input required type="number" class="form-control" id="phone" name="phone">
			</div>
			<div class="form-group">
				<label for="add">Địa chỉ:</label>
				<input required type="text" class="form-control" id="add" name="addr">
			</div>
			<div class="form-group text-right">
				<button type="submit" class="btn btn-default">Thực hiện đơn hàng</button>
			</div>
		</form>
	</div>
</div>

@endsection