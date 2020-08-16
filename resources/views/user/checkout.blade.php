
@extends('user.layout.master')
@section ('content')
<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<div class="col-md-7">
				<!-- Billing Details -->
				<div class="billing-details">
					<div class="section-title">
						<h3 class="title">Địa chỉ nhận hàng</h3>
					</div>
					<div class="">
						<p class=""><strong>Tên:  &nbsp; </strong>{{$user->fullname}}<span> | </span><span><strong>SĐT:  &nbsp; </strong>  {{$user->phone}}</span></p>
						<p class=""> <strong>Địa chỉ:  &nbsp; </strong>{{$user->address}}</p>
					</div>
				
				</div>
				<!-- /Billing Details -->

				<!-- Shiping Details -->
				<div class="shiping-details">
					
					<div class="input-checkbox">
						<input type="checkbox" id="shiping-address">
						<label for="shiping-address">
							<span></span>
							Thay đổi địa chỉ nhận hàng?
						</label>
						<div class="caption">
							<div class="form-group">
								<input class="input" type="text" name="name" placeholder="Tên người nhận hàng">
							</div>
							<div class="form-group">
								<input class="input" type="tel" name="tel" placeholder="Điện thoại">
							</div>
							
							<div class="form-group">
								<input class="input" type="text" name="address" placeholder="Địa chỉ">
							</div>	
						</div>
					</div>
				</div>
				<!-- /Shiping Details -->

				<!-- Order notes -->
				<div class="order-notes">
					<textarea class="input" placeholder="Chú thích thêm"></textarea>
				</div>
				<!-- /Order notes -->
			</div>

			<!-- Order Details -->
			<div class="col-md-5 order-details">
				<div class="section-title text-center">
					<h3 class="title">Đơn hàng của bạn</h3>
				</div>
				<div class="order-summary">
					<div class="order-col">
						<div><strong>Sản phẩm</strong></div>
						<div><strong>Tổng</strong></div>
					</div>
					<div class="order-products">
						@foreach ($cart->items as $value)
							<div class="order-col">
							<div>{{$value['qty']}} x {{$value['item']->name}}</div>
							<div>{{number_format($value['price'])}}</div>
						</div>
						@endforeach
						
						
					</div>
					<div class="order-col">
						<div>Phí Ship</div>
						<div><strong>Miễn Phí</strong></div>
					</div>
					<div class="order-col">
						<div><strong>Tổng đơn hàng</strong></div>
						<div><strong class="order-total">{{number_format($cart->totalPrice)}}</strong></div>
					</div>
				</div>
				<div class="payment-method">
					
					<p>Quý khách kiểm tra kĩ đơn hàng trước khi thanh toán!!</p>
				</div>
				
				<a href="{{ route('user.cartStore') }}" class="primary-btn order-submit">Đặt Hàng</a>
			</div>
			<!-- /Order Details -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->
@endsection
