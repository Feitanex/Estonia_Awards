@extends('layouts.app')

@section('content')

<div class="box-header with-border">
    <h3 class="box-title"><strong> Создание новости</strong></h3>
</div>
<div class="box-body">
    <div class="add">
        <a href="/activationlist" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-backward"></i> Вернуться назад</a>
    </div>
    <div class="container">
        <form action="{{ route('addactivation') }}" method="POST" class="form-horizontal">
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
                    <input type="text" name="description" class="form-control" placeholder="Описание">
                </div>
            </div>			
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-btn fa-plus"></i> Добавить новость
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
