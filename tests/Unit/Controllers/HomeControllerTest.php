<?php

namespace Tests\Unit\Controllers;

use Tests\TestCase;
use App\Contracts\DeliverableContract;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Mockery;

use Illuminate\Foundation\Testing\DatabaseMigrations;

class HomeControllerTest extends TestCase
{
    use DatabaseMigrations;

    public $deliverableService;

    public function setUp()
    {
        parent::setUp();
        $this->deliverableService = Mockery::spy(DeliverableContract::class);
    }

    /** @test */
    public function index_directs_user_correctly()
    {
        $response = $this->call('GET', '/');
        $response->assertStatus(200);
    }
}

