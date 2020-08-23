<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<h1 class="text-center">List Product</h1>
		<button type="button" class="btn btn-info"><a style="color:white;" href="{{route('product.create')}}">Add Product</a></button><br><br>
	<table class="table table-hover">
		<thead>
			<tr style="background-color:skyblue">
				<th>ID</th>
				<th>Name</th>
				
				<th>Image</th>
				<th>Display</th>
				

				<th>Edit</th>
				<th>Delete</th>

			</tr>
		</thead>
		<tbody>
			@foreach($listProducts as $rel)
			<tr>
				<td>{{$rel->id}}</td>
				<td>{{$rel->name}}</td>
			
				<td><img src="{{asset($rel->image)}}" width="70px" height="50px" alt="dienthoai"></td>
				


				<td><a href="{{route('product.edit',$rel->id)}}" class="btn btn-danger" role="button">Edit</a></td>
				<td>
					<form action="{{route('product.destroy', $rel->id)}}" method="POST">
        				@method('DELETE')
        				@csrf
        				<button type="submit" class="btn btn-danger">Delete</button>
    				</form>
				</td>
				
			</tr>
			@endforeach
		</tbody>
	</table>



		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>