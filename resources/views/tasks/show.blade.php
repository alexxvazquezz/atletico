<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    @if ($tasks->completed == false)
      <h1>{{ $tasks->body }}</h1>
      <p>Task not complete. Start date: {{$tasks->created_at}}</p>
    @else
      <h1>{{ $tasks->body }}</h1>
      <p>Task Complete</p>
    @endif
  </body>
</html>
