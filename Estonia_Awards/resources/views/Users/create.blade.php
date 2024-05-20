@extends('layouts.app')

@section('content')
<div class="box-header with-border">
    <h3 class="box-title" style="font-family:Courier New;"><strong> Добавление пользователя</strong></h3>
    <div class="add">
        <a href="/users" class="btn btn-primary btn-sm btn-flat">
            <i class="fa fa-backward"></i>  Вернуться назад
        </a>
    </div>
</div>

<div class="box-body">
    <div class="container">
        <div class="col-lg-9 margin-tb">
            @include('common.errors')
            <form action="{{ url('adduser') }}" method="POST" class="form-horizontal">
                {{ csrf_field() }}
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong style="font-family:Courier New;">Имя:</strong>
                        <input style="font-family:Courier New;" type="text" name="name" class="form-control" placeholder="Имя">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong style="font-family:Courier New;">Почта:</strong>
                        <input  style="font-family:Courier New;" type="email" name="email" class="form-control" placeholder="Почта">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong style="font-family:Courier New;" >Роль:</strong>
                        <select style="font-family:Courier New;" name="role" class="form-control">
                            @foreach ($roles as $role)
                                <option value="{{ $role }}"
                                    @if($role == 'user') selected @endif
                                >{{$role}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong style="font-family:Courier New;" >Пароль:</strong>
                        <input style="font-family:Courier New;" type="password" name="password" class="form-control" placeholder="Пароль">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong style="font-family:Courier New;">Подтвердите пароль:</strong>
                        <input style="font-family:Courier New;" type="password" name="password_confirmation" class="form-control" placeholder="Подтвердите пароль">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary" style="font-family:Courier New;">Добавить нового пользователя</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
