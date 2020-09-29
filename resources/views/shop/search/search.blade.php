	<div id="search" class="col-md-7 col-sm-12 col-xs-12">
		<form action="{{asset('search-list/')}}" method="get"  name="sForm">
			<input type="text" id="sText" onfocus="searchFocus();" onblur="searchBlur();" name="search" value="Search...">
			<input type="submit" value="Search">
		</form>
	</div>

	<script>
		function searchFocus(){
			if(document.sForm.sText.value=='Search...') {
				document.sForm.sText.value='';
			}
		}
		function searchBlur(){
			if(document.sForm.sText.value=='') {
				document.sForm.sText.value='Search...';
			}
		}
	</script>