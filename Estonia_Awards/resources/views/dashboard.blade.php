@extends('layouts.app')

@section('content')
<div class="box-body" style="min-height: 450%;">
<h1 style="color:#5B5B5B; font-family:Courier New;">
    Добро пожаловать
      </h1>  
    <div><br>
        @can ( 'isAdmin')
            <div class="btn btn-warning btn-lg" style="background-color: #D9D9D9; border-radius: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5); border:transparent; font-family:Courier New; color:#5B5B5B;">
                Вы зашли администратором
            </div>
        @elsecan('isManager')
            <div class="btn btn-warning btn-lg" style="background-color: #D9D9D9; border-radius: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5); border:transparent; font-family:Courier New; color:#5B5B5B;">
                Вы зашли редактором
            </div>
        @elsecan('isUser')
            <div class="btn btn-warning btn-lg" style="background-color: #D9D9D9; border-radius: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5); border:transparent; font-family:Courier New; color:#5B5B5B;">
                Вы зашли пользователем
            </div>
        @else
            <div class="btn btn-danger btn lg" style="background-color: #D9D9D9; border-radius: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5); border:transparent; font-family:Courier New; color:#5B5B5B;">
                Вы не зашли
            </div>       
        @endcan
    </div>
</div>
@endsection