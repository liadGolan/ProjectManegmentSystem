<?php

namespace Tests\Unit\Controllers;

use Tests\TestCase;
use App\Contracts\ResourceContract;
use App\Http\Controllers\ResourceController;
use Illuminate\Http\Request;
use Mockery;


class ResourceControllerTest extends TestCase
{
    public $resourceService;

    public function setUp()
    {
        parent::setUp();
        $this->resourceService = Mockery::spy(ResourceContract::class);
    }

    /** @test */
    public function index_function_directs_user_correctly()
    {
        $response = $this->call('GET', 'createResource');

        $response->assertStatus(200);
    }

    /** @test */
    public function createTask_creates_task_and_redirects_correctly()
    {
        $controller = new ResourceController($this->resourceService);

        $request = new Request();

        $request->name = "Tim Person";
        $request->description = "Programmer";

        $this->resourceService
            ->shouldReceive('createNewResource');
        
        $controller->createResource($request);
    }
}