<!DOCTYPE html>
<html lang="en">
	<head>
		@include('admin.headtags')
	</head>
  <body>
	@include('admin.header')
	@yield('content')
	@include('admin.footer')
	@include('admin.scripts')
</body>
</html>