@extends('layouts.base')

@section('title', 'Главная')

@section('main')
    <div class="post_container">
        @foreach ($posts as $post)
            <div class="post">
                <div class="post_block">
                    <div class="up left text_block">
                        <p class="title">{{ $post->name }}</p>
                        <p class="text">{{ $post->desc }}</p>
                    </div>
                    <div class="up right text_block">
                        <p class="text">Дата: {{ $post->date }} Время: {{ $post->time }}</p>
                    </div>
                </div>
                <div class="post_block">
                    <div class="down left text_block">
                        <p class="text">Статус: {{ $post->status }}</p>
                    </div>
                    <div class="down right text_block">
                        <p class="text">Категория: {{ $post->categorie->name }}</p>
                        <p class="text">Автор: {{ $post->user->name }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection