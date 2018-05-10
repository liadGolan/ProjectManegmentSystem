<?php

namespace App\Http\Controllers;

use App\Resource;
use App\Task;
use Illuminate\Http\Request;
use App\Deliverable;

class DeliverableController extends Controller
{
    public function index()
    {
        return view('deliverable');
    }

    public function view($id)
    {
        $deliverable = Deliverable::find($id);
        $tasks = $deliverable->getTasks()->get();
        $show = false;
        $taskId = null;
        $data = [
            'id' => $id,
            'tasks' => $tasks,
            'show' => $show,
            'taskId' => $taskId,
            'resourceName' => '',
            'resourceTitle' => '',
            'issues' => [],
        ];
        return view('home', compact('data'));
    }

    public function viewTask($did, $tid)
    {
        $deliverable = Deliverable::find($did);
        $tasks = $deliverable->getTasks()->get();
        $show = true;
        $taskId = $tid;

        $task = Task::find($tid);
        $resource = Resource::find($task->resource_id);
        $issues = $task->getIssuesAssignedToTask()->get();

        $data = [
            'id' => $did,
            'tasks' => $tasks,
            'show' => $show,
            'taskId' => $taskId,
            'resourceName' => $resource->name,
            'resourceTitle' => $resource->title,
            'issues' => $issues
        ];
        return view('home', compact('data'));

    }

    public function createDeliverable(Request $request)
    {
        $deliverable = new Deliverable();

        $deliverable->name = $request->name;
        $deliverable->description = $request->description;
        $deliverable->due_date = $request->due_date;
        $deliverable->status = $request->status;

        $deliverable->save();

        return redirect()->route('home');
    }
}
