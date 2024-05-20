@extends('layouts.appLogin')

@section('content')
	<hr>
	<div class="login-box" style=" border-radius: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);">
		<div class="login-box-body" style="border-radius: 20px;">
@if(session()->has('error'))
<div class="alert alert-danger">{{session()->get('error')}}</div>
@endif
		<p class="login-box-msg" style="font-family:Courier New;font-size:18px">Заказ диплома</p>
		<form action="{{ url('login') }}" method="POST">
		@csrf
			<div class="form-group has-feedback">
				<input type="email" class="form-control" name="email" style="font-family:Courier New;" placeholder="Имя пользователя" required autofocus>							
			</div>
            <div class="form-group has-feedback">
				<input type="email" class="form-control" name="email" style="font-family:Courier New;" placeholder="Кол-во активаций" required autofocus>						
			</div>
            <div class="form-group has-feedback">
				<input type="email" class="form-control" name="email" style="font-family:Courier New;" placeholder="Позывной" required autofocus>								
			</div>
			<div class="form-group has-feedback">
				<input type="text" class="form-control" name="text" style="font-family:Courier New;" placeholder="Страна активаций" required>			
			</div>
		  
			<div class="row">
				<div class="col-xs-4">
					<a class="btn btn-primary btn-block btn-flat" style="border-radius: 98px;background-color:#ABA49D ; border:transparent; font-family:Courier New; box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5); font-family:Courier New;width: 100px;" href="{{ url('/') }}">Отправить</a>
                    <a class="btn btn-primary btn-block btn-flat" style="border-radius: 98px;background-color:#ABA49D ; border:transparent; font-family:Courier New; box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5); font-family:Courier New;width: 145px;" href="{{ url('/diplom') }}">Вернуться назад</a>
				</div>
			</div>
		</form>
		<br>      
		</div>
	</div>
@endsection