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
    public function test_unauthenticated_user_cannot_view_list_of_vehicles()
    {
        $response = $this->get('/vehicles');

        $response->assertRedirect('/login');
    }

    public function test_authenticated_user_can_view_list_of_vehicles()
    {
        $user = User::factory()->create();
        $vehicle = Vehicle::factory()->for($user)->create();

        // Login as User
        $this->actingAs($user);

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
        $user = User::factory()->create();
        $this->actingAs($user);

        $this->assertAuthenticated();
        $response = $this->get('/vehicles/create');
        $response->assertStatus(200);
    }
    public function test_authorized_user_delete_vehicle()

    {
    
            $vehicles = Vehicle::findOrFail($vehicleId);
            // do not delete if user_id is not null
            if ($vehicles->user_id == null)
                $vehicles->delete();
            else
                dd('You cannot delete this appointment');
        // $user = User::factory()->create();
        // $this->actingAs($user);

        // $vehicle = Vehicle::factory()->for($user)
        // ->create();
        
        // $this->assertDatabaseHas('vehicles',$vehicle->toArray());
        
        // $response = $this->post('/vehicles/delete');
        // $this->assertDatabaseMissing('vehicles',$vehicle->toArray());


    }

    // public function test_authenticated_user_can_add_vehicle()
    // {
    //     $user = User::factory()->create();
    //     $vehicle = Vehicle::factory()->make();

    //     $this->actingAs($user);

    //     $this->assertAuthenticated();
    //     $this->assertDatabaseMissing('vehicles', $vehicle->toArray());
    //     $this->post('/vehicles', $vehicle->toArray());
    //     $this->assertDatabaseHas('vehicles', $vehicle->toArray());
    // }
}
