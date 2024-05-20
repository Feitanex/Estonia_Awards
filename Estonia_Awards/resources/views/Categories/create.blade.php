@extends('layouts.app')

@section('content')

<div class="box-header with-border">
    <h3 class="box-title" style="font-family:Courier New;"><strong> Создание категории</strong></h3>
</div>
<div class="box-body">
    <div class="add">
        <a href="/categorylist" class="btn btn-primary btn-sm btn-flat" style="border-radius: 98px; background-color:#ABA49D; border:transparent; font-family:Courier New; box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);"><i class="fa fa-backward"></i> Вернуться назад</a>
    </div>
    <div class="container">
        <form action="{{ url('addcategory')}}" method="POST" class="form-horizontal">
            {{csrf_field()}}
            <div class="form-group">
                <label for="task-name" class="col-sm-3 control-label" style="font-family:Courier New;">Название категории:</label>
                <div class="com-sm-6">
                    <input type="text" name="name" id="category-name" class="form-control" value="" placeholder="Категория" style="font-family:Courier New;">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default" style="border-radius: 98px;border:transparent; font-family:Courier New; box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);">
                        <i class="fa fa-btn fa-plus"></i> Добавить категорию
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection