<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1 class="title">"編集画面"</h1>
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ $post->title }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <input type="text" name="post[body]" value="{{ $post->body }}"/>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
        　　<input type="submit" value="保存">
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>