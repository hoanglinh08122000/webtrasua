<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action=" {{ route('typeproduct.post_typeproduct') }} " method="post">
	@csrf
		ten the loai <input type="text" name="name"> <br>
		<button type="submit">
			add
		</button>
	</form>
</body>
</html>
	