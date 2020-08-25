@extends('admin.master.master')
		@section ('content')
		<!-- list category -->
	@include('errors.message')
  @include('errors.error')
    <div class="row">
      <div class="col-sm-12">
        <form action="{{route('search_order')}}"  method="GET" style="margin-bottom:30px " class="form-inline" role="form">
          @csrf
          <div class="form-group" style="margin-right:10px ">
             <input type="search" name="user_name" id="input" class="form-control"  placeholder="Tên khách hàng...">
          </div>
          <div class="form-group" style="margin-right:10px ">
             <input type="search" name="deliverer_name" id="input" class="form-control"  placeholder="Tên nhân viên giao hàng...">
          </div>
          <div class="form-group" style="margin-right:10px ">
            <select name="status_order" id="input" class="form-control" >
              <option >-- Tình trạng đơn hàng --</option>
              @foreach($status as $rel)
                <option value="{{$rel->id}}">{{$rel->status}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group" style="margin-right:10px ">
            
             <input type="date" name="date" id="input" class="form-control">
          </div>
          <button type="submit" class="btn btn-default" style="margin-right:30px "><i class="fas fa-search"></i></button>

           <button type="button" class="btn btn-info" ><a style="color:white;" href="{{route('order.create')}}">Tạo Mới</a></button>
        </form>
       
      </div>
    </div>
	<div class="card card-info main" >
    <div class="card-header">
      <h3 class="card-title">Danh sách đơn hàng</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
        </div>
        </div>
            <div class="card-body p-0" style="width: 98%; margin: 10px auto; border: 1px solid gray;">
              <table class="table table-hover">
                <thead style="background: #DEE1E6;">
                  <tr>
                    <th>ID</th>
                    <th>Khách hàng</th>
                    <th>Địa chỉ nhận hàng</th>
                    <th>Người giao hàng</th>
                    <th>Ngày đặt hàng</th>
                   
                    <th>Số tiền</th>
                    <th>Tình trạng đặt hàng</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
				        @foreach($orderInfo as $key => $rel)
                 <tr>
                   <td>{{$key+1}}</td>
					         <td>{{$rel->user->fullname}}</td>
                   <td>{{$rel->user->address}}</td>
                   <td>{{$rel->deliverer->name}}</td>
                   
                   <td>{{date("d-m-Y", strtotime("$rel->created_at"))}}</td>
                   <td>{{$rel->total_price}}</td>
					         <td style="color:#0c0">{{$rel->status->status}}</td>
                    <td >
                      <div class="btn-group btn-group-sm">
                        <a href="{{route('order.show', $rel->id)}}" class="btn btn-info" title="Chi tiết đơn hàng" style="margin-right: 5px"><i class="fas fa-eye"></i></a>

                        <a href="{{route('sendmail',$rel->id)}}" class="btn btn-secondary" title="Gửi thông báo giao hàng" onclick = 'return confirm("Bạn có chắc chắn muốn gửi thông báo đơn hàng đến khách hàng không?" )' style="margin-right: 5px"><i class="fas fa-paper-plane"></i></a>

                        <a style="margin-right: 5px" href="{{route('order.destroy', $rel->id)}}" class="btn btn-danger" onclick="event.preventDefault();
                                                       window.confirm('Bạn có chắc là bạn muốn xoá đơn hàng: ' + '{{ $rel->id }}' + ' không?') ? document.getElementById('delete-order-{{ $rel->id }}').submit() : false;" ><i class="fas fa-print"></i></a>
                        <form  action="{{route('order.destroy', $rel->id)}}" method="POST" id="delete-order-{{ $rel->id }}" style="display: none;">
                      @method('DELETE')
                      @csrf
                  </form>
                        
                      </div>
                    </td>
                  </tr>
                  @endforeach
              </tbody>
             
              </table>
              <div class="clearfix">{{$orderInfo->links()}}</div>

            </div>
            
            <!-- /.card-body -->
</div>


@endsection