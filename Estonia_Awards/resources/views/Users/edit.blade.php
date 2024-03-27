@extends('layouts.app')

@section('content')
<div class="box-header with-border">
    <h3 class="box-title"><strong> Users manage - Edit User</strong></h3>
    <div class="add">
        <a href="{{ url('/users') }}" class="btn btn-primary btn-sm btn-flat">
            <i class="fa fa-backward"></i> Back to list
        </a>
    </div>
</div>

<div class="box-body">
    <div class="container">
        <div class="col-lg-9 margin-tb">
            @include('common.errors') <!-- Вывод ошибок -->
            
            <form action="{{ route('edituser.update', ['user' => $user->id]) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }} <!-- CSRF токен -->
                @method('PUT') <!-- Указываем метод HTTP -->
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email:</strong>
                        <input type="email" name="email" class="form-control" value="{{ $user->email }}" readonly>
                    </div>
                </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Role:</label>
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
                        <strong>Password:</strong>
                        <input type="password" name="password" class="form-control" placeholder="New Password">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Confirm Password:</strong>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Update User</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
