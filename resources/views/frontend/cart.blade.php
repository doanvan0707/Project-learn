@extends('layouts.frontend')
@section('content')
<div class="content" id="app">
	<section class="cart">
		<div class="cart-title">
			<p class="float-left">GIỎ HÀNG CỦA BẠN (<span id="qtt">1</span> sản phẩm)</p>
			<a href="{{ route('home.index') }}" class="float-right">Mua thêm sản phẩm khác</a>
		</div>
		<div class="clearfix"></div>
		<div class="cart-content">
			<div class="row">
				<div class="col-md-3">
					<img src="{{ url('image/xiaomia2lite-vang-1.jpg') }}" alt="">
				</div>
				<div class="col-md-9">
					<div class="row">
						<div class="col-md-6">
							<p>xiaomia2lite-vang</p>
							<label for="">Màu</label>
							<input type="radio" value="red">Red
							<input type="radio" value="black">Black
							<input type="radio" value="yellow">Yellow
						</div>
						<div class="col-md-3">
							<span>19.990.000đ</span>
						</div>
						<div class="col-md-3">
							<button class="cart-subtract">-</button>
							<span id="qtt"></span>
							<button class="cart-add">+</button>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="cart-price">
				<div class="row">
					<div class="col-md-6">
						Bạn có mã giảm giá? Sử dụng ngay
					</div>
					<div class="col-md-6">
						<p>Tạm tính: <span class="price">19.990.000đ</span></p><br>
						<p>Khuyến mãi: - 3.500.000đ</p><br>
						<p>Tổng tiền: <span class="promotion">16.490.000</span>đ</p>
					</div>
				</div>
			</div>
			<hr>
			<div class=cart-info>
				<p>Thông tin khách hàng</p>
				<form action="" method="post">
					<div class="form-group">
						<label for="name">Họ và tên:<sup>*</sup></label>
						<input type="text" name="cus_name" id="name" class="form-control" placeholder="Nhập họ và tên">
					</div>
					<div class="form-group">
						<label for="phone">Số điện thoại:<sup>*</sup></label>
						<input type="text" name="cus_phone" id="phone" class="form-control" placeholder="Nhập Số điện thoại">
					</div>
					<div class="form-group">
						<label for="email">Email:<span>(không bắt buộc)</span></label>
						<input type="text" name="cus_mail" id="email" class="form-control" placeholder="Nhập email">
					</div>
					<div class="form-group">
						<a href="" class="btn btn-danger">Order</a>
					</div>
				</form>
			</div>
		</div>	
	</section>
</div>
<script src="{{ url('js/jquery-3.2.1.min.js') }}"></script>
<script>
	$(document).ready(function(){
			var itemCount = 1;

			$('.cart-subtract').click(function(){
				console.log('cart-subtract-thanh-cong');
				itemCount--;
				$('#qtt').html(itemCount);
				var price = itemCount * 19000000;
				$('.price').html(price);
				var promotion = price - 1000000;
				$('.promotion').html(promotion);

			});
				$('.cart-add').click(function(){
				console.log('cart-add-thanh-cong');
				itemCount++;
				$('#qtt').html(itemCount);
				var price = itemCount * 19000000;
				$('.price').html(price);
				var promotion = price - 1000000;
				$('.promotion').html(promotion);
			});
		});
</script>
@endsection