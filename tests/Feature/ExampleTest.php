<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testReturnsSuccessfulResponse()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
