<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    {{-- SEO --}}
    {{-- <meta name="description" content="{{$meta_decs}}">
    <meta name="author" content="">
	<meta name="keywords" content="{{$meta_keywords}}">
	<meta name="robots" content="INDEX,FOLLOW">
	<link  rel="canonical" href="{{$url_canonical}}" />
	<link  rel="icon" type="image/x-icon" href="" /> --}}
	{{-- END-SEO --}}
    <title>{{$meta_title}}</title>
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/sweetalert.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/lightgallery.min.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/lightslider.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/prettify.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{('public/frontend/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +84 363 228 312</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> phong_1951220007@dau.edu.vn</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{URL::to('/trang-chu')}}"><img src="{{('public/frontend/images/home/logo.png')}}" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									VN
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">USA</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									VNĐ
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">$</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								{{-- <li><a href="#"><i class="fa fa-star"></i> Yêu thích</a></li> --}}
								<?php 
									$customer_id = Session::get('customer_id');
									
									if($customer_id != NULL ){
								?>
									<li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i> Thang toán</a></li>
								
								<?php 
									}else{
								?>
									<li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"></i> Thang toán	</a></li>
								<?php 
									}
								?>
								
								<li><a href="{{URL::to('/gio-hang')}}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>

								<?php 
									$customer_id = Session::get('customer_id');
									if($customer_id != NULL){
								?>
									<li><a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-lock"></i> Đăng xuất</a></li>
								<?php 
									}else{
								?>
									<li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"></i> Đăng nhập</a></li>
								<?php 
									}
								?>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-7">
						{{-- <div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div> --}}
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{URL::to('/trang-chu')}}" class="active">Trang chủ</a></li>
								<li class="dropdown"><a href="#">Danh mục<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                    @foreach ($category as $key => $cate)
									@if ($cate -> category_parent ==0)
										<li><a href="{{URL::to('/danh-muc-san-pham/'.$cate -> slug_category_product)}}">{{$cate -> category_name}} </i></a></li>
									@endif
													
									@endforeach
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Thương hiệu<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu" style="width: 100px">
                                    @foreach ($brand as $key => $brand)
										<li class="panel-title"><a href="{{URL::to('/thuong-hieu-san-pham/'.$brand -> brand_slug)}}"> <span class="pull-right"></span>{{$brand -> brand_name}}</a></li>
											
									@endforeach
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Tin tức<i class="fa fa-angle-down"></i></a>
									<ul role="menu" class="sub-menu" >
										@foreach ($category_post as $key => $catee_post)
											<li ><a href="{{URL::to('/danh-muc-bai-viet/'.$catee_post -> category_post_slug)}}">{{$catee_post -> category_post_name}}</a></li>
												
										@endforeach
										</ul>
								</li> 
								<li><a href="{{url('/lien-he')}}">Liên hệ</a></li>
							</ul>
						</div>
					</div>
					{{-- <div class="col-sm-5">
						<form action="{{URL::to('/tim-kiem')}}" method="POST">
							@csrf
							<div class="search_box pull-right">
								<input type="text" name="keywords_submit" placeholder="Tìm kiếm sản phẩm"/>
								<input type="submit" style="margin-top: 0px; color: #000;" name="search_items" class="btn btn-primary btn-sm" value="Tìm kiếm">
							</div>
						</form>
					</div> --}}
				</div>
			</div>
		</div><!--/header-bottom-->
		
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 padding-right">
					@yield('content')		
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>Wind</span>-shopp</h2>
							<p>Chào mừng bạn đã đến với mỹ phẩm windshop</p>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-3" style="">
						<div class="single-widget">
							<h2>Danh mục sản phẩm</h2>
							@foreach ($category as $key => $cate)
								<ul class="nav nav-pills nav-stacked">
									@if ($cate -> category_parent == 0)
										<li><a href="{{URL::to('/danh-muc-san-pham/'.$cate -> slug_category_product)}}">
											{{$cate -> category_name}}</a>
										</li>
									@endif
								</ul>
							@endforeach
						</div>
					</div>
				 	<div class="col-sm-3">
						<div class="single-widget">
							<h2>Tin tức</h2>
							@foreach ($category_post as $key => $catee_post)
								<ul class="nav nav-pills nav-stacked">
									
										<li ><a href="{{URL::to('/danh-muc-bai-viet/'.$catee_post -> category_post_slug)}}">{{$catee_post -> category_post_name}}</a></li>
									
								</ul>
							@endforeach
						</div>
					</div> 
					{{-- <div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div> --}}
					{{-- <div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div> --}}
					<div class="col-sm-3 col-sm-offset-1" style="">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © Windshop Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
	<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
	<script src="{{asset('public/frontend/js/sweetalert.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/lightgallery-all.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/lightslider.js')}}"></script>
	<script src="{{asset('public/frontend/js/prettify.js')}}"></script>
	<script>
		$(document).ready(function() {
			$('#imageGallery').lightSlider({
				gallery:true,
				item:1,
				loop:true,
				thumbItem:4,
				slideMargin:0,
				enableDrag: false,
				currentPagerPosition:'left',
				onSliderLoad: function(el) {
					el.lightGallery({
						selector: '#imageGallery .lslide'
					});
				}   
			});  
  		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.send-order').click(function(){
				swal({
					title: "Xác nhận đơn hàng",
					text: "Cảm ơn bạn đã tin dùng sản phẩm của windshop,bạn có chắc chắc muốn đặt không ?",
					type: "warning",
					showCancelButton: true,
					confirmButtonClass: "btn-danger",
					confirmButtonText: "Xác nhận",
					cancelButtonText: "Thoát",
					closeOnConfirm: false,
					closeOnCancel: false
				},
				function(isConfirm) {
					if (isConfirm) {
						var shipping_email = $('.shipping_email').val();
						var shipping_name = $('.shipping_name').val();
						var shipping_address = $('.shipping_address' ).val();
						var shipping_phone = $('.shipping_phone').val();
						var shipping_nodes = $('.shipping_nodes' ).val();
						var shipping_method = $('.payment_select' ).val()
						var order_fee = $('.order_fee').val();
						var order_coupon = $('.order_coupon').val();
						var _token = $('input[name = "_token"]').val();
						$.ajax({
							url: '{{url('/conform-order')}}',
							method: 'POST',
							data: {shipping_email:shipping_email,shipping_name:shipping_name,shipping_address:shipping_address,
								shipping_phone:shipping_phone,shipping_nodes:shipping_nodes,order_fee:order_fee,
								order_coupon:order_coupon,shipping_method:shipping_method,_token:_token},
							success:function(){
								swal("Đặt hành thành công", "Cản ơn bạn đã đặt sản phẩm của nhà WindShop", "success");
							}
						});
						window.setTimeout(() => {
							location.reload();
						}, 3000);
						
					} else {
						swal("Xem lại", "Cảm ơn bạn đã đến với WindShop)", "error");
					}
				});
				
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.add-to-cart').click(function(){
				var id = $(this).data('id_product');
				var cart_product_id = $('.cart_product_id_' + id).val();
				var cart_product_name = $('.cart_product_name_' + id).val();
				var cart_product_image = $('.cart_product_image_' + id).val();
				var cart_product_price = $('.cart_product_price_' + id).val();
				var cart_product_qty = $('.cart_product_qty_' + id).val();
				var _token = $('input[name = "_token"]').val();
				$.ajax({
					url: '{{url('/add-cart-ajax')}}',
					method: 'POST',
					data: {cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,
					cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token},
					success:function(data){
						swal({
							title: "Đã thêm sản phẩm vào giỏ hàng",
							text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để thanh toán ",
							showCancelButton: true,
							cancelButtonText: "Xem tiếp",
							confirmButtonClass: "btn-success",
							confirmButtonText: "Đi đến giỏ hàng",
							closeOnConfirm: false
						},
						function(){
							window.location.href = "{{url('/gio-hang')}}"
						});
					}
				});
			});
		});

	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.choose').on('change',function(){
			var action = $(this).attr('id');
			var ma_id = $(this).val();
			var _token = $('input[name = "_token"]').val();
			var result = '';
			// alert(action);
			// alert(matp);
			// alert(_token);
			if(action == 'city'){
				result = 'province';
			}else{
				result = 'wards';
			}
				$.ajax({
					url : '{{url('/select-delivery-home')}}',
					method : 'POST',
					data:{action:action,ma_id:ma_id,_token:_token},
					success:function(data){
						$('#'+result).html(data);
					}
				});
			});
		});
		
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.calculate_delivery').click(function(){
				var matp = $('.city').val();
				var maqh =  $('.province').val();
				var xaid =  $('.wards').val();
				var _token = $('input[name = "_token"]').val();
				if(matp == ''&& maqh == '' && xaid == ''){
					alert('Làm ơn chọn để tính phí vận chuyển');
				}else{
					$.ajax({
						url : '{{url('/calculate-fee')}}',
						method : 'POST',
						data:{matp:matp,maqh:maqh,xaid:xaid,_token:_token},
						success:function(data){
							location.reload();
						}
					});
				}
				
			});
		});
	</script>
</body>
</html>