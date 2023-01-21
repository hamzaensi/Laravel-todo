<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of tasks</title>
</head>
<body>
    <h3>List of tasks</h3>
    <ul>
       @foreach ($tasks as $task)
           
       <li><a href="{{route('task',['task'=>$task->id])}}">{{$task->content}}</a> </li>
       @endforeach
    </ul>
</body>
</html>