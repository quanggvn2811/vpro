@extends('admin.master')
@section('title', 'Add product')	
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
				<div class="panel-heading">Thêm sản phẩm</div>
				<div class="panel-body">
					<form method="post" enctype="multipart/form-data">
						@csrf
						@include('errors.note')
						<div class="row" style="margin-bottom:40px">
							<div class="col-xs-8">
								<div class="form-group" >
									<label>Tên sản phẩm</label>
									<input required type="text" name="prod_name" class="form-control" placeholder="IPhone 8 Plus 64GB Quốc Tế">
								</div>
								<div class="form-group" >
									<label>Giá sản phẩm</label>
									<input required type="number" name="prod_price" class="form-control" placeholder="8990000">
								</div>
								<div class="form-group" >
									<label>Ảnh sản phẩm</label>
									<input required id="prod_picture" style="background-image: url('img/new_seo-10-512.png'); width: 400px; height: 300px;" type="file" name="prod_picture" class="form-control" onchange="changeImg(this)">
									{{-- <img id="avatar" class="thumbnail" width="300px" src="img/new_seo-10-512.png"> --}}
								</div>
								<div class="form-group" >
									<label>Phụ kiện</label>
									<input required type="text" name="prod_accessories" class="form-control" placeholder="Fullbox">
								</div>
								<div class="form-group" >
									<label>Bảo hành</label>
									<input required type="text" name="prod_warranty" class="form-control" placeholder="12 tháng">
								</div>
								<div class="form-group" >
									<label>Khuyến mãi</label>
									<input required type="text" name="prod_promotion" class="form-control" placeholder="30%">
								</div>
								<div class="form-group" >
									<label>Tình trạng</label>
									<input required type="text" name="prod_status" class="form-control" placeholder="New">
								</div>
								<div class="form-group" >
									<label>Trạng thái</label>
									<select required name="prod_instock" class="form-control">
										<option value="1">Còn hàng</option>
										<option value="0">Hết hàng</option>
									</select>
								</div>
								<div class="form-group" >
									<label>Miêu tả</label>
									<textarea required name="prod_description" style="width: 100%; height: 150px;" class="ckeditor" placeholder="Sản phẩm chính hãng Apple"></textarea>
								</div>
								<div class="form-group" >
									<label>Danh mục</label>
									<select required name="cate_id" class="form-control">
										@foreach($catelist as $cate)
										<option value="{{$cate->cate_id}}">{{$cate->cate_name}}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group" >
									<label>Sản phẩm nổi bật</label><br>
									Có: <input type="radio" name="prod_featured" value="1">
									Không: <input type="radio" checked name="prod_featured" value="0">
								</div>
								<input type="submit" name="submit" value="Thêm" class="btn btn-primary" style="width: 200px; height: 50px;">
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