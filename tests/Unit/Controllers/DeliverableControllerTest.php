<?php

namespace Tests\Unit\Controllers;

use Tests\TestCase;
use App\Contracts\DeliverableContract;
use App\Http\Controllers\DeliverableController;
use Illuminate\Http\Request;
use Mockery;


class DeliverableControllerTest extends TestCase
{
    public $deliverableService;

    public function setUp()
    {
        parent::setUp();
        $this->deliverableService = Mockery::spy(DeliverableContract::class);
    }

    /** @test */
    public function index_function_directs_user_correctly()
    {
        $response = $this->call('GET', 'createDeliverable');

        $response->assertStatus(200);
    }

    /** @test */
    public function view_directs_to_the_correct_view_with_the_right_data()
    {
        $controller = new DeliverableController($this->deliverableService);

        $data = [
            'id' => 0,
            'tasks' => [],
            'show' => false,
            'taskId' => null,
            'resourceName' => '',
            'resourceTitle' => '',
            'issues' => [],
        ];

        $this->deliverableService
            ->shouldReceive('getDataForViewingDeliverable')
            ->andReturn($data);

        $controller->view(0);

    }

    /** @test */
    public function viewTask_directs_to_the_correct_view_with_the_right_data()
    {
        $controller = new DeliverableController($this->deliverableService);

        $data = [
            'id' => 0,
            'tasks' => [0],
            'show' => false,
            'taskId' => null,
            'resourceName' => '',
            'resourceTitle' => '',
            'issues' => [],
        ];

        $this->deliverableService
            ->shouldReceive('getDataForViewingTask')
            ->andReturn($data);

        $controller->viewTask(0,0);

    }

    /** @test */
    public function createDeliverable_creates_deliverable_and_redirects_correctly()
    {
        $controller = new DeliverableController($this->deliverableService);

        $request = new Request();

        $request->name = "deliverable_one";
        $request->description = "this is a deliverable";
        $request->due_date = "a random date";
        $request->status = "good";

        $this->deliverableService
            ->shouldReceive('createNewDeliverable');
        
        $controller->createDeliverable($request);
    }
}
