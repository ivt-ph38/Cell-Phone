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
		<h1 class="text-center">Create Product</h1>

		<form style="width: 30%" action="{{route('product.store')}}" method="POST" role="form">
			@csrf
			<legend>Create Product</legend>

			<div class="form-group">
				<label for="">Name</label>
				<input type="text" name="name" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Category_ID</label>
				
				<select name="category_id" id="" required="required" class="form-control">
					
					<option value="">-- Lựa Chọn --</option>
				@foreach ($categoryID as $value)
					<option value="{{$value->id}}">{{$value->name}}</option>
				@endforeach
					
				</select>
			</div>
			<div class="form-group">
				<label for="">Title</label>
				<input type="text" name="title" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Description</label>
				<input type="text" name="description" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Price</label>
				<input type="text" name="price" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Quantity</label>
				<input type="text" name="quantity" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Size</label>
				<input type="text" name="size" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Weight</label>
				<input type="text" name="weight" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Color</label>
				<input type="text" name="color" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Image</label>
				<input type="text" name="image" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Display</label>
				<input type="text" name="display" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Os</label>
				<input type="text" name="os" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Storage</label>
				<input type="text" name="storage" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Ram</label>
				<input type="text" name="ram" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">CPU</label>
				<input type="text" name="cpu" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">GPU</label>
				<input type="text" name="gpu" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Primary_camera</label>
				<input type="text" name="primary_camera" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Rear_camera</label>
				<input type="text" name="rear_camera" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Battery</label>
				<input type="text" name="battery" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Warranty</label>
				<input type="text" name="warranty" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Promotion_price</label>
				<input type="text" name="promotion_price" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Start_promotion</label>
				<input type="date" name="start_promotion" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">End_promotion</label>
				<input type="date" name="end_promotion" class="form-control" id="" placeholder="Input field">
			</div>

			<button type="submit" class="btn btn-primary">ADD Product</button>
		</form>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>