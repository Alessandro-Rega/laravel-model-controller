<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
        @foreach ($movies as $item)
        <div class="card">
            <h2>{{$item['title']}}</h2>
            <h3>{{$item['original_title']}}</h3>
            <h4>{{$item['nationality']}}</h5>
            <h5>{{$item['date']}}</h6>
            <span>{{$item['vote']}}</span>
        </div>
        @endforeach
    </div>
</body>
</html>