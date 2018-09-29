@extends('layouts.frontend')
@section('content')
<div class="container">
	<section>
		<div class="row">
			<div class="col-md-4">
				<img style="width: 70%" src="{{ url('images/dt1.jpg') }}" alt="dt1"><br>
				<a href="{{ route('cart.create') }}">Mua hàng</a>
			</div>
			<div class="col-md-4">
				<img style="width: 70%" src="{{ url('images/dt1.jpg') }}" alt="dt2"><br>
				<a href="{{ route('cart.create') }}">Mua hàng</a>
			</div>
			<div class="col-md-4">
				<img style="width: 70%" src="{{ url('images/dt1.jpg') }}" alt="dt3"><br>
				<a href="{{ route('cart.create') }}">Mua hàng</a>
			</div>
		</div>
	</section>
</div>	
@endsection