@extends('layouts.appMain')

@section('content')

<div class="container mt-4">
    <h3 class="text-center mb-4" style="font-family:Courier New; margin-top:4%; font-size:28px;">Активации</h3>

    <div class="row" style="margin-top:10%;">
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
                        <div class="card h-150 border mb-3" style="margin-bottom: 20px; padding: 10px; border: 1px solid; border-radius: 15px 15px 15px 15px; height:450px;">
                            <img src="{{ asset('images/' . $task->image) }}" class="card-img-top" alt="{{ $task->title }}" style="max-height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 style="font-size:18px; font-family:Courier New;" class="card-title">{{ $task->title }}</h5>
                                <p style="font-size:18px; font-family:Courier New;" class="card-text">Категория: {{ optional($task->category)->name }}</p>
                                <p style="font-size:18px; font-family:Courier New;" class="card-text"><small class="text-muted">Обновлено: {{ $task->updated_at->format('d.m.Y H:i') }}</small></p>
                                <a href="{{ url('show/' . $task->id) }}" class="btn btn-primary" style="border-radius: 98px;background-color:#ABA49D ; border:transparent; font-family:Courier New; box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5); font-family:Courier New;">Подробнее</a>
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

            <p class="mt-3" style="font-size:18px; font-family: Courier New;"><strong>Всего новостей на странице:</strong> {{ $totalTasks }}</p>
        </div>
    </div>
</div>

@endsection