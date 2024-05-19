@extends('layouts.app')

@section('content')

<div class="box-header with-border">
	<div class="add">
		<a href="adduser" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Создать нового пользователя</a>
	</div>
	<div class="pull-right">
		<form class="form-inline" action="{{ url('userByrole') }}" method="POST">
			@csrf
			<div class="form-group">
				<label>Роль: </label>
				<select class="form-control input-sm" name="role" onChange=submit();>
					<option value="0">Все</option>
					@foreach ($roles as $role)
						<option value="{{$role}}" 
							@if(isset($selectRole) && $role==$selectRole)
                                selected 
                            @endif
						>{{$role}}</option>
					@endforeach

				</select>
			</div>
		</form>
	</div>
</div>

<div class="box-body">
	@if (count($users ?? '') > 0)
		<table class="table table-bordered">
			<thead>
				<th width=3%>No</th>
				<th width="20%">Имя</th> 
				<th>Почта</th> 
				<th>Роль</th> 
				<th>Действия</th>
			</thead>
			<tbody>
				@foreach($users as $user)
					<tr>
						<td>{{ $user->id }}</td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>    
						<td>{{ $user->role }}</td> 
						<td>
							<a href="{{url('edituser/' . $user->id)}}" class='btn btn-success btn-sm edit btn-flat'>
								<i class='fa fa-edit'></i> Редактировать
							</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>				 
	@else
		<p>Не найдено</p>
	@endif
</div>
@endsection