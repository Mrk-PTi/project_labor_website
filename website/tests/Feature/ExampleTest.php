<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

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

    public function testBasicTest()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
    }

    public function testBasicTest()
    {
        $response = $this->get('/services');

        $response->assertStatus(200);
    }

    public function testBasicTest()
    {
        $response = $this->get('/posts');

        $response->assertStatus(200);
    }
}
