<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
  public function show($id) {
    $task = Task::findOrFail($id);
    return view('task-show', compact('task'));
  }
}
