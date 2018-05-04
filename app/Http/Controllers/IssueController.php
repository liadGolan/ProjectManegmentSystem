<?php

namespace App\Http\Controllers;

use App\ActionItem;
use App\Task;
use Illuminate\Http\Request;

class IssueController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        $task_array = [0 => 'none'];
        foreach($tasks as $task){
            $task_array[$task->id] = $task->name;
        }
        $actionItems = ActionItem::all();
        $action_item_array = [0 => 'none'];
        foreach($actionItems as $actionItem) {
            $action_item_array[$actionItem->id] = $actionItem->name;
        }

        return view('issue', compact('task_array'), compact('action_item_array'));
    }

    public function createIssue(Request $request)
    {

    }
}
