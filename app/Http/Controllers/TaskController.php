<?php

namespace App\Http\Controllers;

use App\Deliverable;
use App\Task;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TaskController extends Controller
{
    public function index()
    {
        $deliverables = Deliverable::all();
        $deliverables_array = [];
        foreach($deliverables as $deliverable) {
            $deliverables_array[$deliverable->id] = $deliverable->name;
        }
        $resource_array = [1 => "Jim"];
        return view('task', compact('deliverables_array'), compact( 'resource_array'));
    }

    public function createTask(Request $request)
    {
        $task = new Task();

        $task->name = $request->name;
        $task->description = $request->description;
        $task->deliverable_id = $request->deliverable;
        $task->resource_id = $request->resource;
        $task->expected_start_date = $request->expected_start_date;
        $task->expected_end_date = $request->expected_end_date;
        $format = "Y-m-d";
        $expectedStart = Carbon::createFromFormat($format, $task->expected_start_date);
        $expectedEnd = Carbon::createFromFormat($format, $task->expected_end_date);
        $expectedDuration = $expectedStart->diffInDays($expectedEnd);
        $task->expected_duration_in_days = $expectedDuration;

        $task->save();

        return redirect()->route('home');
    }
}
