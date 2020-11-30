<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="{{ route('post_insert_product') }}" method="post" enctype="multipart/form-data">
		@csrf
		
		ten san pham <input type="text" name="name_product">
		<br>
		gia san pham <input type="number" name="price">
		<br>
		chi tiet <input type="text" name="description">
		<br>
		<select name="status">
			<option value="0">
				con hang
			</option>
			<option value="1">
				het hang
			</option>
		</select>
		<br>
		anh san pham 
		<input type="file" name="image">
		<br>
		<select name="product_type">
				<option disabled selected> Chọn loai</option>
				
				@foreach ($typeproducts as $typeproduct)
					<option value={{ $typeproduct->id }}>
						{{ $typeproduct->name_product_type }}
					</option>
				@endforeach
		</select>
		<br>
		<button type="submit">
			 add
		</button>
	</form>
</body>
</html>