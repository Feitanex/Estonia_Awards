@extends('layouts.app')

@section('content')

<div class="box-header with-border">
    <h3 class="box-title"><strong> Редактирование новости</strong></h3>
</div>
<div class="box-body">
    <div class="add">
        <a href="/activationlist" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-backward"></i> Вернутся назад</a>
    </div>
    <div class="container">
        <form action="{{ url('editactivation/' . $activation->id)}}" method="POST" class="form-horizontal">
            @csrf
            <div class="form-group">
                <label for="activation-name" class="col-sm-3 control-label">Заголовок</label>
                <div class="com-sm-6">
                    <input type="text" name="name" class="form-control" value="{{ $activation->title }}" placeholder="activation name">
                </div>
            </div>
            <div class="form-group">
                <label for="activation-name" class="col-sm-3 control-label">Описание</label>
                <div class="com-sm-6">
                <textarea class="form-control" style="height:50px" name="description" placeholder="Описание">{{ $activation->description }}</textarea></div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-btn fa-plus"></i> Обновить новость
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection