@extends('admin.master.master')
	@section ('content')
	<!-- create -->
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Create</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body" style="display: block;">
              <form style="width: 40%;"  action="{{route('user.store')}}" method="POST" role="form">
				@csrf
				<div class="form-group">
					<label for="">Tên đăng nhập:</label>
					<input type="text" name="username" value="{{old('username')?old('username'):''}}" class="form-control" id="" placeholder="Input field">
					@if( $errors->has('username'))
            			<p style ="color: red;">{{$errors->first('username')}}</p>
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
					<label for="">Họ và Tên:</label>
					<input type="text" name="fullname" class="form-control" id="" placeholder="Input field">
					@if( $errors->has('fullname'))
            			<p style ="color: red;">{{$errors->first('fullname')}}</p>
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
					<label for="">Địa chỉ:</label>
					<input type="text" name="address" class="form-control" id="" placeholder="Input field">
					@if( $errors->has('address'))
            			<p style ="color: red;">{{$errors->first('address')}}</p>
        			@endif
					
				</div>
				<div class="form-group">
					<label for="">Số điện thoại:</label>
					<input type="text" name="phone" class="form-control" id="" placeholder="Input field">
					@if( $errors->has('phone'))
            			<p style ="color: red;">{{$errors->first('phone')}}</p>
        			@endif
					
				</div>
				<button type="submit" class="btn btn-primary">Thêm mới</button>
			</form>
              
            </div>
            <!-- /.card-body -->
          </div>
	@endsection