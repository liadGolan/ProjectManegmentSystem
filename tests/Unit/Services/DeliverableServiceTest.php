<?php

namespace Tests\Unit\Services;

use Tests\TestCase;
use App\Services\DeliverableService;

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
        
    } 
}
