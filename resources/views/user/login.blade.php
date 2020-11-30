<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ route('post_login_customer') }}" method="post">
		@csrf
		
		email <input type="text" name="email">
		<br>
		password <input type="password" name="password">
		<br>

		<button type="submit">
			login
		</button>
	</form>
</body>
</html>