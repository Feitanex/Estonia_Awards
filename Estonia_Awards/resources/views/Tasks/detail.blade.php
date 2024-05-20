@extends('layouts.appMain')

@section('content')

<div class="container">
    <div class="card">
        <img src="{{ asset('images/' . $task->image) }}" style="width: 500px; height: 300px;" class="card-img-top" alt="{{ $task->title }}">
        <div class="card-body">
            <h2 style="font-family:Courier New;"class="card-title">{{ $task->title }}</h2>
            <p style="font-family:Courier New;" class="card-text"><strong>Category:</strong> {{ $task->category->name }}</p>
            <p style="font-family:Courier New;" class="card-text"><strong>Description:</strong> {{ $task->description }}</p>
            <p style="font-family:Courier New;" class="card-text"><strong>Created at:</strong> {{ $task->created_at->format('d.m.Y H:i') }}</p>
            <p style="font-family:Courier New;" class="card-text"><strong>Updated at:</strong> {{ $task->updated_at->format('d.m.Y H:i') }}</p>
            <a href="/news" class="btn btn-primary" style="border-radius: 98px;background-color:#ABA49D ; border:transparent; font-family:Courier New; box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5); font-family:Courier New;"> Вернуться назад</a>
        </div>
    </div>
</div>

<hr style="border:transparent;">


@endsection
