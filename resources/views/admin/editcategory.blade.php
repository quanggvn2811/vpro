@extends('admin.master')
@section('title', 'Edit category')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Danh mục sản phẩm</h1>
		</div>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-xs-12 col-md-5 col-lg-5">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Sửa danh mục
				</div>
				<div class="panel-body">
					<form action="" method="post">
						@csrf
						<div class="form-group">
							<label>Tên danh mục:</label>
							@include('errors.note')
							<input type="text" name="name" class="form-control" placeholder="Tên danh mục..." value="{{$cateEdit->cate_name}}">
							<input type="submit" name="submit" value="Sửa đổi" class="form-control btn btn-danger" style="margin: 15px 0px; height: 50px;">
						</div>
					</form>
					<a href="{{URL::to('admin/categories')}}"><button class="btn btn-primary" style="width: 100%; height: 50px;">Hủy bỏ</button></a>
				</div>

			</div>
		</div>
	</div>
</div><!--/.row-->
</div>	<!--/.main-->
@endsection