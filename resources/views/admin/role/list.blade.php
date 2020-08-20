@extends('admin.master.master')
		@section ('content')
		<h2>LIST ROLE</h2>
	<div class="card card-info" style="width: 400px; float: left; margin-right: 30px">
    <div class="card-header">
      <h3 class="card-title">Role</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
        </div>
        </div>
            <div class="card-body p-0" style="width: 98%; margin: 10px auto; border: 1px solid gray;">
              <table class="table">
                <thead style="background: #DEE1E6;">
                  <tr>
                      <th>ID</th>
					  <th>Name</th>
					  <th>Total User</th>
					  <th>Action</th>
                  </tr>
                </thead>
                <tbody>
				@foreach($listRole as $rel)
                <tr>
                    <td>{{$rel->id}}</td>
					<td>{{$rel->name}}</td>
					<td>{{count($rel->users)}}</td>
					
                    <td >
                      <div class="btn-group btn-group-sm">
                        <a style="margin-right: 5px" href="{{route('role.edit',$rel->id)}}" class="btn btn-info"><i class="far fa-edit"></i></a>
                        <a style="margin-right: 5px" href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  </tr>
                  @endforeach
              </tbody>
             
              </table>
              <div class="clearfix">{{$listRole->links()}}</div>

            </div>
  </div>          
              <!-- create -->
          <div class="card card-secondary" style="width: 400px;">
            <div class="card-header">
              <h3 class="card-title">Create</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body" style="display: block;">
              <form  action="{{route('role.store')}}" method="POST" role="form">
				@csrf
				<div class="form-group">
					<label for="">Name:</label>
					<input type="text" name="name" class="form-control" id="" placeholder="Input field">
					@if( $errors->has('name'))
            			<p style ="color: red;">{{$errors->first('name')}}</p>
        			@endif
					
				</div>
				<button type="submit" class="btn btn-primary">ADD Role</button>
			</form>
              
            </div>
            <!-- /.card-body -->
          </div>


@endsection