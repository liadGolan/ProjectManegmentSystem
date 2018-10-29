<?php

namespace Tests\Unit\Services;

use Tests\TestCase;
use App\Services\DeliverableService;
use App\Deliverable;
use App\Task;
use App\Resource;
use Carbon\Carbon;

use Illuminate\Foundation\Testing\DatabaseMigrations;

class DeliverableServiceTest extends TestCase
{
    use DatabaseMigrations;

    public $service;

    public function setUp()
    {
        parent::setUp();
        $this->service = new DeliverableService();
    }

    /** @test */
    public function getDataForViewingDeliverable_retreives_data_correctly_when_tasks_exist()
    {
        $deliverable = factory(Deliverable::class)->make([
            'id' => 1,
        ])->save();
        
        $taskOne = factory(Task::class)->make([
            'id' => 1,
            'deliverable_id' => 1,
        ])->save();

        $taskTwo = factory(Task::class)->make([
            'id' => 2,
            'deliverable_id' => 1,
        ])->save();

        $data = $this->service->getDataForViewingDeliverable(1);

        $this->assertEquals($data['id'], 1);
        $this->assertEquals($data['show'], false);
        $this->assertEquals($data['taskId'], null);
        $this->assertEquals($data['tasks'][0]->id, 1);
        $this->assertEquals($data['tasks'][1]->id, 2);
    }
    
    /** @test */
    public function getDataForViewingDeliverable_retreives_data_correctly_when_no_tasks_exist()
    {
        $deliverable = factory(Deliverable::class)->make([
            'id' => 1,
        ])->save();

        $data = $this->service->getDataForViewingDeliverable(1);

        $this->assertEquals($data['id'], 1);
        $this->assertEquals($data['show'], false);
        $this->assertEquals($data['taskId'], null);
        $this->assertEquals($data['tasks']->toArray(), []);
    }

    /** @test */
    public function getDataForViewingTask_returns_data_correctly()
    {
        $deliverable = factory(Deliverable::class)->make([
            'id' => 1,
        ])->save();
        
        $taskOne = factory(Task::class)->make([
            'id' => 1,
            'deliverable_id' => 1,
            'resource_id' => 1
        ])->save();

        $taskTwo = factory(Task::class)->make([
            'id' => 2,
            'deliverable_id' => 1,
        ])->save();

        $resource = factory(Resource::class)->make([
            'id' => 1,
            'name' => 'Sun Ra',
            'title' => 'Space Jazz'
        ])->save();

        $data = $this->service->getDataForViewingTask(1, 1);

        $this->assertEquals($data['id'], 1);
        $this->assertEquals($data['show'], true);
        $this->assertEquals($data['taskId'], 1);
        $this->assertEquals($data['resourceName'], 'Sun Ra');
        $this->assertEquals($data['resourceTitle'], 'Space Jazz');
    }

    /** @test */
    public function createNewDeliverable_properly_creates_a_new_deliverable()
    {
        $now = Carbon::now();
        $data = [
            'name' => 'Night of the Purple Moon',
            'description' => 'Space Jazz',
            'due_date' => $now,
            'status' => 'it good'
        ];
        $this->service->createNewDeliverable($data);

        $this->assertDatabaseHas('deliverables', $data);

    }

    /** @test */
    public function getAllDeliverables_gets_all_deliverables()
    {
        for($i = 1; $i <= 50; $i += 1) {
            $this->generateDeliverable($i);
            $this->assertEquals(count($this->service->getAllDeliverables()),$i);
            for($j = 1; $j <= $i; $j += 1){
                $this->assertEquals($this->service->getAllDeliverables()->toArray()[$j - 1]['id'], $j);
            }
        }
    }

    private function generateDeliverable($id) {
        $deliverable = factory(Deliverable::class)->make([
            'id' => $id,
        ])->save();
    }
}
