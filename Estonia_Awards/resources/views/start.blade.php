@extends('layouts.appLogin')

@section('content')
	<hr>
	<div class="login-box">
		<div class="login-box-body">
@if(session()->has('error'))
<div class="alert alert-danger">{{session()->get('error')}}</div>
@endif
		<p class="login-box-msg">Войти в систему</p>
		<form action="{{ url('login') }}" method="POST">
		@csrf
			<div class="form-group has-feedback">
				<input type="email" class="form-control" name="email" placeholder="Почта" required autofocus>
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>								
			</div>
			
			<div class="form-group has-feedback">
				<input type="password" class="form-control" name="password" placeholder="Пароль" required>
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>			
			</div>
		  
			<div class="row">
				<div class="col-xs-4">
					<button type="submit" style="border-color:#ABA49D; background-color:#ABA49D;"class="btn btn-primary btn-block btn-flat" name="login">
					<i class="fa fa-sign-in" ></i> Войти</button>
					<a class="btn btn-primary btn-block btn-flat" style="border-color:#ABA49D; background-color:#ABA49D; width: 125px;" href="{{ url('/register') }}">Регистрация</a>
				</div>
			</div>
		</form>
		<br>      
		</div>
	</div>
@endsection