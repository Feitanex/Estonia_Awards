@extends('layouts.app')

@section('content')
<div class="box-header with-border">
    <h3 class="box-title"><strong> Настройки профиля</strong></h3>
    <div class="add">
        <a href="{{ url('/users') }}" class="btn btn-primary btn-sm btn-flat">
            <i class="fa fa-backward"></i> Вернуться назад
        </a>
    </div>
</div>

<div class="box-body">
    <div class="container">
        <div class="col-lg-9 margin-tb">
            @include('common.errors')
            
            <form action="{{ route('edituser.update', ['user' => $user->id]) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                @method('PUT')
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Имя:</strong>
                        <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Почта:</strong>
                        <input type="email" name="email" class="form-control" value="{{ $user->email }}" readonly>
                    </div>
                </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Роль:</label>
                        <div class="col-sm-6">
                        <select class="form-control input-sm" name="role">
                            @if( Auth::user()->role!='admin' ) disabled @endif
                            >
                                    @foreach ($roles as $role)
                                        <option value="{{$role}}" 
                                            @if($role==$user->role) 
                                                selected 
                                            @endif
                                        >{{$role}}</option>
                                        
                                    @endforeach
                                </select>
                            </div>
                    </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Пароль:</strong>
                        <input type="password" name="password" class="form-control" placeholder="Новый пароль">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Подтвердите пароль:</strong>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Подтвердите пароль">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Обновить данные</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
