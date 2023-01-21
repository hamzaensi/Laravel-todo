
@extends('layouts.master')
@section('title')
List of tasks 
@endsection

@section('content')
<div>
   <a href="{{route('new')}}">Add new Task</a>
</div>
<h3>List of tasks</h3>
<ul>
   @foreach ($tasks as $task)
       
   <li><a href="{{route('task',['task'=>$task->id])}}">{{$task->content}}</a> <a href="{{route('delete',['id' => $task->id])}}">Delete</a></li>
   @endforeach
</ul>   
@endsection
   
