@extends('layouts.appMain')

@section('content')
<div>
        <h3 class="text-center mb-4" style="margin-top: 3%; font-size:35px; font-family:Courier New; color:#7B7B7B;">Дипломы</h3>
        <div style="display: flex; align-items: flex-start;">
            <img style="width: 25%; margin-left: 5%; margin-top: 6%;" src='{{ asset("images/diplom.jpg")}}' class="background" alt="background">
            <div style="width: 60%; margin-left: 5%; margin-top:6%; font-size:20px; font-family:Courier New; color:#7B7B7B;">
                <h4 style="font-size: 20px;">Имя: Андрей Сидоров</h4><br>
                <h4 style="font-size: 20px;">Количество мест: 15</h4><br>
                <h4 style="font-size: 20px;">Дата: 04.03.2024</h4><br>
                <h4 style="font-size: 20px;">Страна: Эстония</h4><br>
                <h4 style="font-size: 20px;">Подпись: <img style="width:10%;"src='{{ asset("images/podpis.png")}}' class="background" alt="background"> </h4><br>
                <button style="border: 2px solid transparent; width:10%; height:35px; color:white; background-color:#ABA49D ; border-radius: 98px; font-size:15px; font-family:Courier New; box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.5);"><a style="color:white;">заказать</a></button>
            </div>
           
        </div> 
        <a style="color:transparent;">a</a><br>
        <a style="color:transparent;">a</a>
</div>


@endsection