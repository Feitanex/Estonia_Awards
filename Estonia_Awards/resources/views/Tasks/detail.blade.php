@extends('layouts.appMain')

@section('content')

<div class="container">
    <div class="card">
        <img src="{{ asset('images/' . $task->image) }}" style="width: 500px; height: 300px;" class="card-img-top" alt="{{ $task->title }}">
        <div class="card-body">
            <h2 class="card-title">{{ $task->title }}</h2>
            <p class="card-text"><strong>Category:</strong> {{ $task->category->name }}</p>
            <p class="card-text"><strong>Description:</strong> {{ $task->description }}</p>
            <p class="card-text"><strong>Created at:</strong> {{ $task->created_at->format('d.m.Y H:i') }}</p>
            <p class="card-text"><strong>Updated at:</strong> {{ $task->updated_at->format('d.m.Y H:i') }}</p>
            <a href="/news" class="btn btn-primary"> Вернуться назад</a>
        </div>
    </div>
</div>

<hr>
@if (Auth::check())
    <div class="container">
        <div class="col-sm-10">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Comments Add</h4></div>
                <div class="panel-body">
                    <form action="{{url('comments')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <strong>Comment text <i>{1000 symbols}</i>:</strong>
                                    <textarea class="form-control" style="height:50px" name="body" required></textarea>
                                </div>
                            </div>
                            <input type="hidden" name="taskid" value="{{ $task->id }}" class="form-control" placeholder="newsId" readonly>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Send comment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endif

@endsection
