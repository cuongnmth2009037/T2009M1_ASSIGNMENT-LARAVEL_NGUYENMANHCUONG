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
<h1>list apartment</h1>
@foreach($lits as $list)
    {{$list->name}}
    {{$list->address}}
    {{$list->price}}
    {{$list->information}}
    {{$list->informationDetail}}
    {{$list->Thumnail}}
    {{$list->status}}
@endforeach
</body>
</html>
