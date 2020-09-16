<!DOCTYPE html>
<html>
<head>
	@include('admin.layouts.head')
	@stack('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">
		@include('admin.layouts.header')
		@include('admin.layouts.sidebar')

		@section('main-content')

			@show

		@include('admin.layouts.footer')
		@stack('js')
	</div>
</body>
</html>