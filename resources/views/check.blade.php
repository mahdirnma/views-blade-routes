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
@if($check=="night")
<div style="background-color: #1a202c ; width: 100%; min-height: 20svh; color: white; border: 1px solid #ef4444">
    <p>{{$check}}</p>
</div>
@elseif($check=="day")
<div style="background-color: #a0aec0 ; width: 100%; min-height: 20svh; color: black; border: 1px solid #ef4444">
    <p>{{$check}}</p>
</div>
@else
    <p>not found</p>
@endif

</body>
</html>
