<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_login_route_is_working()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    public function test_register_route_is_working()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }

    public function test_dashboard_route_requires_login()
    {
        $response = $this->get('/dashboard')->assertRedirect('/login');
    }

}
