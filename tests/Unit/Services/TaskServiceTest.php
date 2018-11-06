<?php

namespace Tests\Unit\Services;

use Tests\TestCase;
use App\Services\TaskService;
use App\Deliverable;
use App\Task;
use App\Resource;
use Carbon\Carbon;

use Illuminate\Foundation\Testing\DatabaseMigrations;

class TaskServiceTest extends TestCase
{
    use DatabaseMigrations;

    protected $service;

    public function setUp()
    {
        parent::setUp();
        $this->service = new TaskService();
    }

    /** @test */
    public function getAllDeliverablesAndResourcesForTaskCreationDropdown_grabs_all_needed_data_and_passes_it_correctly()
    {
        $deliverableOne = factory(Deliverable::class)->make([
            'id' => 1,
            'name' => 'one'
        ])->save();

        $deliverableTwo = factory(Deliverable::class)->make([
            'id' => 2,
            'name' => 'two'
        ])->save();

        $resourceOne = factory(Resource::class)->make([
            'id' => 1,
            'name' => 'Sun Ra',
            'title' => 'Space Jazz'
        ])->save();

        $resourceTwo = factory(Resource::class)->make([
            'id' => 2,
            'name' => 'Throbbing Gristle',
            'title' => 'Industrial Rock'
        ])->save();

        $data = [ 
            [
                1 => 'one', 
                2 => 'two'
            ],
            [
                1 => 'Sun Ra',
                2 => 'Throbbing Gristle'
            ]
        ];

        $this->assertEquals($data, $this->service->getAllDeliverablesAndResourcesForTaskCreationDropdown());
    }

     /** @test */
     public function getAllDeliverablesAndResourcesForTaskCreationDropdown_returns_empty_array_if_nothing_exists()
     {
         $this->assertEquals([[],[]], $this->service->getAllDeliverablesAndResourcesForTaskCreationDropdown());
     }

    /** @test */
    public function createANewTask_creates_a_new_task()
    {

        $start = "2018-5-20";
        $end = "2018-5-27";
        $db_data = [];
        $this->assertDatabaseMissing('tasks', $db_data);
        for($i = 1; $i <= 50; $i++) {
            $data = [
                'name' => 'task one',
                'description' => 'a task',
                'deliverable'  => 1,
                'resource' => 1,
                'expected_start_date' => $start,
                'expected_end_date' => $end,
                'expected_duration_in_days'=>7
            ];
            $db_data = [
                'id' => $i,
                'name' => 'task one',
                'description' => 'a task',
                'deliverable_id'  => 1,
                'resource_id' => 1,
                'expected_start_date' => $start,
                'expected_end_date' => $end,
                'expected_duration_in_days'=>7
            ];

            $this->service->createANewTask($data);
            $this->assertDatabaseHas('tasks', $db_data);
        }
        
    }
}