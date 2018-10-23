<?php

namespace Tests\Unit\Controllers;

use Tests\TestCase;
use App\Contracts\TaskContract;
use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Mockery;

class TaskControllerTest extends TestCase
{
    public $taskService;

    public function setUp()
    {
        parent::setUp();
        $this->taskService = Mockery::mock(TaskContract::class);
    }

    /** @test */
    public function index_function_grabs_all_dropdown_data_for_creating_tasks()
    {
        $controller = new TaskController($this->taskService);

        $data = [
            [
                1 => "deliverableOne",
                2 => "deliverableTwo"
            ],
            [
                1 => "resourceOne",
                2 => "resourceTwo"
                ]
            ];
            
        $this->taskService
            ->shouldReceive('getAllDeliverablesAndResourcesForTaskCreationDropdown')
            ->andReturn($data);
                    
        $controller->index();
    }

    /** @test */
    public function createTask_takes_a_request_and_creates_a_new_task()
    {
        $controller = new TaskController($this->taskService);

        $request = new Request();

        $request->name = "task_one";
        $request->description = "this is a task";
        $request->deliverable = 1;
        $request->resource = 1;
        $request->expected_start_date = "random date";
        $request->expected_end_date = "another date";

        $this->taskService
            ->shouldReceive('createANewTask');

        $controller->createTask($request);
        
    }
}