@if(Session::has('error'))
	<p class="alert alert-danger">{{Session::get('error')}}</p>
@endif
@foreach($errors->all() as $err)
	<p class="alert alert-danger">{{$err}}</p>
@endforeach 