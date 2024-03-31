@extends('layouts.appMain')

@section('content')

<div class="container mt-4">
    <h3 class="text-center mb-4">Welcome to News Portal Laravel Main Page</h3>
    
    <div class="row">
        @foreach ($tasks as $task)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('images/' . $task->image) }}" class="card-img-top" alt="{{ $task->title }}" style="max-height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $task->title }}</h5>
                        <p class="card-text"><strong>Category:</strong> {{ $task->category->name }}</p>
                        <p class="card-text"><strong>Updated at:</strong> {{ $task->updated_at->format('d.m.Y H:i') }}</p>
                        <a href="{{url('show/'.$task->id)}}">Подробнее</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
