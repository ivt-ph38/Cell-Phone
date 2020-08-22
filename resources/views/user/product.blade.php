@extends('user.layout.master')
@section ('content')

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- Product main img -->
			<div class="col-md-5 col-md-push-2">
				<div id="product-main-img">
					<div class="product-preview">
						<img src="{{asset("user/img/product01.png")}}" alt="">
					</div>

					<div class="product-preview">
						<img src="{{asset("user/img/product03.png")}}" alt="">
					</div>

					<div class="product-preview">
						<img src="{{asset("user/img/product06.png")}}" alt="">
					</div>

					<div class="product-preview">
						<img src="{{asset("user/img/product08.png")}}" alt="">
					</div>
				</div>
			</div>
			<!-- /Product main img -->

			<!-- Product thumb imgs -->
			<div class="col-md-2  col-md-pull-5">
				<div id="product-imgs">
					<div class="product-preview">
						<img src="{{asset("user/img/product01.png")}}" alt="">
					</div>

					<div class="product-preview">
						<img src="{{asset("user/img/product03.png")}}" alt="">
					</div>

					<div class="product-preview">
						<img src="{{asset("user/img/product06.png")}}" alt="">
					</div>

					<div class="product-preview">
						<img src="{{asset("user/img/product08.png")}}" alt="">
					</div>
				</div>
			</div>
			<!-- /Product thumb imgs -->

			<!-- Product details -->
			<div class="col-md-5">
				<div class="product-details">
					<h2 class="product-name">{{$itemProduct['name']}}</h2>
					
					<div>
						<h3 class="product-price">{{number_format($itemProduct['price'])}} <del class="product-old-price"></del></h3>
						@if ($qtyAvailable>0)
						<span class="product-available" style="color: blue">Còn hàng</span>
						@else 
						<span class="product-available">Hết hàng</span>
						
						@endif
						
					</div>
					<p>{{$itemProduct['description']}}</p>
					
					<div class="product-options">						
						
					</div>

					<div class="add-to-cart">
						@if ($qtyAvailable>0)
						<a href="{{route('user.addToCart',$itemProduct['id'])}}"><button type="submit" class="add-to-cart-btn"><i class="fa fa-shopping-cart" ></i> Thêm vào giỏ hàng </button></a>
						@else 
						<div class="text-center" style="margin-top: 30px"><a href="{{route('user.home')}}" class="btn" style="background-color:#D10024;color:#fff"><i class="fa fa-shopping-cart"></i> Tiếp Tục Mua Hàng</a></div>
						
						@endif
						
						
					</div>

					

				</div>
			</div>
			<!-- /Product details -->

			<!-- Product tab -->
			<div class="col-md-12">
				<div id="product-tab">
					<!-- product tab nav -->
					<ul class="tab-nav">
						<li class="active"><a data-toggle="tab" href="#tab1">Thông số kĩ thuật </a></li>
						
						<li><a data-toggle="tab" href="#tab2">Đánh giá</a></li>
					</ul>
					<!-- /product tab nav -->

					<!-- product tab content -->
					<div class="tab-content">
						<!-- tab1  -->
						<div id="tab1" class="tab-pane fade in active">
							<div class="row">
								<div class="col-md-8 col-md-offset-2">
									<table class="table table-bordered success">
										<thead>
											<tr >
												<th class="danger">Tên điện thoại</th>
												<td>{{$itemProduct['name']}}</td>
											</tr>
											<tr>
												<th class="danger">Màu</th>
												<td>{{$itemProduct['color']}}</td>
											</tr>
											<tr>
												<th class="danger" >Mô tả</th>
												<td>{{$itemProduct['description']}}</td>
											</tr>
											<tr>
												<th class="danger" >Kích thước</th>
												<td>{{$itemProduct['size']}}</td>
											</tr>
											<tr>
												<th class="danger" >Khối lượng</th>
												<td>{{$itemProduct['size']}}</td>
											</tr>
											<tr>
												<th class="danger" >Hệ điều hành</th>
												<td>{{$itemProduct['os']}}</td>
											</tr>
											<tr>
												<th class="danger" >Dung lượng</th>
												<td>{{$itemProduct['storage']}}</td>
											</tr>
											<tr>
												<th class="danger" >Camera sau</th>
												<td>+91 {{$itemProduct['rear_camera']}}</td>
											</tr>

											<tr>
												<th class="danger" >Camera trước</th>
												<td>{{$itemProduct['primary_camera']}}</td>
											</tr>
											<tr>
												<th class="danger" >CPU</th>
												<td>{{$itemProduct['cpu']}}</td>
											</tr>
											<tr >
												<th class="danger"  >Ram</th>
												<td>{{$itemProduct['storage']}}</td>
											</tr>
											<tr>
												<th class="danger">GPU</th>
												<td>{{$itemProduct['gpu']}}</td>
											</tr>
											<tr>
												<th class="danger">Dung lượng pin</th>
												<td>{{$itemProduct['battery']}}</td>
											</tr>
											<tr>
												<th class="danger">Bảo hành</th>
												<td>{{$itemProduct['warranty']}}</td>
											</tr>



										</thead>

									</table>
								</div>
							</div>
						</div>
						<!-- /tab1  -->

						

						<!-- tab3  -->
						<div id="tab2" class="tab-pane fade in">
							<div class="row">
								<!-- Rating -->
								<div class="col-md-3">
									<div id="rating">
										<div class="rating-avg">
											<span>4.5</span>
											<div class="rating-stars">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
											</div>
										</div>
										<ul class="rating">
											<li>
												<div class="rating-stars">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-progress">
													<div style="width: 80%;"></div>
												</div>
												<span class="sum">3</span>
											</li>
											<li>
												<div class="rating-stars">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="rating-progress">
													<div style="width: 60%;"></div>
												</div>
												<span class="sum">2</span>
											</li>
											<li>
												<div class="rating-stars">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="rating-progress">
													<div></div>
												</div>
												<span class="sum">0</span>
											</li>
											<li>
												<div class="rating-stars">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="rating-progress">
													<div></div>
												</div>
												<span class="sum">0</span>
											</li>
											<li>
												<div class="rating-stars">
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="rating-progress">
													<div></div>
												</div>
												<span class="sum">0</span>
											</li>
										</ul>
									</div>
								</div>
								<!-- /Rating -->

								<!-- Reviews -->
								<div class="col-md-6">
									<div id="reviews">
										<ul class="reviews">
											@foreach ($convertReviewOfProduct as $review)
											
											<li>
												<div class="review-heading">
													<h5 class="name">{{$review['name']}}</h5>
													<p class="date">{{$review['created_at']}}</p>
													<div class="review-rating">
														@for ($i = 1; $i <= $review['valueStar']; $i++)
														<i class="fa fa-star"></i>
														@endfor
														
														
													</div>
												</div>
												<div class="review-body">
													<p>{{$review['content']}}</p>
												</div>
											</li>
											@endforeach
											
										</ul>
										<ul class="reviews-pagination">
											<li class="active">1</li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
										</ul>
									</div>
								</div>
								<!-- /Reviews -->

								<!-- Review Form -->
								<div class="col-md-3">
									<div id="review-form">
										<form class="review-form" action="{{ route('user.addReview') }}" method="POST">
											@csrf
											
											@guest
											<span>Tên <span style="color:red">(<i class="fa fa-asterisk" aria-hidden="true"></i>)</span>: </span>
											<input class="input" name="name" type="text" placeholder="Tên của bạn" value="{{old('name')}}">
											@if($errors->has('name'))
												<p style="color:red">{{$errors->first('name')}}</p>
												@endif
											<span>Email <span style="color:red">(<i class="fa fa-asterisk" aria-hidden="true"></i>)</span>: </span>
											<input class="input" name="email" type="email" placeholder="Email của bạn" value="{{old('email')}}">
											@if($errors->has('email'))
												<p style="color:red">{{$errors->first('email')}}</p>
												@endif
											@endguest
											
											<textarea class="input" name="content" placeholder="Viết đánh giá về sản phẩm" value="{{old('content')}}"></textarea>
											@if($errors->has('content'))
												<p style="color:red">{{$errors->first('content')}}</p>
												@endif
											<input type="hidden" name="product_id" value="{{$itemProduct['id']}}">
											<div class="input-rating">
												<span>Đánh giá <span style="color:red">(<i class="fa fa-asterisk" aria-hidden="true"></i>)</span>: </span>
												<div class="stars">
													<input id="star5" name="value" value="5" type="radio"><label for="star5"></label>
													<input id="star4" name="value" value="4" type="radio"><label for="star4"></label>
													<input id="star3" name="value" value="3" type="radio"><label for="star3"></label>
													<input id="star2" name="value" value="2" type="radio"><label for="star2"></label>
													<input id="star1" name="value" value="1" type="radio"><label for="star1"></label>
												</div>
												@if($errors->has('value'))
												<p style="color:red">{{$errors->first('value')}}</p>
												@endif
											</div>
											<button  class="primary-btn">Đánh Giá</button>

										</form>
										
										
									</div>
								</div>
								<!-- /Review Form -->
							</div>
						</div>
						<!-- /tab3  -->
					</div>
					<!-- /product tab content  -->
				</div>
			</div>
			<!-- /product tab -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- Section -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<div class="col-md-12">
				<div class="section-title text-center">
					<h3 class="title">Related Products</h3>
				</div>
			</div>

			<!-- product -->
			<div class="col-md-3 col-xs-6">
				<div class="product">
					<div class="product-img">
						<img src="{{asset("user/img/product01.png")}}" alt="">
						<div class="product-label">
							<span class="sale">-30%</span>
						</div>
					</div>
					<div class="product-body">
						<p class="product-category">Category</p>
						<h3 class="product-name"><a href="#">product name goes here</a></h3>
						<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
						<div class="product-rating">
						</div>
						<div class="product-btns">
							<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
							<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
							<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
						</div>
					</div>
					<div class="add-to-cart">
						<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
					</div>
				</div>
			</div>
			<!-- /product -->

			<!-- product -->
			<div class="col-md-3 col-xs-6">
				<div class="product">
					<div class="product-img">
						<img src="{{asset("user/img/product02.png")}}" alt="">
						<div class="product-label">
							<span class="new">NEW</span>
						</div>
					</div>
					<div class="product-body">
						<p class="product-category">Category</p>
						<h3 class="product-name"><a href="#">product name goes here</a></h3>
						<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
						<div class="product-rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<div class="product-btns">
							<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
							<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
							<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
						</div>
					</div>
					<div class="add-to-cart">
						<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
					</div>
				</div>
			</div>
			<!-- /product -->

			<div class="clearfix visible-sm visible-xs"></div>

			<!-- product -->
			<div class="col-md-3 col-xs-6">
				<div class="product">
					<div class="product-img">
						<img src="{{asset("user/img/product03.png")}}" alt="">
					</div>
					<div class="product-body">
						<p class="product-category">Category</p>
						<h3 class="product-name"><a href="#">product name goes here</a></h3>
						<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
						<div class="product-rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o"></i>
						</div>
						<div class="product-btns">
							<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
							<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
							<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
						</div>
					</div>
					<div class="add-to-cart">
						<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
					</div>
				</div>
			</div>
			<!-- /product -->

			<!-- product -->
			<div class="col-md-3 col-xs-6">
				<div class="product">
					<div class="product-img">
						<img src="{{asset("user/img/product04.png")}}" alt="">
					</div>
					<div class="product-body">
						<p class="product-category">Category</p>
						<h3 class="product-name"><a href="#">product name goes here</a></h3>
						<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
						<div class="product-rating">
						</div>
						<div class="product-btns">
							<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
							<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
							<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
						</div>
					</div>
					<div class="add-to-cart">
						<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
					</div>
				</div>
			</div>
			<!-- /product -->

		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /Section -->

@endsection
