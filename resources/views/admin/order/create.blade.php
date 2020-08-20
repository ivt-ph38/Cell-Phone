@extends('admin.master.master')
	@section ('content')
	<div class="card card-info main" >
    <div class="card-header">
      <h3 class="card-title">Thêm đơn hàng mới</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
        </div>
        </div>
            <div class="card-body p-0">
            	<div class="info-user">
            		<h1>Thông tin khách hàng</h1>

            		<form  action="{{route('user.store')}}" method="POST" role="form">
				@csrf
				<div class="form-group">
					<label for="">Tên khách hàng:</label>
					<input type="text" name="fullname" class="form-control" id="" placeholder="Input field">
					@if( $errors->has('fullname'))
            			<p style ="color: red;">{{$errors->first('fullname')}}</p>
        			@endif
					
				</div>
				<div class="form-group">
					<label for="">Email:</label>
					<input type="text" name="email" class="form-control" id="" placeholder="Input field">
					@if( $errors->has('email'))
            			<p style ="color: red;">{{$errors->first('email')}}</p>
        			@endif
					
				</div>
			
				<div class="form-group">
					<label for="">Password:</label>
					<input type="password" name="password" class="form-control" id="" placeholder="Input field">
					@if( $errors->has('password'))
            			<p style ="color: red;">{{$errors->first('password')}}</p>
        			@endif
					
				</div>
				<div class="form-group">
					<label for="">Address:</label>
					<input type="text" name="address" class="form-control" id="" placeholder="Input field">
					@if( $errors->has('address'))
            			<p style ="color: red;">{{$errors->first('address')}}</p>
        			@endif
					
				</div>
				<div class="form-group">
					<label for="">Phone:</label>
					<input type="text" name="phone" class="form-control" id="" placeholder="Input field">
					@if( $errors->has('phone'))
            			<p style ="color: red;">{{$errors->first('phone')}}</p>
        			@endif
					
				</div>
				<button type="submit" class="btn btn-primary">ADD User</button>
			</form>
            	</div>
   				

            </div>
            
            <!-- /.card-body -->
</div>
	@endsection	