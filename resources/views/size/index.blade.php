<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<button>
		<a href=" {{ route('view_insert_size') }}">
			add
		</a>
	</button>
	<br>
	<table width="400px" border="1px" cellpadding="0" cellspacing="0">
		<tr>
			<th>
				id
			</th>
			<th>
				name
			</th>
			<th>
				ten loai
			</th>
			<th colspan="2"> 
				action
			</th>
		</tr>
		
		@foreach ($sizes as $size)
			
				<tr>
				<td>
					{{ $size->id }}
				</td>
				<td>
					{{ $size->name }}
				</td>
				<td>
					@foreach ($typeproducts as $typeproduct)
						@if ($size->id_product_type === $typeproduct->id )
							{{ $typeproduct->name_product_type }}
						@endif
					@endforeach
					
				</td>
				<td>
					<a href="{{ route('update_size',['id'=>$size->id]) }}">update</a>
				</td>
				<td>
					<a href="{{ route('delete_size',['id'=>$size->id]) }}">delete</a>
				</td>
			</tr>
			
		@endforeach
		
	</table>

</body>
</html>