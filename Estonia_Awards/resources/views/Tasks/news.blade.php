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
                    $totalTasks = 0;
                @endphp

                @forelse ($tasks as $task)
                    <div style="border:solid 1px; width:30%;">
                        <div>
                            <img src="{{ asset('images/' . $task->image) }}" class="card-img-top" alt="{{ $task->title }}" style="max-height: 200px; object-fit: cover;">
                            <p><strong>{{ $task->title }}</strong></p>
                            <p>Категория: {{ optional($task->category)->name }}</p>
                            <p>Обновлено: {{ $task->updated_at->format('d.m.Y H:i') }}</p>
                            <a href="{{ url('show/' . $task->id) }}">Подробнее</a>
                        </div>
                    </div>

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