<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <h1>posts</h1>
    <ul>
        <li><a href="{{route('posts.show' , ["postId" => "post-1"])}}"> post 1</a></li>
        <li><a href="{{route('posts.show' , ["postId" => "post-2"])}}"> post 2</a></li>
        <li><a href="{{route('posts.show' , ["postId" => "post-3"])}}"> post 3</a></li>
    </ul>
    <br>
    <ul>
        <li><a href="/posts/post-1"> post 1</a></li>
        <li><a href="/posts/post-2"> post 2</a></li>
        <li><a href="/posts/post-3"> post 3</a></li>
    </ul>

</body>
</html>
