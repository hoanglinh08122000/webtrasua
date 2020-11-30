<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ route('post_register_customer') }}" method="post" enctype="multipart/form-data">
		@csrf
		
		ho <input type="text" name="last_name">
		<br>
		ten <input type="text" name="first_name">
		<br>
		phone <input type="number" name="phone">
		<br>
		dia chi <input type="text" name="address">
		<br>
		photo <input type="file" name="image">
		<br>
		email <input type="email" name="email">
		<br>
		password <input type="password" name="password">
		<br>
		<button type="submit">
			add
		</button>
	</form>
</body>
</html>