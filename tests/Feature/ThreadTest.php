<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use App\Thread;

class ThreadTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic feature test ActionIndexOnController.
     *
     * @return void
     */
    public function testActionIndexOnController()
    {
        $user = factory(\App\User::class)->create();
        $this->seed('RepliesTableSeeder');

        $threads = Thread::orderBy('updated_at', 'desc')
            ->paginate();

        $response = $this
        ->actingAs($user)
        ->json('GET', '/threads');

        $response
        ->assertStatus(200)
        ->assertJsonFragment([$threads->toArray()['data']]);
    }
}
