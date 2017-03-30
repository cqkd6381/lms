<!DOCTYPE html>
<html>
<head>
	<title>posts</title>
</head>
<body>
	<h1>{{$post->title}}</h1>
	@can('edit_form')
	<a href="#">编辑文章</a>
	@endcan
</body>
</html>