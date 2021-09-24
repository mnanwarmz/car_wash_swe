<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VehicleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_unauthenticated_user_cannot_view_list_of_vehicles()
    {
        $response = $this->get('/vehicles');

        $response->assertRedirect('/login');
    }

    public function test_authenticated_user_can_view_list_of_vehicles()
    {
        $user = User::factory()->create();
        $vehicle = Vehicle::factory()->create();

        // Login as User
        $this->actingAs($user);

        $this->assertAuthenticated();
        $response = $this->get('/vehicles')
            ->assertSee($vehicle->start);

        $response->assertStatus(200);
    }

    public function test_unauthenticated_user_cannot_add_vehicle()
    {
        $response = $this->get('/vehicles/create');

        $response->assertRedirect('/login');
    }

    public function test_authorized_user_can_view_add_vehicle_form()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $this->assertAuthenticated();
        $response = $this->get('/vehicles/create');
        $response->assertStatus(200);
    }

    public function test_authenticated_user_can_add_vehicle()
    {
        $user = User::factory()->create();
        $vehicle = Vehicle::factory()->make();

        $this->actingAs($user);

        $this->assertAuthenticated();
        $response = $this->get('/vehicles/create');
        $response->assertStatus(200);

        $this->assertDatabaseMissing('vehicles', $vehicle->toArray());
        $this->post('/vehicles', $vehicle->toArray());
        // $this->assertDatabaseHas('vehicles', $vehicle->toArray());
    }
}
