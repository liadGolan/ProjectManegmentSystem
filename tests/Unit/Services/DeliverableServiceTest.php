<?php

namespace Tests\Unit\Services;

use Tests\TestCase;
use App\Services\DeliverableService;
use App\Deliverable;
use App\Task;

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
    public function getDataForViewingDeliverable_retreives_data_correctly()
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
}
