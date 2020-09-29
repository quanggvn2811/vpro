<div id="cart" class="col-md-2 col-sm-12 col-xs-12">
	<a class="display" href="{{URL::to('cart/show')}}">Giỏ hàng</a>
	<a href="{{URL::to('cart/show')}}">{{Cart::count()}}</a>				    
</div>