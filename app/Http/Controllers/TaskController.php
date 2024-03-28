<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(int $task_id): view
    {
        //SELECT * FROM tasks
        //dd(Task::all());

        //SELECT * FROM tasks WHERE id = 1
        $task = Task::find($task_id);

        //dd($task);

        return view('welcome',['task' => $task]);
        //return '<h1>Hola mundo desde el controlador:'.$task_id.'</h1>';
    }
}
