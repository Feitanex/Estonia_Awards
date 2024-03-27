@extends('layouts.app')

@section('content')
<div class="box-header with-border">
    <h3 class="box-title"><strong> Users manage - Add New User</strong></h3>
    <div class="add">
        <a href="/users" class="btn btn-primary btn-sm btn-flat">
            <i class="fa fa-backward"></i> Back to list
        </a>
    </div>
</div>

<div class="box-body">
    <div class="container">
        <div class="col-lg-9 margin-tb">
            @include('common.errors') <!-- Вывод ошибок -->
            
            <form action="{{ url('adduser') }}" method="POST" class="form-horizontal">
                {{ csrf_field() }} <!-- CSRF токен -->
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email:</strong>
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Role:</strong>
                        <select name="role" class="form-control">
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
                        <strong>Password:</strong>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Confirm Password:</strong>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Add New User</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
