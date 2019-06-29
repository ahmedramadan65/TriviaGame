<!DOCTYPE html>
<html>
<head>
	@include('vendor.multiauth.admin.layout.head')
</head>

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		@include('vendor.multiauth.admin.layout.header')

		@include('vendor.multiauth.admin.layout.sidebar')
		
		@section('main-content')
			@show
	</div>	
	@include('vendor.multiauth.admin.layout.footer')
	

</body>
</html>