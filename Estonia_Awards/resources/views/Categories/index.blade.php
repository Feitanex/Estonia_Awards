@extends('layouts.app')

@section('content')

<div class="box-body">
    <div class="add">
        <a href="addcategory" class="btn btn-primary btn-sm btn-flat" style="font-family:Courier New;"><i class="fa fa-plus"></i> Создать категорию</a>
    </div>
    <div class="container">
        <table id="example1" class="table table-bordered">
            <thead>
                <th style="font-family:Courier New;">Название категории</th>
                <th style="font-family:Courier New;">Действия</th>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td style="font-family:Courier New;">{{ $category->name }}</td>
                    <td>
                        <form action="{{ url('deletecategory/'.$category->id)}}" method="POST">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <a href="{{url('editcategory/'.$category->id)}}" title="edit" type="button" class="btn btn-success btn-sm edit btn-flat" style="font-family:Courier New;"><i class="fa fa-edit"></i> Редактировать</a>
                            <button type="submit" class='btn btn-danger btn-sm delete btn-flat' style="font-family:Courier New;"><i class='fa fa-trash'></i> Удалить</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection