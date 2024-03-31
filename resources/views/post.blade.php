<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>posts</h1>
<div style="background-color: silver ; padding: 10px">
    @foreach($posts as $post)
    <div style="background-color: whitesmoke ; margin: 10px">
        <h3>{{$post["title"]}}</h3>
        <p>{{$post["text"]}}</p>
    </div>
    @endforeach
</div>
</body>
</html>
