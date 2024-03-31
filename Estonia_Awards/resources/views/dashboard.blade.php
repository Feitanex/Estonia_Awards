@extends('layouts.app')

@section('content')
<div class="box-header with-border">
    <h3 class="box-title"><strong>Стартовая страница панели управления</strong></h3>
</div>
<div class="box-body" style="min-height: 450px">
    Добро пожаловать на страницу панели управления
    <br>
    @can('isAdmin')
        <div class="alert alert-warning">
            <strong>У вас есть права администратора</strong>
        </div>
    @elsecan('isManager')
        <div class="alert alert-success">
            <strong>У вас есть права менеджера</strong>
        </div>
    @elsecan('isUser')
        <div class="alert alert-primary">
            <strong>У вас есть права пользователя</strong>
        </div>
    @else
        <div class="alert alert-danger">
            <strong>Вы не вошли в систему</strong>
        </div>
    @endcan
</div>
@endsection