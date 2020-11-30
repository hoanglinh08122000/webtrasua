<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>
<body>
	<form action="{{ route('post_update_product',['id' => $product->id]) }}" method="post" enctype="multipart/form-data">
		@csrf
		
		ten san pham <input type="text" name="name" value="{{ $product->name }}">
		<br>
		gia <input type="number" name="price" value="{{ $product->price }}">
		<br>
		ảnh sản phẩm cũ
		<img 
            src="../images/{{ $product->img }}"
            style="max-width: 180px;max-height: 90px"
        >
        <br>
        ảnh mới
        <input type="file" name="image">
        <br>
		mota <input type="text" name="description" value="{{ $product->description }}">
		<br>
		trang thai 
		<select name="status">
			<option value="0" {{ $product->status == 0 ? 'selected' : '' }}>
				con hang
			</option>
			<option value="1" {{ $product->status == 1 ? 'selected' : '' }}>
				het hang
			</option>
		</select>
		<br>
		loại sản phẩm 
		<select name="product_type" >
			@foreach ($typeproducts as $typeproduct)
				<option value={{ $typeproduct->id }} {{ $typeproduct->id == $product->id_product_type ? 'selected' : '' }}>
					{{ $typeproduct->name_product_type }}
				</option>
			@endforeach
		</select>
		<br>
		<button type="submit">
			update
		</button>
	</form>
</body>
</html>