<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ route('typeproduct.post_update',['id'=>$product_types->id]) }}" method="post">
		@csrf
		Ten <input type="text" name="name" value="{{ $product_types["name_product_type"] }}">
		<br>
		<br>

		<button type="submit">
			update
		</button>
	</form>
	
	
</body>
</html>
			

		