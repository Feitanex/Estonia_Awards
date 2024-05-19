@extends('layouts.appMain')

@section('content')

<div class="container mt-4">
    <h3 class="text-center mb-4">Активации</h3>

    <div class="row" style="margin-top:15%;">
        <div class="col-md-12">
            @if(isset($selectCategory))
                <h4>Текущая категория: {{ $categories->find($selectCategory)->name ?? 'Все категории' }}</h4>
            @endif

            @php
                $totalTasks = 0;
            @endphp

            <div class="row">
                @forelse ($tasks as $task)
                    <div class="col-md-3 mb-4">
                        <div class="card h-150 border mb-3" style="margin-bottom: 20px; padding: 10px; border: 1px solid; border-radius: 15px 15px 15px 15px; height:400px;">
                            <img src="{{ asset('images/' . $task->image) }}" class="card-img-top" alt="{{ $task->title }}" style="max-height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $task->title }}</h5>
                                <p class="card-text">Категория: {{ optional($task->category)->name }}</p>
                                <p class="card-text"><small class="text-muted">Обновлено: {{ $task->updated_at->format('d.m.Y H:i') }}</small></p>
                                <a href="{{ url('show/' . $task->id) }}" class="btn btn-primary" style="background-color:#A99A8C; border:transparent;">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    @php
                        $totalTasks++;
                    @endphp
                @empty
                    <div class="col-12">
                        <div class="alert alert-warning" role="alert">
                            Активации не найдены.
                        </div>
                    </div>
                @endforelse
            </div>

            <p class="mt-3"><strong>Всего новостей на странице:</strong> {{ $totalTasks }}</p>
        </div>
    </div>
</div>

@endsection