<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1><a href="{{ route('posts.index') }}">Kisiko News🍻</a></h1>
    <p>タイトル🫧</p>
    <p>{{ $post->title }}</p>
    <br><br>

    <p>投稿内容💭</p>
    <p>{{ $post->message }}</p>
    <br><br>

    <form action="{{ route('comments.store') }}" method="POST">
        @csrf
        <div>
            <input type="hidden" name="post_id" value="{{ $post->id }}">
            コメント：
            <input name="comment_text">
        </div>
        <br><br>
        <button type="submit">投稿</button>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif

    </form>

    <br><br>
    <p>コメント一覧🐣</p> 
    @foreach ($post->comments as $comment) 
        <h3>コメント：{{ $comment->comment_text }}</h3>
        <form action="{{ route('comments.destroy', $comment->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">削除</button>
        </form>
        <br>
    @endforeach
</body>
</html>