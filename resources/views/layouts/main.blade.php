<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Boolean</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="nav">
      <img src="{{ asset('img/logo.png') }}" alt="Boolean Logo">
      <ul> 
        @foreach(config('main.routes') as $route)
          <li class={{ Route::currentRouteName() == $route['pathId'] ? 'active' : '' }}>
              <a href="{{route($route['pathId'])}}">{{$route['displayText']}}</a>
          </li>
        @endforeach
      </ul>
    </div>
    <div class="content">
      @yield('content')
    </div>
</body>
</html>