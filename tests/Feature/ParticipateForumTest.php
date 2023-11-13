<?php

namespace Tests\Feature;

use App\Models\Thread;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ParticipateForumTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    protected $thread;
    protected $replay;
    public function setUp(): void
    {
        parent::setUp();
        $this->seed();
        $this->thread = Thread::first();
        $this->replay = $this->thread->replies()->first();
    }

    public function test_a_auth_user_can_replay(): void
    {
        $this->post('/threads/'. $this->thread->id .'/replies/' , $this->replay->toArray());

        $this->get('/threads/' . $this->thread->id)->assertSee($this->replay->body);

    }
}
