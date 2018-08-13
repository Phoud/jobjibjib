<!DOCTYPE html>
<html>
@include('admin.partial.header')
<body>
	@include('admin.partial.navbar')
<div class="wrapper">
    <div class="columns">
	@include('admin.partial.sidebar')
	@yield('content')
	</main>
    </div>
</div>
</body>
</html>