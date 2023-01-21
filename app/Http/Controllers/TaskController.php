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
    public function show(Task $task){
        //$task = Task::find($id);
        
        return view('tasks.task')->with(
            'task',$task
        );
    }
    public function edit() {
        return view('tasks.edit');
    }
    public function store(Request $request) {
        $task = new Task();
        $task->content= $request->content;
        $task->user_id= 1;
        $task->save();
        return redirect('/tasks');
        //redirect('tasks');
        //;

    }
}
