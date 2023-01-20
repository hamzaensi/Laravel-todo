<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    
    public function index(){
        $tasks = Task::all();
        return view('tasks.tasks')->with(
            'tasks',$tasks);
        
    }
    public function show($id){
        $task = Task::find($id);
        $user = $task->user();
        dd($task);
        return view('tasks.task')->with(
            'user',$user
        );
    }
    public function store(Request $request) {}
}
