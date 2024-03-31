@extends('layouts.appMain')

@section('content')

<div class="container mt-4">
    <h3 class="text-center mb-4">Активации</h3>

    <div class="row">
        <!-- <div class="col-md-4 mb-4">
            <form action="{{ route('news.filter') }}" method="POST">
                @csrf
                <label for="categoryFilter">Фильтр по категории:</label>
                <select name="category_id" id="categoryFilter" class="form-control" onchange="this.form.submit()">
                    <option value="0">Все категории</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if(isset($selectCategory) && $category->id == $selectCategory) selected @endif>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>

                <label for="sortFilter" class="mt-3">Сортировать по:</label>
                <select name="sort" id="sortFilter" class="form-control" onchange="this.form.submit()">
                    @foreach ($sortinglist as $option)
                        <option value="{{ $option }}" @if(isset($sort) && $option == $sort) selected @endif>
                            {{ ucfirst(str_replace('_', ' ', $option)) }}
                        </option>
                    @endforeach
                </select>
            </form>
        </div> -->

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