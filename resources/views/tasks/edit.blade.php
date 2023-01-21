@extends('layouts.master')
@section('title')
Edit task
@endsection
@section('content')

<div class="card">
<div class="card-body">
    <form action="{{route('tasks')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="content">Task</label>
            <input class="form-control" type="text" name="content" id="content">

        </div>
        <br>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Add">
        </div>
        
    </form>
</div>

</div>
@endsection
