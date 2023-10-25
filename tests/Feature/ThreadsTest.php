<?php

namespace Tests\Feature;

use App\Models\Thread;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ThreadsTest extends TestCase
{
    use RefreshDatabase;
    protected $seed = true;

    public function test_a_user_can_browse_all_threads(): void
    {

        $thread = Thread::factory()->create();


        $response = $this->get('/threads');

        $response->assertSee($thread->title);




    }

    public function test_a_user_can_brows_single_thread(): void
    {
        $thread = Thread::factory()->create();

        $response = $this->get('/threads/' . $thread->id);

        $response->assertSee($thread->title);

    }
}
