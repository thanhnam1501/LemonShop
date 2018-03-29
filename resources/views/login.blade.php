@extends('layouts.app')
@section('content')
<div class="container" style="margin: 10%;">
	<div class="container" style="margin-bottom:5%; ">
		<h4 style="float: left">Chào mừng bạn đến với Lemon Shop. Đăng nhập ngay !</h4>
		<a style="float: right;"> Đăng ký thành viên</a>
	</div>
	<div class="container" style="width: 60%;">
		<form action="{{route('post.user.login')}}" method="POST">
			<div>
				<label>Email</label>
				<input name="email" type="text" placeholder="Tên Đăng Nhập">
			</div>
			<div>
				<label>Password</label>
				<input name="password" type="password">
			</div>
			{!! csrf_field() !!}
			<button style="text-align: center;"	 class="class="next-btn next-btn-primary next-btn-large"" type="submit">Đăng nhập</button>
		</form>
	</div>
</div>
@endsection

