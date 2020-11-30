<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="{{ route('view_insert_product') }}"> add </a>
	<br>
	<br>
	<table border="1px" cellpadding="0" cellspacing="0" width="80%">
		<tr>
			<th>
				Tên sản phẩm
			</th>
			<th>
				Ảnh
			</th>
			<th>
				Giá
			</th>
			<th>
				Mô tả
			</th>
			<th>
				Trạng thái
			</th>
			<th>
				Loại sản phẩm
			</th>
			<th colspan="2">
				
			</th>
		</tr>
		
		@foreach ($products as $product)
			<tr>
				<td>
					{{ $product->name }}
				</td>
				<td style="width: 100px; height: 100px;">
                    <img 
                        src="../public/images/{{ $product->img }}"
                        style="max-width: 180px;max-height: 90px"
                    >
                </td>
				<td>
					{{ number_format($product->price) }}
				</td>
				<td>
					{{ $product->description }}
				</td>
				<td>
					@if ($product->status === 0)
						@php
							echo "Con hang";
						@endphp
					@else
						@php
							echo "Het hang";
						@endphp
					@endif
					
				</td>
				<td>
					@foreach ($typeproducts as $typeproduct)
						@if ($product->id_product_type === $typeproduct->id )
							{{ $typeproduct->name_product_type }}
						@endif
					@endforeach
				</td>
				<td>
					<a href="{{ route('update_product',['id' => $product->id]) }}">update</a>
				</td>
				<td>
					<a href="{{ route('delete_product',['id' => $product->id]) }}">delete</a>
				</td>
			</tr>
		@endforeach
		
	</table>
</body>
</html>