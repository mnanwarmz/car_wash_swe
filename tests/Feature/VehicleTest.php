<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VehicleTest extends TestCase
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
    }
    public function test_unauthenticated_user_cannot_view_list_of_vehicles()
    {
        $response = $this->get('/vehicles');

        $response->assertRedirect('/login');
    }

    public function test_authenticated_user_can_view_list_of_vehicles()
    {
        $vehicle = Vehicle::factory()->for($this->user)->create();

        // Login as User
        $this->actingAs($this->user);

        $this->assertAuthenticated();
        $response = $this->get('/vehicles')
            ->assertSee($vehicle->plate_no);

        $response->assertStatus(200);
    }

    public function test_unauthenticated_user_cannot_add_vehicle()
    {
        $response = $this->get('/vehicles/create');

        $response->assertRedirect('/login');
    }

    public function test_authorized_user_can_view_add_vehicle_form()
    {
        $this->actingAs($this->user);

        $this->assertAuthenticated();
        $response = $this->get('/vehicles/create');
        $response->assertStatus(200);
    }

    public function test_authenticated_user_can_add_vehicle()
    {

        $this->actingAs($this->user);

        $vehicle = Vehicle::factory()->make(['user_id' => $this->user->id]);
        $this->assertAuthenticated();
        $this->assertDatabaseMissing('vehicles', $vehicle->toArray());
        $this->post('/vehicles', $vehicle->toArray());
        $this->assertDatabaseHas('vehicles', $vehicle->toArray());
    }

    public function test_unauthenticated_user_cannot_edit_vehicle()
    {
        $vehicle = Vehicle::factory()->for(User::factory())->create();

        $response = $this->get('/vehicles/' . $vehicle->id . '/edit');

        $response->assertRedirect('/login');
    }

    public function test_authenticated_user_can_edit_vehicle()
    {
        $this->withoutExceptionHandling();
        $vehicle = Vehicle::factory()->for($this->user)->create();
        $vehicle2 = Vehicle::factory()->for($this->user)->make();

        $this->actingAs($this->user);

        $this->assertAuthenticated();
        $this->post('/vehicles/' . $vehicle->id . '/update', $vehicle2->toArray());

        $this->assertDatabaseHas('vehicles', $vehicle2->toArray());
    }
}
