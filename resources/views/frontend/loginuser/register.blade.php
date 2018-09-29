@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row">
    	<div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <h2 class="panel-heading">Đăng ký tài khoản</h2>
				<form class="form-horizontal" method="POST" action="{{ route('users.showregister') }}">
                    {{ csrf_field() }}
					<div class="form-group">
						<label for="">Username</label>
						<input type="text" name="username" class="form-control" placeholder="Tên đăng nhập">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input type="text" name="email" class="form-control" placeholder="Email đăng nhập">
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input type="text" name="password" class="form-control" placeholder="Mật khẩu">
					</div>
					<div class="form-group">
						<label for="">Yourname</label>
						<input type="text" name="yourname" class="form-control" placeholder="Họ và tên">
					</div>
					<div class="form-group">
						<label for="">Phone</label>
						<input type="text" name="phone" class="form-control" placeholder="Số điện thoại">
					</div>
					<div class="form-group">
						<label for="">Address</label>
						<input type="text" name="address" class="form-control" placeholder="Địa chỉ">
					</div>
					<div class="form-group">
						<label for="">Role</label>
						<select name="role_id" id="" class="form-control"> 
							<option value="2">{{  $role->name}}</option>
						</select>
					</div>
					<div class="for-group">
						<input type="submit" class="btn btn-primary" value="Đăng ký">
					</div>
                </form>        	
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
@endsection
