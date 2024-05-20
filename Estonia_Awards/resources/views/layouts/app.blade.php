<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Qrz Active</title>		
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href='{{ asset("components/bootstrap/dist/css/bootstrap.min.css") }}'>
    <link rel="stylesheet" href='{{ asset("components/font-awesome/css/font-awesome.min.css") }}'>    
    <link rel="stylesheet" href='{{ asset("dist/css/AdminLTE.min.css") }}'>
    <link rel="stylesheet" href='{{ asset("dist/css/skins/_all-skins.min.css") }}'>  	
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href='{{ asset("dist/css/custom_style.css") }}'>	
    <script src='{{ asset("components/jquery/dist/jquery.min.js") }}'></script>
    <script src='{{ asset("components/jquery-ui/jquery-ui.min.js") }}'></script>
    <script src='{{ asset("components/bootstrap/dist/js/bootstrap.min.js") }}'></script>
    <script src='{{ asset("dist/js/adminlte.min.js") }}'></script>
  </head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
    <a href="{{ url('/dashboard') }}" class="logo">
      <span class="logo-mini" style="font-family:Courier New;">QA</span>
      <span class="logo-lg" style="font-family:Courier New;">QRZ Active</span>
    </a>
  <nav class="navbar navbar-static-top " style="background: linear-gradient(to bottom, #A99A8C, #D9D9D9);">
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
    </a>
    <div class="navbar-custom-menu" >
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src='{{ asset("images/profile.jpg")}}' class="user-image" alt="User Image" >
            <span class="hidden-xs" style="font-family:Courier New;" >{{Auth::user()->name}}</span>
          </a>
          <ul class="dropdown-menu">
            <li class="user-header"style="background-color: #A99A8C;">
              <img src='{{ asset("images/profile.jpg")}}' class="img-circle" alt="User Image">
              <p style="font-family:Courier New;">{{Auth::user()->name}}</p>
            </li>
            <li class="user-footer">
              <div class="pull-left" >
                <a href="{{url('/profile/'.Auth::user()->id)}}" class="btn btn-default btn-flat" id="admin_profile" style="font-family:Courier New;">Редактировать</a>
              </div>
              <div class="pull-right" >
                <a href="{{ url('/logout') }}" class="btn btn-default btn-flat" style="font-family:Courier New;">Выйти</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>		
<aside class="main-sidebar">
  <section class="sidebar" >
    <div class="user-panel">
      <div class="pull-left image">
        <img src='{{ asset("images/profile.jpg")}}' class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
	  <p style="font-family:Courier New;">{{Auth::user()->name}}</p>  
      </div>
    </div>
    <ul class="sidebar-menu" data-widget="tree">
      <li><a href="{{ url('/portfolio') }}" style="font-family:Courier New;"><span>Профиль</span></a></li>
      @if(Gate::allows('isAdmin') || Gate::allows('isManager'))   
      <li class="treeview">
        <a href="#">
          <span style="font-family:Courier New;">Участие</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu" >
      <li><a href="{{ url('/categorylist') }} "style="font-family:Courier New;"></i> Категории</a></li>
			<li><a href="{{ url('/productlist') }}" style="font-family:Courier New;"></i> Активации</a></li>
      <li><a href="{{ url('/activationlist') }}" style="font-family:Courier New;"></i> Новости</a></li>		
      <li><a href="{{ url('/users') }}" style="font-family:Courier New;"></i> Пользователи</a></li>
        </ul>
      </li>
    @endif      
    <li><a href="{{ url('/diplom') }}" style="font-family:Courier New;"></i> Дипломы</a></li>
    <li><a href="{{ url('/info') }}" style="font-family:Courier New;">О нас</a></li>
    </ul>
  </section>
</aside>	
  <div class="content-wrapper"  style="background-color: #D9D9D9;">
    <section class="content-header" style="text-align: center;">   
    </section>
      <section class="content">           
        <div class="row">
          </div>
            <div class="row">
              <div class="col-xs-12">
                <div style="background-color: transparent; border: 1px solid black;">
              @yield('content')
            </div>
          </div>
        </div>
      </section>
    </div>
  <div style="height:90px; background: linear-gradient(to bottom, #D9D9D9, #A99A8C);"></div>
<footer class="main-footer" style="background-color: #A99A8C; padding: 20px; font-family: Arial; border:transparent;">
  <div class="pull-right hidden-xs">
    <a href="{{ url('/') }}" style="color: #FFFFFF; font-family:Courier New;">На главную</a><br>
    <a href="{{ url('/diplom') }}" style="color: #FFFFFF; font-family:Courier New;"></i>Дипломы</a><br>
    <a href="{{ url('/activation') }}" style="color: #FFFFFF; font-family:Courier New;"></i>Новости</a><br>
    <a href="{{ url('/news') }}" style="color: #FFFFFF; font-family:Courier New;">Активации</a></br>
    <a href="{{ url('/info') }}" style="color: #FFFFFF; font-family:Courier New;"></i>О нас</a>
  </div>
    <strong>
      <a style="color: #FFFFFF; font-family:Courier New;">Связаться</a><br>
    </strong>
      <i class="fa fa-building"></i><a style="color: #FFFFFF; font-family:Courier New;""> ул. Набережная, 1a, Таллинн,11311, Эстония</a><br>
      <i class="fa fa-comment"></i> <a style="color: #FFFFFF; font-family:Courier New;"> arsenymaz@gmail.com</a><br>
      <i class="fa fa-users"></i> <a style="color: #FFFFFF; font-family:Courier New;"> +372 8 800 555 35 35</a>
    </footer>
</div>
</body>
</html>	