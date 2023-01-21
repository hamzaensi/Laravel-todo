
@extends('layouts.master')
@section('title')
List of tasks 
@endsection

@section('content')
<h3>List of tasks</h3>
<ul>
   @foreach ($tasks as $task)
       
   <li><a href="{{route('task',['task'=>$task->id])}}">{{$task->content}}</a> </li>
   @endforeach
</ul>   
@endsection
   
