<?php

namespace App\Services;

use App\Resource;
use App\Task;
use App\Deliverable;
use App\Contracts\DeliverableContract;

class DeliverableService implements DeliverableContract
{
    public function getDataForViewingDeliverable($id): array
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
        return $data;
    }

    public function getDataForViewingTask($did, $tid): array
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

        return $data;
    }

    public function createNewDeliverable(array $data)
    {
        $deliverable = new Deliverable();

        $deliverable->name = $data['name'];
        $deliverable->description = $data['description'];
        $deliverable->due_date = $data['due_date'];
        $deliverable->status = $data['status'];

        $deliverable->save();
    }
} 