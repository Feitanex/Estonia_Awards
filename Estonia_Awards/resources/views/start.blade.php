@extends('layouts.appLogin')

@section('content')
	<hr>
	<div class="login-box" style=" border-radius: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);">
		<div class="login-box-body" style="border-radius: 20px;">
@if(session()->has('error'))
<div class="alert alert-danger">{{session()->get('error')}}</div>
@endif
		<p class="login-box-msg" style="font-family:Courier New;font-size:18px">Войти в систему</p>
		<form action="{{ url('login') }}" method="POST">
		@csrf
			<div class="form-group has-feedback">
				<input type="email" class="form-control" name="email" style="font-family:Courier New;" placeholder="Почта" required autofocus>
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>								
			</div>
			
			<div class="form-group has-feedback">
				<input type="password" class="form-control" name="password" style="font-family:Courier New;" placeholder="Пароль" required>
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>			
			</div>
		  
			<div class="row">
				<div class="col-xs-4">
					<button type="submit" style="border-radius: 98px;background-color:#ABA49D ; border:transparent; font-family:Courier New; box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5); font-family:Courier New;"class="btn btn-primary btn-block btn-flat" name="login">
					<i class="fa fa-sign-in" ></i> Войти</button>
					<a class="btn btn-primary btn-block btn-flat" style="border-radius: 98px;background-color:#ABA49D ; border:transparent; font-family:Courier New; box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5); font-family:Courier New;width: 125px;" href="{{ url('/register') }}">Регистрация</a>
				</div>
			</div>
		</form>
		<br>      
		</div>
	</div>
@endsection