<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Stamp;

class StampControllerTest extends TestCase
{
    use RefreshDatabase;

    #[\PHPUnit\Framework\Attributes\Test]
    public function user_can_create_stamp_when_logged_in()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->post('/stamps', [
            'title' => 'Test Title',
            'story' => 'Test Story',
            'tag' => 'testing',
        ]);

        $response->assertStatus(200);
        $this->assertDatabaseHas('stamps', [
            'title' => 'Test Title',
            'story' => 'Test Story',
            'tag' => 'testing',
            'user_id' => $user->id,
        ]);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function guest_can_create_stamp_as_anonymous()
    {
        $response = $this->post('/stamps', [
            'title' => 'Anonymous Title',
            'story' => 'Anonymous Story',
            'tag' => 'anon',
        ]);

        $response->assertStatus(200);
        $this->assertDatabaseHas('stamps', [
            'title' => 'Anonymous Title',
            'user_id' => null,
        ]);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function user_can_toggle_love_on_stamp()
    {
        $user = User::factory()->create();
        $stamp = Stamp::factory()->create();

        $this->actingAs($user);

        // Like
        $response = $this->post("/stamps/{$stamp->id}/love");
        $response->assertStatus(200);
        $this->assertDatabaseHas('loves', [
            'user_id' => $user->id,
            'stamp_id' => $stamp->id,
        ]);

        // Unlike
        $response = $this->post("/stamps/{$stamp->id}/love");
        $response->assertStatus(200);
        $this->assertDatabaseMissing('loves', [
            'user_id' => $user->id,
            'stamp_id' => $stamp->id,
        ]);
    }
}
