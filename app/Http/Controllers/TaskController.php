<?php

namespace App\Http\Controllers;

use App\Deliverable;
use App\Task;
use App\Resource;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Contracts\TaskContract;

class TaskController extends Controller
{
    protected $taskUtility;

    public function __construct(TaskContract $taskUtility)
    {
        $this->taskUtility = $taskUtility;
    }
    public function index()
    {
        $data = $this->taskUtility->getAllDeliverablesAndResourcesForTaskCreationDropdown();
        $deliverables_array = $data[0];
        $resource_array = $data[1];
        return view('task', compact('deliverables_array'), compact( 'resource_array'));
    }

    public function createTask(Request $request)
    {
        $data  = [
            'name' => $request->name,
            'description' => $request->description,
            'deliverable' => $request->deliverable,
            'resource' => $request->resource,
            'expected_start_date' => $request->expected_start_date,
            'expected_end_date' => $request->expected_end_date
        ];

        $this->taskUtility->createANewTask($data);

        return redirect()->route('home');
    }
}
