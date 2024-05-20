@extends('layouts.app')

@section('content')
<div class="box-header with-border">
	<div class="add">
	<a href="addtask" class="btn btn-primary btn-sm btn-flat" style="font-family:Courier New;"><i class="fa fa-plus"></i> Создать новую локицию</a>
	</div>
  <div class="pull-right">
	<form class="form-inline" action="{{ url('productBycategory') }}" method="POST">
	  @csrf
	  <div class="form-group">
		<label style="font-family:Courier New;">Категории: </label>
		<select class="form-control input-sm"  name="category_id" onChange=submit();>
			
			<option value="0" >Все</option>
			 @foreach ($categories as $category)
				<option value="{{ $category->id}}" 
				@if(isset($selectCategory) && $category->id==$selectCategory) selected @endif
				>{{$category->name}}</option>			
			@endforeach
		</select>
	  </div>
	</form>
  </div>  
</div>

<div class="box-body">
	@if (count($tasks ?? '') > 0)
	<table class="table table-bordered">
		<thead>
		  <th style="font-family:Courier New;" width=3%>No</th>
		  <th style="font-family:Courier New;" width="20%">Заголовок</th> 
		  <th style="font-family:Courier New;">Описание</th>
		  <th style="font-family:Courier New;">Категория</th> 
		  <th style="font-family:Courier New;">Дата обновления</th>                 
		  <th style="font-family:Courier New;">Действия</th>
		</thead>
		<tbody>
		@foreach($tasks as $task)
			<tr>
				<td style="font-family:Courier New;">{{ $task->id }}</td>
                <td style="font-family:Courier New;">{{ $task->title }}</td>
				<td style="font-family:Courier New;"> {{ $task->description}} </td>
				<td style="font-family:Courier New;">{{ $task->category_id }} - {{$task->category->name}}</td>    
				<td style="font-family:Courier New;">{{ $task->updated_at->format('d.m.Y') }}</td>                            
				<td>
				  	<a href="{{url('edittask/' . $task->id)}}" class='btn btn-success btn-sm edit btn-flat' style="font-family:Courier New;"><i class='fa fa-edit'></i> Редактировать</a>
				   	<a href="{{url('deletetask/' . $task->id)}}" class='btn btn-danger btn-sm delete btn-flat' style="font-family:Courier New;"><i class='fa fa-trash'></i> Удалить</a> 				   
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>				 
	@else
		<p style="font-family:Courier New;">Не найдено</p>
	@endif
</div>
@endsection