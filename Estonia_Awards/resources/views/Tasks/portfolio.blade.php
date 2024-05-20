@extends('layouts.app')

@section('content')
<div class="with-border" style="padding:1em;">
    <h3 style="color:#5B5B5B; font-family:Courier New;">Последние<br>открытые места</h3>
</div>

<div class="box-body" style="min-height: 550px;">
    <div class="container">
        <div class="row">
            @forelse ($tasks as $task)
                <div class="col-md-3 mb-4" style="padding-left:5%;">
                    <div class="card h-150 border mb-3" style="margin-bottom: 20px; padding: 10px; border: 1px solid; height:450px;">
                        <img src="{{ asset('images/' . $task->image) }}" class="card-img-top" alt="{{ $task->title }}" style="max-height: 200px; object-fit: cover;">
                        <div class="card-body" >
                            <h5 style="font-size:18px; font-family:Courier New;" class="card-title">{{ $task->title }}</h5>
                            <p style="font-size:18px; font-family:Courier New;" class="card-text">Категория: {{ optional($task->category)->name }}</p>
                            <p style="font-size:18px; font-family:Courier New;" class="card-text"><small class="text-muted">Обновлено: {{ $task->updated_at->format('d.m.Y H:i') }}</small></p>
                            <a href="{{ url('show/' . $task->id) }}" class="btn btn-primary" style="border-radius: 98px; background-color:#ABA49D; border:transparent; font-family:Courier New; box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);">Подробнее</a>
                        </div>
                    </div>
                </div>
            @empty 
            @endforelse
        </div>
    </div>
</div>
@endsection
