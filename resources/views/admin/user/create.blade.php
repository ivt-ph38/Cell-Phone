@extends('admin.master.master')
	@section ('content')
	<!-- create -->
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Thêm mới</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body" style="display: block;">
              <form   action="{{route('user.store')}}" method="POST" role="form">
				@csrf
				<div class="block_1" style="width: 400px; float:left;  margin-right: 30px">
					<div class="form-group">
						<label for="">Tên đăng nhập:</label>
						<input type="text" name="username" value="{{old('username')?old('username'):''}}" class="form-control" id="" placeholder="Input field">
						@if( $errors->has('username'))
	            			<p style ="color: red;">{{$errors->first('username')}}</p>
	        			@endif
						
					</div>
					<div class="form-group">
						<label for="">Email:</label>
						<input type="text"  name="email" value="{{old('email')?old('email'):''}}" class="form-control" id="" placeholder="Input field">
						@if( $errors->has('email'))
	            			<p style ="color: red;">{{$errors->first('email')}}</p>
	        			@endif
						
					</div>
					<div class="form-group">
						<label for="">Họ và Tên:</label>
						<input type="text" name="fullname" value="{{old('fullname')?old('fullname'):''}}" class="form-control" id="" placeholder="Input field">
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
				</div>
				<div class="block_2" style="width: 400px;float:left;">
					<div class="form-group">
						<label for="">Địa chỉ:</label>
						<input type="text" name="address" value="{{old('address')?old('address'):''}}" class="form-control" id="" placeholder="Input field">
						@if( $errors->has('address'))
	            			<p style ="color: red;">{{$errors->first('address')}}</p>
	        			@endif
						
					</div>
					<div class="form-group">
						<label for="">Số điện thoại:</label>
						<input type="text" name="phone" value="{{old('phone')?old('phone'):''}}" class="form-control" id="" placeholder="Input field">
						@if( $errors->has('phone'))
	            			<p style ="color: red;">{{$errors->first('phone')}}</p>
	        			@endif
						
					</div>
					 <div class="form-group">
						<label for="">Role</label>
						<select name="roles[]"  class="form-control" multiple="multiple"  >
							
							@foreach($roles as $rel)
							<option value="{{$rel->id}}">{{$rel->name}}</option>
							@endforeach
						</select>
					</div>
					<button type="submit" class="btn btn-primary">Thêm mới</button>
					
				</div>
			</form>
              
            </div>
            <!-- /.card-body -->
          </div>
	@endsection