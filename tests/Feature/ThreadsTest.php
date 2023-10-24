<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ThreadsTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function a_user_can_browse_threads(): void
    {
        $response = $this->get('/threads');

        $response->assertStatus(200);
    }
}
