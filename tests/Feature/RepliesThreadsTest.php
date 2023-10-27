<?php

namespace Tests\Feature;

use App\Models\Thread;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RepliesThreadsTest extends TestCase
{
    use RefreshDatabase;
    protected $seed = true;
    protected $thread;
    protected $replay;
    public function setUp(): void
    {
        parent::setUp();
        $this->seed();
        $this->thread = Thread::first();
        $this->replay = $this->thread->replies()->first();


    }
    public function test_a_user_can_browse_all_threads(): void
    {
        $response = $this->get('/threads');

        $response->assertSee($this->thread->title);

    }

    public function test_a_user_can_brows_single_thread(): void
    {
        $response = $this->get('/threads/' . $this->thread->id);

        $response->assertSee($this->thread->title);

    }

    public function test_a_user_can_see_specific_replies(): void
    {

        $response = $this->get('/threads/' . $this->thread->id);

        $response->assertSee($this->replay->body);
    }
}
