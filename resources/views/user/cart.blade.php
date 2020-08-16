
@extends('user.layout.master')
@section ('content')

<div class="container" >
	
	<div class="row" style="margin-top: 20px; margin-bottom: 100px">
		<div class="col-sm-7">
			<h3 class="text-center" style="margin-top: 20px;">Giỏ Hàng</h3>
			<table id="cart" class="table table-hover table-condensed">
				<thead>
					<tr>
						<th style="width:50%">Sản Phẩm</th>
						<th style="width:10%">Giá</th>
						<th style="width:8%">Số Lượng</th>
						<th style="width:22%" class="text-center">Tổng</th>
						<th style="width:10%"></th>
					</tr>
				</thead>
				<tbody>

					@foreach ($products as $value)
					<tr>
						<td data-th="Product">
							<div class="row">
								<div class="col-sm-2 hidden-xs"><img src="{{$value['item']->image}}" alt="..." class="img-responsive"/></div>
								<div class="col-sm-10">
									<h4 class="nomargin">{{$value['item']->name}}</h4>
									<p>Mô tả sản phẩm</p>
								</div>
							</div>
						</td> 
						<td data-th="Price">{{number_format($value['item']->price)}}</td>
						{{-- <form action="{{ route('user.cartUpdate') }}" method="GET" > --}}
							<td data-th="Quantity">
								<div class="input-number" style="width: 70px">
									<input type="number" value="{{$value['qty']}}" name="quantity">
									<input type="hidden" name="product_id" value="{{$value['item']->id}}">
									<a href="{{route('user.cartUpdate',['id'=>$value['item']->id,'action'=>'asc'])}}"><span class="qty-up"  >+</span></a>
									<a href="{{route('user.cartUpdate',['id'=>$value['item']->id,'action'=>'desc'])}}"><span class="qty-down" >-</span></a>
								</div>
							</td>
							
							<td data-th="Subtotal" class="text-center">{{number_format($value['price'])}}</td>
							<td class="actions" data-th="">
								<a href="{{route('user.deleteProduct',$value['item']->id)}}"><button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button></a>
							</td>
							
						</tr>
						@endforeach
						
						
					</tbody>
					
				</table>
			</div>

			<div class="col-sm-4 col-sm-offset-1">	
				<div class="text-center" style="margin-top: 70px">Tổng Đơn Hàng: <strong> {{number_format($totalPrice)}} VNĐ</div>
					<div class="text-center" style="margin-top: 30px"><a href="{{route('user.home')}}" class="btn" style="background-color:#333;color:#fff"><i class="fa fa-angle-left"></i> Tiếp Tục Mua Hàng</a></div>							
							
					<div class="text-center" style="margin-top:10px"><a href="{{route('user.checkLoginToCart')}}" class="btn btn-block" style="background-color:#D10024;color:#fff" data-target="#myModal">Thanh Toán <i class="fa fa-angle-right"></i></a></div>			
					<div class="text-center" style="margin-top:10px"><button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#myModal">Thanh Toán</button></div>		
																	
			</div>
		</div>

		<div class="container" >
			
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Xin chào quý khách!!!</h4>
						</div>
						<div class="modal-body">
							<p>Some text in the modal.</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
						</div>
					</div>

				</div>
			</div>

		</div>

	</div>

	@endsection