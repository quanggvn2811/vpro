<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>VPro login</title>

<link href="{{asset('/layouts/server-side/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('/layouts/server-side/css/datepicker3.css')}}" rel="stylesheet">
<link href="{{asset('/layouts/server-side/css/styles.css')}}" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->	

</head>

<body>
	
	<div class="row">	
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading" style="text-align: center; color: #FF0000;"><h2> Vpro Log In</h2></div>
				<div class="panel-body">
					<form role="form" method="post">
						@csrf
						<fieldset>
							@include('errors.note')
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" value="{{old('email')}}" type="email" autofocus="" required=""/>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password"  required="">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							<input type="submit" class="btn btn-primary"  style="width: 60%; margin-left: 100px;" value="Login">
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
		

	<script src="{{asset('/layouts/server-side/js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{asset('/layouts/server-side/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('/layouts/server-side/js/chart.min.js')}}"></script>
	<script src="{{asset('/layouts/server-side/js/chart-data.js')}}"></script>
	<script src="{{asset('/layouts/server-side/js/easypiechart.js')}}"></script>
	<script src="{{asset('/layouts/server-side/js/easypiechart-data.js')}}"></script>
	<script src="{{asset('/layouts/server-side/js/bootstrap-datepicker.js')}}"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
