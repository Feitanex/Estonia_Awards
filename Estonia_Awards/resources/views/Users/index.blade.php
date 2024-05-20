@extends('layouts.app')

@section('content')

<div class="box-header with-border">
	<div class="add">
		<a href="adduser" class="btn btn-primary btn-sm btn-flat" style="border-radius: 98px; background-color:#ABA49D; border:transparent; font-family:Courier New; box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);"><i class="fa fa-plus"></i> Создать нового пользователя</a>
	</div>
	<div class="pull-right">
		<form class="form-inline" action="{{ url('userByrole') }}" method="POST">
			@csrf
			<div class="form-group">
				<label style="font-family:Courier New;">Роль: </label>
				<select class="form-control input-sm" name="role" onChange=submit();>
					<option value="0" >Все</option>
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
				<th style="font-family:Courier New;" width=3%>No</th>
				<th style="font-family:Courier New;" width="20%">Имя</th> 
				<th style="font-family:Courier New;">Почта</th> 
				<th style="font-family:Courier New;">Роль</th> 
				<th style="font-family:Courier New;">Действия</th>
			</thead>
			<tbody>
				@foreach($users as $user)
					<tr>
						<td style="font-family:Courier New;">{{ $user->id }}</td>
						<td style="font-family:Courier New;">{{ $user->name }}</td>
						<td style="font-family:Courier New;">{{ $user->email }}</td>    
						<td style="font-family:Courier New;">{{ $user->role }}</td> 
						<td style="font-family:Courier New;">
							<a href="{{url('edituser/' . $user->id)}}" class='btn btn-success btn-sm edit btn-flat' style="border-radius: 98px;border:transparent; font-family:Courier New; box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);">
								<i class='fa fa-edit'></i> Редактировать
							</a>
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