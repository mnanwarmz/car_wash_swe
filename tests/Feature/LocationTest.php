<?php

namespace Tests\Feature;

use App\Models\Location;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LocationTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->user =  User::factory()->create();
        $this->location = Location::factory()->for($this->user)->create();
    }
    public function test_authenticated_can_delete_a_location()
    {
        $this->withoutExceptionHandling();
        $this->actingAs($this->user);
        $this->assertAuthenticated();

        $this->assertDatabaseHas('locations', $this->location->toArray());
        $this->delete('/locations/' . $this->location->id)
            ->assertRedirect('/locations');
        $this->assertDatabaseMissing('locations', $this->location->toArray());
    }
    public function test_authenticated_user_can_view_list_of_locations()
    {
        // Login as User
        $this->actingAs($this->user);

        $this->assertAuthenticated();
        $response = $this->get('/locations')
            ->assertSee($this->location->address);

        $response->assertStatus(200);
    }
}
