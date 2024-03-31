@extends('layouts.app')

@section('content')
<div class="with-border" style="padding:1em;">
    <h3 style="color:#5B5B5B;">Последние<br>открытые места</h3>
</div>

<div class="box-body" style="min-height: 450px;">
    <div class="row">
        <div class="col-md-4">
            <!-- Первый квадрат -->
            <div class="square-template" style="background-color: transparent; border: 1px solid black;">
            <img src='{{ asset("images/ES-00001.jpg")}}' class="user-image" alt="ES" >
            </div>
        </div>
        <div class="col-md-4">
            <!-- Второй квадрат -->
            <div class="square-template">
                <!-- Здесь содержимое второго квадрата -->
            </div>
        </div>
        <div class="col-md-4">
            <!-- Третий квадрат -->
            <div class="square-template">
                <!-- Здесь содержимое третьего квадрата -->
            </div>
        </div>
    </div>
</div>
@endsection