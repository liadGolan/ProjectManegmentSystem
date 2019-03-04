<?php

namespace App\Services;

use App\Contracts\TaskContract;
use App\Deliverable;
use App\Resource;
use App\Task;
use Carbon\Carbon;

class TaskService implements TaskContract
{
    public function getAllDeliverablesAndResourcesForTaskCreationDropdown(): array
    {
        $deliverables = Deliverable::all();
        $deliverables_array = [];
        foreach($deliverables as $deliverable) {
            $deliverables_array[$deliverable->id] = $deliverable->name;
        }
        $resources = Resource::all();
        $resource_array = [];
        foreach($resources as $resource) {
            $resource_array[$resource->id] = $resource->name;
        }

        return [$deliverables_array, $resource_array];
    }

    public function createANewTask(array $data)
    {
        $task = new Task();

        $task->name = $data['name'];
        $task->description = $data['description'];
        $task->deliverable_id = $data['deliverable'];
        $task->resource_id = $data['resource'];
        $task->expected_start_date = $data['expected_start_date'];
        $task->expected_end_date = $data['expected_end_date'];
        $format = "Y-m-d";
        $expectedStart = Carbon::createFromFormat($format, $task->expected_start_date);
        $expectedEnd = Carbon::createFromFormat($format, $task->expected_end_date);
        $expectedDuration = $expectedStart->diffInDays($expectedEnd);
        $task->expected_duration_in_days = $expectedDuration;

        $task->save();
    }
}