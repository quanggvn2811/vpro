@extends('admin.master')
@section('title', 'Edit product')
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Sản phẩm</h1>
		</div>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">
			
			<div class="panel panel-primary">
				<div class="panel-heading">Sửa sản phẩm</div>
				<div class="panel-body">
					<form method="post" enctype="multipart/form-data">
						@csrf
						<div class="row" style="margin-bottom:40px">
							<div class="col-xs-8">
								<div class="form-group" >
									<label>Tên sản phẩm</label>
									<input required type="text" name="prod_name" value="{{$product->prod_name}}" class="form-control">
								</div>
								<div class="form-group" >
									<label>Giá sản phẩm</label>
									<input required type="number" name="prod_price" value="{{$product->prod_price}}" class="form-control">
								</div>
								<div class="form-group" >
									<label>Ảnh sản phẩm</label>
									{{-- <input id="img" type="file" name="img" class="form-control " onchange="changeImg(this)">
									<img id="avatar" class="thumbnail" width="300px" src="img/iphone7-plus-black-select-2016.jpg"> --}}
									<input name="prod_picture" style="background-image: url({{asset('storage/avatars/'. $product->prod_picture)}}); width: 400px; height: 300px;" type="file" name="prod_picture" class="form-control">
									<input type="hidden" name="prod_picture" value="{{$product->prod_picture}}">
								</div>
								<div class="form-group" >
									<label>Phụ kiện</label>
									<input required type="text" name="prod_accessories" value="{{$product->prod_accessories}}" class="form-control">
								</div>
								<div class="form-group" >
									<label>Bảo hành</label>
									<input required type="text" name="prod_warranty" value="{{$product->prod_warranty}}" class="form-control">
								</div>
								<div class="form-group" >
									<label>Khuyến mãi</label>
									<input required type="text" name="prod_promotion" value="{{$product->prod_promotion}}" class="form-control">
								</div>
								<div class="form-group" >
									<label>Tình trạng</label>
									<input required type="text" name="prod_status" value="{{$product->prod_status}}" class="form-control">
								</div>
								<div class="form-group" >
									<label>Trạng thái</label>
									<select required name="prod_instock" class="form-control">
										<option @if($product->prod_instock === 1) selected @endif value="1">Còn hàng</option>
										<option @if($product->prod_instock === 0) selected @endif value="0">Hết hàng</option>
									</select>
								</div>
								<div class="form-group" >
									<label>Miêu tả</label>
									<textarea required name="prod_description" class="ckeditor">{{$product->prod_description}}</textarea>
								</div>
								<div class="form-group" >
									<label>Danh mục</label>
									<select required name="cate_id" class="form-control">
										@foreach($catelist as $cate)
										<option @if($cate->cate_id == $product->cate_id) selected @endif value="{{$cate->cate_id}}">{{$cate->cate_name}}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group" >
									<label>Sản phẩm nổi bật</label><br>
									Có: <input type="radio" @if($product->prod_featured === 1) checked @endif name="prod_featured" value="1">
									Không: <input type="radio" @if($product->prod_featured === 0) checked @endif name="prod_featured" value="0">
								</div>
								<input type="submit" name="submit" value="Sửa sản phẩm" class="btn btn-primary" style="width: 200px; height: 50px;">
								<a href="{{asset('admin/products/')}}" style="width: 200px; height: 50px; padding-top: 15px;" class="btn btn-danger">Hủy bỏ</a>
							</div>
						</div>
					</form>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->
@endsection