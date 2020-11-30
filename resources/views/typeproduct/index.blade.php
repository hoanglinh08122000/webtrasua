<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<button>
		<a href=" {{ route('typeproduct.store') }}">
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
			<th colspan="2"> 
				
			</th>
		</tr>
		
		@foreach ($typeproducts as $typeproduct)
			<tr>
				<td>
					{{ $typeproduct["id"] }}
				</td>
				<td>
					{{ $typeproduct["name_product_type"] }}
				</td>
				<td>
					<a href="{{ route('typeproduct.update',['id'=>$typeproduct->id]) }}">update</a>
				</td>
				<td>
					<a href="{{ route('typeproduct.delete',['id'=>$typeproduct->id]) }}">delete</a>
				</td>
			</tr>
		@endforeach
		
	</table>

</body>
</html>