<?php

namespace App\Http\Controllers;

use App\Http\Resources\TaskResource;
use App\Models\Task;
use Illuminate\Http\Request;

class CompleteTaskController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Task $task)
    {
        //saving the request is_completed staus in task variable
        $task->is_completed = $request->is_completed;
        $task->save();

        return TaskResource::make($task);
    }
}
