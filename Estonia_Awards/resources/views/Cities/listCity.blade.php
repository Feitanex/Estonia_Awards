@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row">
 <div class="col-lg-12 margin-tb">
 <div class="pull-left">
 <h2>Cities List </h2>
 </div>
 </div>
 </div>
@if (count($cities ?? '') > 0)
<table class="table table-striped">
<tr>
<th style="width:10%">ID</th>
<th style="width:10%">City name</th>
<th style="width:10%">Country Code</th>
<th style="width:20%">Population</th>
</tr>
@foreach ($cities as $city)
<tr>
<td>{{$city->ID}}</td>
<td>{{$city->Name}}</td>
<td>{{$city->CountryCode}}</td>
<td>{{$city->Population}}</td>
</tr>
 @endforeach
</table>
 {!! $cities->links() !!}
@else
<p>Data no found</p>
@endif
</div>
@endsection