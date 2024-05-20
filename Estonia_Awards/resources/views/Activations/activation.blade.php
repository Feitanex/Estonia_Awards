@extends('layouts.appMain')

@section('content')

<div class="container" style="margin-left: 5%; ">
    @foreach ($activations as $activation)
    <tr >
        <div style="width:100%; margin-top:5%; background-color: #D9D9D9; border-radius: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);padding-left:1%; padding-right:1%;">
            <c style="font-size:30px;font-family:Courier New;">{{ $activation->title }}</c><br>
            <c style="font-size:20px; font-family:Courier New; color:#7B7B7B;">{{ $activation->description }}</c>
        </div>
    </tr>
    @endforeach
</div>
<a style="color:transparent;">a</a><br>
<a style="color:transparent;">a</a>
@endsection