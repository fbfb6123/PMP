<!doctype html>
<html lang="ja">
<head>
    <link href="/css/app.css" rel="stylesheet">
    <title>Index</title>
</head>
<body>
<h1>Hello/Index</h1>
<ol>
    @foreach($data as $item)
        <li>{{$item->name}} [{{$item->email}},{{$item->password}}]</li>
    @endforeach
</ol>

</body>
</html>
