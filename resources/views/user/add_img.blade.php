<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>
<body>
	<form action="{{ route('post_add_img') }}" method="post" enctype="multipart/form-data">
		chon anh <input type="file" name="image">
		<br>
		<button type="submit">
			add
		</button>
	</form>
</body>
</html>