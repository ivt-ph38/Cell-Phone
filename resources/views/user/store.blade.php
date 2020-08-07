
		@extends('user.layout.master')
		@section ('content')
		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-2 col-md-offset-5" >
						<h3>{{$categoryName}}</h3>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Lọc Theo giá</h3>
							<div class="price-filter">
								<div id="price-slider"></div>
								<div class="input-number price-min">
									<input id="price-min" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
								<span>-</span>
								<div class="input-number price-max">
									<input id="price-max" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Sản Phẩm Bán Chạy</h3>
							@foreach ($listHotProduct as $value)
								<div class="product-widget">
								<div class="product-img">
									<img src="{{$value['image']}}" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">{{$value['category_name']}}</p>
									<h3 class="product-name"><a href="#">{{$value['product_name']}}</a></h3>
									<h4 class="product-price">{{$value['price']}} <del class="product-old-price">$990.00</del></h4>
								</div>
							</div>
							@endforeach														
						</div>
						<!-- /aside Widget -->
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						<!-- store top filter -->
						<div class="store-filter clearfix">
							<div class="store-sort">
								<label>
									Sắp xếp theo:
									<select class="input-select">
										<option value="0">Giá từ thấp đến cao</option>
										<option value="1">Giá từ cao đến thấp</option>
									</select>
								</label>								
							</div>
							
						</div>
						<!-- /store top filter -->

						<!-- store products -->
						<div class="row">
							
							@foreach ($listProduct as $value)
										<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="{{$value['image']}}" alt="">
										<div class="product-label">
											<span class="sale">-30%</span>
											<span class="new">NEW</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">{{'categoryName'}}</p>
										<h3 class="product-name"><a href="#">{{$value['name']}}</a></h3>
										<h4 class="product-price">{{$value['price']}} <del class="product-old-price">$990.00</del></h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-eye"></i> Chi Tiết Sản Phẩm</button>
									</div>
								</div>
							</div>
							<!-- /product -->
									@endforeach		
						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter clearfix">
							<span class="store-qty">Showing 20-100 products</span>
							<ul class="store-pagination">
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		@endsection

		