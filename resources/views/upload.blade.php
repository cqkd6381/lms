<!DOCTYPE html>
<html>
<head>
	<title>upload</title>
</head>
<body>
	<div>
		<form method="post" action="http://upload.qiniu.com" enctype="multipart/form-data">
		  	<input name="token" type="hidden" value="{{$token}}">
		  	<input name="file" type="file" />
		  	<input type="submit" value="上传"/>
		</form>
		<!-- <form method="post" action="http://upload.qiniu.com/" enctype="multipart/form-data">
		  	<input name="key" type="hidden" value="key">
		  	<input name="xname" type="hidden" value="xname">
		  	<input name="token" type="hidden" value="{{$token}}">
	  		<input name="file" type="file" />
		  	<input name="crc32" type="hidden" />
		  	<input name="accept" type="hidden" />
		  	<input type="submit" value="上传"/>
		</form> -->
	</div>
</body>
</html>