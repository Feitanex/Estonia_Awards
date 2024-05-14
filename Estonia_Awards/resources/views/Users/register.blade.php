@extends('layouts.appMain')

@section('content')

<div class="container mt-5" style="background-color: white; border-radius: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5); width: 30%;">
    <div>
        <div>
            <div>
                <div style=" margin-top:4%; margin-bottom: 4%;"class="card-header text-center"><c>Регистрация</c></div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="name" placeholder="Имя" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="email" placeholder="Почта" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="password" placeholder="Пароль" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="password-confirm" placeholder="Подтвердите пароль"type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background-color:#ABA49D; border-color:#ABA49D;">
                                    {{ __('Зарегистрироваться') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

















































































































<a style="color:transparent;">a</a><br>
<a style="color:transparent;">a</a><br>
<a style="color:transparent;">a</a><br>
<a style="color:transparent;">a</a><br>
<a style="color:transparent;">a</a><br>
<a style="color:transparent;">a</a><br>
<a style="color:transparent;">a</a><br>
<a style="color:transparent;">a</a><br>
<a style="color:transparent;">a</a><br>
<a style="color:transparent;">a</a><br>
<a style="color:transparent;">a</a><br>
@endsection
