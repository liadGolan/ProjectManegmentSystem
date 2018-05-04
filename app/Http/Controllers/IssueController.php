<?php

namespace App\Http\Controllers;

use App\ActionItem;
use App\Issue;
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
        $issue = new Issue();

        $issue->name = $request->name;
        $issue->description = $request->description;
        if($request->task != 0){
            $issue->task_id = $request->task;
        }
        if($request->action_item != 0){
            $issue->action_item_id = $request->action_item;
        }
        $issue->priority = $request->priority;
        $issue->severity = $request->severity;
        $issue->date_raised = $request->date_raised;
        $issue->expected_completion_date = $request->estimated_completion_date;
        $issue->status = $request->status;
        $issue->status_description = $request->status_description;
        $issue->save();

        return redirect()->route('home');
    }
}
