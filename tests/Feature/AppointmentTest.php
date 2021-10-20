<?php

namespace Tests\Feature;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AppointmentTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_unauthenticated_user_cannot_view_list_of_appointments()
    {
        $response = $this->get('/appointments');

        $response->assertRedirect('/login');
    }
    public function test_authenticated_user_can_view_list_of_appointments()
    {
        $user = User::factory()->create();
        $appointment = Appointment::factory()->create();

        // Login as User
        $this->actingAs($user);


        $this->assertAuthenticated();
        $response = $this->get('/appointments')
            ->assertSee($appointment->start);

        $response->assertStatus(200);
    }
    public function test_authenticated_user_can_schedule_an_appointment()
    {
        $user = User::factory()->create();
        $appointment = Appointment::factory()->make();
        // Login as User
        $this->actingAs($user);

        $this->assertDatabaseMissing('appointments', $appointment->toArray());
        $this->post('/appointments', $appointment->toArray());
        $this->assertDatabaseHas('appointments', $appointment->toArray());
    }
    public function test_authenticated_user_can_choose_an_appointment()
    {
        $user = User::factory()->create();
        $appointment = Appointment::factory()->create();
        // Login as User
        $this->actingAs($user);
        $this->assertAuthenticated();
        $this->post('/appointments/' . $appointment->id);
        $this->assertDatabaseHas('appointments', [
            'user_id' => $user->id,
        ]);
    }

    public function test_authenticated_cannot_delete_booked_appointment()
    {
        $user = User::factory()->create();
        $appointment = Appointment::factory()->for($user)->create(['status' => 2]);
        // Login as User
        $this->actingAs($user);
        $this->assertAuthenticated();
        $this->assertDatabaseHas('appointments', $appointment->toArray());
        $this->delete('/appointments/' . $appointment->id);
        $this->assertDatabaseHas('appointments', $appointment->toArray());
    }
    public function test_authenticated_can_delete_an_appointment()
    {
        $user = User::factory()->create();
        $appointment = Appointment::factory()->create(['status' => 2]);
        // Login as User
        $this->actingAs($user);
        $this->assertAuthenticated();
        $this->assertDatabaseHas('appointments', $appointment->toArray());
        $this->delete('/appointments/' . $appointment->id);
        $this->assertDatabaseMissing('appointments', $appointment->toArray());
    }
}
