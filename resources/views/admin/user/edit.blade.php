@extends('admin.master.master')
	@section ('content')
	<h2>edit user</h2>
	<form  action="{{route('user.update', $user->id)}}" method="POST" role="form">
		@method('PUT')
				@csrf
				
				<div class="form-group">
					<label for="">Email:</label>
					<input type="text" name="email" value="{{$user->email}}" class="form-control" id="" placeholder="Input field">
					@if( $errors->has('email'))
            			<p style ="color: red;">{{$errors->first('email')}}</p>
        			@endif
					
				</div>
				<div class="form-group">
					<label for="">Họ và Tên:</label>
					<input type="text" name="fullname" value="{{$user->fullname}}" class="form-control" id="" placeholder="Input field">
					@if( $errors->has('fullname'))
            			<p style ="color: red;">{{$errors->first('fullname')}}</p>
        			@endif
					
				</div>
				<div class="form-group">
					<label for="">Password:</label>
					<input type="password" name="password"  class="form-control" id="" placeholder="Input field">
					@if( $errors->has('password'))
            			<p style ="color: red;">{{$errors->first('password')}}</p>
        			@endif
					
				</div>
				<div class="form-group">
					<label for="">Địa chỉ:</label>
					<input type="text" name="address" value="{{$user->address}}"class="form-control" id="" placeholder="Input field">
					@if( $errors->has('address'))
            			<p style ="color: red;">{{$errors->first('address')}}</p>
        			@endif
					
				</div>
				<div class="form-group">
					<label for="">Số điện thoại:</label>
					<input type="text" name="phone" value="{{$user->phone}}"  class="form-control" id="" placeholder="Input field">
					@if( $errors->has('phone'))
            			<p style ="color: red;">{{$errors->first('phone')}}</p>
        			@endif
					
				</div>
				 
				<button type="submit" class="btn btn-primary">Cập nhật</button>
			</form>
         @endsection     