@extends('admin.master')
@section('title', 'Category')
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
					Thêm danh mục
				</div>
				<div class="panel-body">
					<form method="post" action="">
						@csrf
						@include('errors.note')
						<div class="form-group">
						<label>Tên danh mục:</label>
						<input type="text" name="name" class="form-control" placeholder="Tên danh mục...">
						<input type="submit" name="submit" value="Thêm danh mục" class="btn btn-primary" style="margin-top: 15px; width: 100%; height: 50px;">
					</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-7 col-lg-7">
			<div class="panel panel-primary">
				<div class="panel-heading">Danh sách danh mục</div>
				<div class="panel-body">
					<div class="bootstrap-table">
						<table class="table table-bordered">
							<thead>
								<tr class="bg-primary">
									<th>Tên danh mục</th>
									<th style="width:30%">Tùy chọn</th>
								</tr>
							</thead>
							<tbody>
								@foreach($catelist as $cate)
								<tr>
									<td>{{$cate->cate_name}}</td>
									<td>
										<a href="{{URL::to('admin/categories/edit/'. $cate->cate_id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
										<a href="{{URL::to('admin/categories/delete/'. $cate->cate_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
									</td>
								</tr>
							@endforeach
							</tbody>
						</table>
						<div>
							{{$catelist->links()}}
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->
@endsection