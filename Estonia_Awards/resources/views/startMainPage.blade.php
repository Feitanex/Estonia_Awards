@extends('layouts.appMain')

@section('content')

<div class="container mt-4" >
    <div style="position: relative;">
    @if (Auth::guest())
        <button style="border: 2px solid transparent; width:140px; height:35px; color:white; background-color:#ABA49D ; border-radius: 98px;position: absolute; top: 5%; left: -25%; transform: translate(-50%, -50%); z-index: 1;font-size:17px; font-family:Courier New; box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);"><a href="{{ url('/login') }}" style="color:white;">Логин</a></button>
        <button  style="border: 2px solid transparent; width:140px; height:35px; color:white; background-color:#ABA49D ; border-radius: 98px;position: absolute; top: 10%; left: -25%; transform: translate(-50%, -50%); z-index: 1;font-size:17px; font-family:Courier New; box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);"><a href="{{ url('/register') }}" style="color:white;">Регистрация</a></button>
        @else
        @endif
        <h3 class="text-center mb-4" style="position: absolute; top: 45%; left: 90%; transform: translate(-50%, -50%); z-index: 1; color: black; width: 52%; font:32px;font-family:Courier New;">Дипломы для радиолюбителей: достигай новых высот с нами!</h3>
        <button style="border: 2px solid transparent; width:140px; height:35px; color:white; background-color:#ABA49D ; border-radius: 98px;position: absolute; top: 55%; left: 90%; transform: translate(-50%, -50%); z-index: 1;font-size:17px;; font-family:Courier New; box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);"><a href="{{ url('/diplom') }}" style="color:white;">перейти</a></button>
        <img style="width: 1905px; margin-left: -384px;"  src='{{ asset("images/background.jpg")}}' class="background" alt="background" >
    </div>
    <div class="container mt-4">
        <div style="margin-left: -400px;margin-right: -366px;height:220px; background: linear-gradient(to bottom, #A99A8C, #D9D9D9);"></div>

        <div style="margin-left: -400px;margin-right: -366px; height: 1000px;background-color:#D9D9D9;">

            <div style="position: absolute; top: 150%; left: 3%; margin-left: 3%; width: 62%;height: 25%; background-color: #ABA49D; border-radius: 20px; box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.5);">
            <img style="width: 25%; margin-left: 115%;" src='{{ asset("images/racija.png")}}' class="background" alt="background">
                <h4 style="font-size:20px; font-family:Courier New; color:white; position: absolute; top: 2%; left: 2%;">Наш сайт специализируется на выдаче дипломов радиолюбителям, которые активировали определённую локацию.</h4>
                <h4 style="font-size:20px; font-family:Courier New; color:white; position: absolute; top:25%; left: 2%;">Наши дипломы предоставляют возможность радиолюбителям получить официальное признание своих достижений и опыта в этой увлекательной сфере.</h4>
                <h4 style="font-size:20px; font-family:Courier New; color:white; position: absolute; top: 50%; left: 2%;">Каждый диплом содержит специальный радиочип, который хранит уникальную информацию о владельце, квалификации и других данных. При прикосновении к соответствующему считывателю или антенне, информация с чипа передается на специальное устройство для обработки и вывода на экран.</h4>
            </div>
            <div style="position: absolute; top: 190%; left: 3%; margin-left: 32%; width: 62%;height: 48%; background-color: #ABA49D; border-radius: 20px; box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.5);">
                <img style="width: 25%; margin-left: -35%;" src='{{ asset("images/antenna.png")}}' class="background" alt="background">
                <h4 style="font-size:20px; font-family:Courier New; color:white; position: absolute; top: 5%; left: 2%;">Радиолюбители - это энтузиасты, увлеченные радиосвязью, исследованием электроники и коммуникационных технологий. </h4>
                <h4 style="font-size:20px; font-family:Courier New; color:white; position: absolute; top:25%; left: 2%;">Они могут создавать свои собственные радиостанции, проводить эксперименты, участвовать в соревнованиях и общаться с другими радиолюбителями по всему миру.</h4>
                <h4 style="font-size:20px; font-family:Courier New; color:white; position: absolute; top: 45%; left: 2%;">Радиолюбители занимаются различными видами радиосвязи, включая голосовую и цифровую связь, морскую и космическую связь, эксперименты с радиоволнами и многое другое. Они также могут быть активными в сообществе, оказывая помощь в случае чрезвычайных ситуаций и участвуя в общественных мероприятиях.</h4>
                <h4 style="font-size:20px; font-family:Courier New; color:white; position: absolute; top: 75%; left: 2%;">Дипломы представляют собой признание достижений радиолюбителя в определенной области радиосвязи. Они могут стать символом опыта и мастерства в данной области, а также мотивацией для дальнейшего развития навыков.</h4>
                <img style="width: 25%; margin-left: -1%; margin-bottom:-37%;" src='{{ asset("images/radio.png")}}' class="background" alt="background">
            </div>
        </div>
    </div>

</div>

@endsection