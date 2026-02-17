<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    @forelse($array as $key => $val)
        @if($loop->first)
            <p>first</p>
        @endif
        @if($loop->odd)
            <p>ODD</p>
        @endif
        @if($loop->even)
            <p>EVEN</p>
        @endif
        <h4>{{$val['id']}}</h4>
        <h1>{{$val['name']}}</h1>
    @empty
        <h2>empty</h2>
    @endforelse
</body>
</html>
