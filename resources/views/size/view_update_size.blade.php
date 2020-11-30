<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ route('post_update_size',['id'=>$size->id]) }}" method="post">
		@csrf
		Ten <input type="text" name="name" value="{{ $size->name }}">
		<br>
		loai san pham 
		
		<select name="abc" >
				@foreach ($producttypes as $producttype)
					<option value={{ $producttype->id }} {{ $producttype->id == $size->id_product_type ? 'selected' : '' }}>
						{{ $producttype->name_product_type }}
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
			

		