<?php

namespace Tests\Unit\Services;

use Tests\TestCase;
use App\Services\ResourceService;
use App\Resource;

use Illuminate\Foundation\Testing\DatabaseMigrations;

class ResourceServiceTest extends TestCase
{
    use DatabaseMigrations;

    public $service;

    public function setUp()
    {
        parent::setUp();
        $this->service = new ResourceService();
    }

    /** @test */
    public function createNewResource_creates_a_new_resource()
    {
        $db_data = [];
        $this->assertDatabaseMissing('resources', $db_data);
        for($i = 1; $i <= 50; $i++) {
            $data = [
                'name' => 'Tim',
                'title' => 'Developer',
            ];
            $this->service->createNewResource($data);

            $db_data = [
                'id' => $i,
                'name' => 'Tim',
                'title' => 'Developer',
            ];
    
            $this->assertDatabaseHas('resources', $db_data);
        }
    }
}