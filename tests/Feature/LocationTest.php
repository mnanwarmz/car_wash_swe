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
        $this->actingAs($this->user);

        $this->assertAuthenticated();
        $response = $this->get('/locations')
            ->assertSee($this->location->address);

        $response->assertStatus(200);
    }
    public function test_authenticated_user_can_view_add_location_page()
    {
        $this->actingAs($this->user);

        $this->assertAuthenticated();
        $response = $this->get('/locations/create');
        $response->assertStatus(200);
    }
    public function test_unauthenticated_user_cannot_view_add_location_page()
    {
        $response = $this->get('/locations/create');
        $response->assertRedirect('/login');
    }
    public function test_unauthenticated_user_cannot_view_list_of_locations_page()
    {
        $response = $this->get('/locations');
        $response->assertRedirect('/login');
    }
    public function test_authenticated_user_can_add_location()
    {
        $this->actingAs($this->user);
        $location = Location::factory()->make();

        $this->assertAuthenticated();
        $this->assertDatabaseMissing('locations', $location->toArray());
        $this->post('/locations', $location->toArray());
        $this->assertDatabaseHas('locations', $location->toArray());
    }
    public function test_unauthenticated_user_cannot_add_location()
    {
        $location = Location::factory()->make();

        $this->assertDatabaseMissing('locations', $location->toArray());
        $this->post('/locations', $location->toArray())
            ->assertRedirect('/login');
        $this->assertDatabaseMissing('locations', $location->toArray());
    }
}
