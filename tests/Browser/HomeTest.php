<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Artisan;

class HomeTest extends DuskTestCase
{
    use DatabaseMigrations;
    
    public function testDeliverableSidebarLink()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertUrlIs('http://pms.test/')
                    ->assertVisible('#createDeliverable')
                    ->visit(
                        $browser->attribute('#createDeliverable', 'href')
                    )
                    ->assertPathIs('/createDeliverable');
        });
    }

    public function testTaskSidebarLink()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertUrlIs('http://pms.test/')
                    ->assertVisible('#createTask')
                    ->visit(
                        $browser->attribute('#createTask', 'href')
                    )
                    ->assertPathIs('/createTask');
        });
    }

    public function testResourceSidebarLink()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertUrlIs('http://pms.test/')
                    ->assertVisible('#createResource')
                    ->visit(
                        $browser->attribute('#createResource', 'href')
                    )
                    ->assertPathIs('/createResource');
        });
    }

    public function testActionItemSidebarLink()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertUrlIs('http://pms.test/')
                    ->assertVisible('#createActionItem')
                    ->visit(
                        $browser->attribute('#createActionItem', 'href')
                    )
                    ->assertPathIs('/createActionItem');
        });
    }

    public function testIssueSidebarLink()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertUrlIs('http://pms.test/')
                    ->assertVisible('#createIssue')
                    ->visit(
                        $browser->attribute('#createIssue', 'href')
                    )
                    ->assertPathIs('/createIssue');
        });
    }


}
