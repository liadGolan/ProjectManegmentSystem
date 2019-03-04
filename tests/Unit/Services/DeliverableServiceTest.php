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
        for($i = 1; $i < 50; $i++) {
            $deliverable = factory(Deliverable::class)->make([
                'id' => $i,
            ])->save();
            
            $taskOne = factory(Task::class)->make([
                'id' => $i * 61,
                'deliverable_id' => $i,
            ])->save();
    
            $taskTwo = factory(Task::class)->make([
                'id' => $i * 71,
                'deliverable_id' => $i,
            ])->save();
    
            $data = $this->service->getDataForViewingDeliverable($i);
    
            $this->assertEquals($data['id'], $i);
            $this->assertEquals($data['show'], false);
            $this->assertEquals($data['taskId'], null);
            $this->assertEquals($data['tasks'][0]->id, $i * 61);
            $this->assertEquals($data['tasks'][1]->id, $i * 71);
        }
        
    }
    
    /** @test */
    public function getDataForViewingDeliverable_retreives_data_correctly_when_no_tasks_exist()
    {
        for($i = 1; $i <= 50; $i++) {
            $deliverable = factory(Deliverable::class)->make([
                'id' => $i,
            ])->save();
    
            $data = $this->service->getDataForViewingDeliverable($i);
    
            $this->assertEquals($data['id'], $i);
            $this->assertEquals($data['show'], false);
            $this->assertEquals($data['taskId'], null);
            $this->assertEquals($data['tasks']->toArray(), []);
        }
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
        $db_data = [];
        $this->assertDatabaseMissing('deliverables', $db_data);
        for($i = 1; $i <= 50; $i++) {
            $data = [
                'name' => 'Night of the Purple Moon',
                'description' => 'Space Jazz',
                'due_date' => $now,
                'status' => 'it good'
            ];
            $this->service->createNewDeliverable($data);

            $db_data = [
                'id' => $i,
                'name' => 'Night of the Purple Moon',
                'description' => 'Space Jazz',
                'due_date' => $now,
                'status' => 'it good'
            ];
    
            $this->assertDatabaseHas('deliverables', $db_data);
        }
        

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
