@extends('layouts.appMain')

@section('content')

<div class="container mt-4">
    <h3 class="text-center mb-4">Активации</h3>

    <div class="row">
        <div class="col-md-8">
            @if(isset($selectCategory))
                <h4>Текущая категория: {{ $categories->find($selectCategory)->name ?? 'Все категории' }}</h4>
            @endif

            <ul class="list-group">
                @php
                    $totalTasks = 0; // Инициализация переменной для подсчета общего количества задач
                @endphp

                @forelse ($tasks as $task)
                    <li class="list-group-item">
                        <img src="{{ asset('images/' . $task->image) }}" class="card-img-top" alt="{{ $task->title }}" style="max-height: 200px; object-fit: cover;">
                        <p><strong>{{ $task->title }}</strong></p>
                        <p>Категория: {{ optional($task->category)->name }}</p>
                        <p>Обновлено: {{ $task->updated_at->format('d.m.Y H:i') }}</p>
                        <p class="commentscount"><span class="spancomment">Количество комментариев:</span> {{ $task->comments ? count($task->comments) : 0 }}</p>
                        <a href="{{ url('show/' . $task->id) }}">Подробнее</a>
                    </li>

                    @php
                        $totalTasks++; // Увеличиваем счетчик задач на каждой итерации цикла
                    @endphp
                @empty
                    <li class="list-group-item">Новости не найдены.</li>
                @endforelse
            </ul>

            <p class="mt-3"><strong>Всего новостей на странице:</strong> {{ $totalTasks }}</p>
        </div>
    </div>
</div>

@endsection