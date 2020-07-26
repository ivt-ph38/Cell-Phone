@extends('layout.master')
@section ('content')
<div class="container" style="margin-top: 50px;">
	<div class="row">
		<div class="col-md-4 offset-md-4">
		</div>
		<div class="col-md-4 offset-md-4">
			<div class="row">
				<div class="col-xs-2">
				<a class="btn btn-success" href="">Home</a>
		    </div>
		    <div class="col-xs-12">
		    	<h4 class="text-center">Create Product</h4>
		    	<form action="" method="POST" role="form">
				@csrf		
				<div class="form-group">
					<label for="InputEmail">Name</label>
					<input type="text" class="form-control" id="InputEmail"  placeholder="Input Name" name="name">	
					<label for="price">price</label>
					<input type="text" class="form-control" id="price"  placeholder="price" name="price">
					<label for="quantity">Quantity</label>
					<input type="text" class="form-control" id="quantity"  placeholder="quantity" name="quantity">		
					<label for="select">Category</label>
					<select class="form-control" id="select" name="category_id">
						
					</select>
				</div>				
				<button type="submit" class="btn btn-primary">Add Product</button>
			</form>
		    </div>
			</div>
			
			
			
		</div>

	</div>

	

</div>
@endsection