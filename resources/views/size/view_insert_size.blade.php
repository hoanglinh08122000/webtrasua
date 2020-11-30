<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ route('post_size') }}" method="post">
		@csrf
		ten	<input type="text" name="name">
			<br>
			<br>
		<select name="abc">
				<option disabled selected> Chọn loai</option>
				
				@foreach ($typeproducts as $typeproduct)
					<option value={{ $typeproduct->id }}>
						{{ $typeproduct->name_product_type }}
					</option>
				@endforeach
		</select>
		<button type="submit">
			add
		</button>
	</form>
</body>
</html>