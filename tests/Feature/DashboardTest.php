<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /**
     * 
     * @test
     */
    public function test_cobatestdashboard()
    {
        $this->visit('/dashboard/posts')
            ->see('Title')
            ->dontSee('Rails');
    }
}
