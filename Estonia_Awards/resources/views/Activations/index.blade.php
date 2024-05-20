@extends('layouts.app')

@section('content')

<div class="box-body">
    <div class="add">
        <a href="addactivation" class="btn btn-primary btn-sm btn-flat" style="border-radius: 98px; background-color:#ABA49D; border:transparent; font-family:Courier New; box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);"><i class="fa fa-plus"></i> Создать новую новость</a>
    </div>
    <div class="container">
        <table id="example1" class="table table-bordered">
            <thead>
                <th style="font-family:Courier New;">Тема новости</th>
                <th style="font-family:Courier New;">Описание</th>
                <th style="font-family:Courier New;">Действия</th>
            </thead>
            <tbody>
                @foreach ($activations as $activation)
                <tr>
                    <td style="font-family:Courier New;">{{ $activation->title }}</td>
                    <td style="font-family:Courier New;">{{ $activation->description }}</td>
                    <td>
                        <form action="{{ url('deleteactivation/'.$activation->id)}}" method="POST">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <a href="{{url('editactivation/'.$activation->id)}}" title="edit" type="button" class="btn btn-success btn-sm edit btn-flat" style="border-radius: 98px; border:transparent; font-family:Courier New; box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);"><i class="fa fa-edit"></i> Редактировать</a>
                            <button type="submit" class='btn btn-danger btn-sm delete btn-flat' style="border-radius: 98px; border:transparent; font-family:Courier New; box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);"><i class='fa fa-trash'></i> Удалить</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection