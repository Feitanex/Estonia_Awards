@extends('layouts.app')

@section('content')
<div class="box-header with-border">
	<h3 class="box-title" style="font-family:Courier New;"><strong> Добавить локацию</strong></h3>
	<div class="add">
	<a href="productlist" class="btn btn-primary btn-sm btn-flat" style="border-radius: 98px; background-color:#ABA49D; border:transparent; font-family:Courier New; box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);"> <i class="fa fa-backward"></i> Вернуться назад</a>
	</div>

</div>

<div class="box-body">
	<div class="container">
        <div class="col-lg-9 margin-tb">
			@if ($errors->any())
				<div class="alert alert-danger">
					<strong style="font-family:Courier New;">Ошибка!</strong> 
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
					<input style="font-family:Courier New;"type="text" name="title" class="form-control" placeholder="Заголовок">
				</div>
			</div>			
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong style="font-family:Courier New;">Описание:</strong>
					<textarea style="font-family:Courier New;"class="form-control" style="height:50px" name="description"
						placeholder="Описание"></textarea>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong style="font-family:Courier New;">Категория:</strong>
				<select style="font-family:Courier New;" name="category_id" class="form-control" >															
					@foreach ($categories as $category) 						
						<option value="{{$category->id}}" >{{$category->name}}</option>						
					@endforeach
					  
				</select>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong style="font-family:Courier New;">Изображение:</strong>
				  <input type="file" name="image"  class="form-control" value="" style="font-family:Courier New;">  
				</div>
			</div>						
			<div class="col-xs-12 col-sm-12 col-md-12 text-center">
			<button type="submit" class="btn btn-default" style="border-radius: 98px;border:transparent; font-family:Courier New; box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);">
                <i class="fa fa-btn fa-plus"></i> Создать локацию
            </button>			
		</div>			
		</form>
		</div>
    </div>
</div>
@endsection