<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <nav>
    <ul>
      <li><a href="{{ route('home') }}">Home</a></li>
      <li><a href="{{ route('about') }}">About</a></li>
    </ul>
  </nav>

  <h1>{{ $greeting }} {{ $username }}</h1>

  @if ($like)
    <p>I like blade</p>
  @else
    <p>I don't like blade</p>
  @endif

  <div>
    <ul>
      @foreach ($students as $student)
        <li>
          {{ $student }}
          {{-- Se è ultimo metti . altimenti metti ; --}}
          @if ($loop->last)
            .
          @else
            ;
          @endif
        </li>
      @endforeach
    </ul>
  </div>
</body>

</html>
