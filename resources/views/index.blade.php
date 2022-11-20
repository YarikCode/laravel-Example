<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заявки</title>
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
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
</body>
</html>