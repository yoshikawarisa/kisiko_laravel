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
    <form action="{{ route('posts.store') }}" method="POST">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif

        @csrf
        <div>
            タイトル🫧
            <input name="title">
        </div>
        <br><br><br>
        <div>
            投稿内容💭
            <input name="message">
        </div>
        <br><br>
        <button type="submit" onclick="confirm('投稿しますか？')">投稿</button>
    </form>
    <br><br>
    <p>投稿一覧🐶♡</p> 
    @foreach ($posts as $post) {{-- PostControllerのindexメソッド内の「$posts」を受け取る --}}
        <h3>タイトル🫧{{ $post->title }}</h3>
        <p>投稿内容💭{{ $post->message }}</p>
        <p><a href="{{ route('posts.show', $post->id) }}" >詳細</a></p>
        <br>
        <br>
    @endforeach
</body>

</html>