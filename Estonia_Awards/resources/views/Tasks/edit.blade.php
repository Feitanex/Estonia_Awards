@extends('layouts.app')

@section('content')
<div class="box-header with-border">
	<h3 class="box-title" style="font-family:Courier New;"><strong> Изменить локацию</strong></h3>
	<div class="add">
	<a href="/productlist" class="btn btn-primary btn-sm btn-flat" style="font-family:Courier New;"> <i class="fa fa-backward"></i> Вернутся к списку</a>
	</div>

</div>

<div class="box-body">
	<div class="container">
        <div class="col-lg-9 margin-tb">
			@if ($errors->any())
				<div class="alert alert-danger">
					<strong style="font-family:Courier New;">Error!</strong> 
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
					<strong style="font-family:Courier New;">Заголовок:</strong>
					<input style="font-family:Courier New;" type="text" name="title" class="form-control" placeholder="Заголовок" value="{{ $task->title }}">
				</div>
			</div>			
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong style="font-family:Courier New;">Описание:</strong>
					<textarea style="font-family:Courier New;" class="form-control" style="height:50px" name="description"
						placeholder="Описание">{{ $task->description }}</textarea>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong style="font-family:Courier New;">Категория:</strong>
				<select style="font-family:Courier New;" name="category_id" class="form-control" >															
					@foreach ($categories as $category) 						
						<option value="{{$category->id}}"
                            @if ($category->id==$task->category_id)
                            selected
                            @endif >{{$category->name}}</option>						
					@endforeach
				</select>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong style="font-family:Courier New;">Изображение:</strong>
				  <input style="font-family:Courier New;"  type="file" name="image"  class="form-control" value="">  
				</div>
			</div>	
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong style="font-family:Courier New;">Старое изображение:</strong>
					<img src="{{ asset('images/' . $task->image) }}" alt="Old Image" style="max-width: 200px;">
				</div>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button style="font-family:Courier New;" type="submit" class="btn btn-primary">Сохранить изменения</button>
			</div>			
		</form>
		</div>
    </div>
</div>
@endsection