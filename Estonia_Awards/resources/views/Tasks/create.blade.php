@extends('layouts.app')

@section('content')
<div class="box-header with-border">
	<h3 class="box-title"><strong> Добавить локацию</strong></h3>
	<div class="add">
	<a href="productlist" class="btn btn-primary btn-sm btn-flat"> <i class="fa fa-backward"></i> Вернуться назад</a>
	</div>

</div>

<div class="box-body">
	<div class="container">
        <div class="col-lg-9 margin-tb">
			@if ($errors->any())
				<div class="alert alert-danger">
					<strong>Ошибка!</strong> 
					<ul>
						@foreach ($errors->all() as $error)
							<li></li>
						@endforeach
					</ul>
				</div>
			@endif
		<form action="" method="POST" enctype="multipart/form-data">
			@csrf			
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Заголовок:</strong>
					<input type="text" name="title" class="form-control" placeholder="Заголовок">
				</div>
			</div>			
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Описание:</strong>
					<textarea class="form-control" style="height:50px" name="description"
						placeholder="Описание"></textarea>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Категория:</strong>
				<select name="category_id" class="form-control" >															
					@foreach ($categories as $category) 						
						<option value="{{$category->id}}" >{{$category->name}}</option>						
					@endforeach
					  
				</select>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Изображение:</strong>
				  <input type="file" name="image"  class="form-control" value="">  
				</div>
			</div>						
			<div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-primary">Сохранить локацию</button>
			</div>			
		</form>
		</div>
    </div>
</div>
@endsection