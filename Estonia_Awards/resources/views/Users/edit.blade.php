@extends('layouts.app')

@section('content')
<div class="box-header with-border">
    <h3 class="box-title" style="font-family:Courier New;"><strong> Настройки профиля</strong></h3>
    <div class="add">
        <a href="{{ url('/users') }}" class="btn btn-primary btn-sm btn-flat" style="font-family:Courier New;">
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
                        <strong style="font-family:Courier New;">Имя:</strong>
                        <input  style="font-family:Courier New;" type="text" name="name" class="form-control" value="{{ $user->name }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong style="font-family:Courier New;">Почта:</strong>
                        <input style="font-family:Courier New;" type="email" name="email" class="form-control" value="{{ $user->email }}" readonly>
                    </div>
                </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Роль:</label>
                        <div class="col-sm-6">
                        <select style="font-family:Courier New;" class="form-control input-sm" name="role">
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
                        <strong style="font-family:Courier New;" >Пароль:</strong>
                        <input style="font-family:Courier New;" type="password" name="password" class="form-control" placeholder="Новый пароль">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong style="font-family:Courier New;">Подтвердите пароль:</strong>
                        <input style="font-family:Courier New;" type="password" name="password_confirmation" class="form-control" placeholder="Подтвердите пароль">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button style="font-family:Courier New;"  type="submit" class="btn btn-primary">Обновить данные</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
