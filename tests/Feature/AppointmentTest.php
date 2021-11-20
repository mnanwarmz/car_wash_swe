<?php

namespace Tests\Feature;

use App\Models\Appointment;
use App\Models\AppointmentType;
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
        $this->withoutExceptionHandling();
        $user = User::factory()->create();
        $appointment = Appointment::factory()->make();
        $appointment_type = AppointmentType::factory()->create();
        // Login as User
        $this->actingAs($user);
        // dd($appointment_type->id);

        $this->assertDatabaseMissing('appointments', $appointment->toArray());
        $this->assertDatabaseMissing('appointment_appointment_types', [
            'appointment_id' => $appointment->id,
            'appointment_type_id' => $appointment_type->id,
        ]);
        $response = $this->post('/appointments', [
            'start_at' => $appointment->start_at,
            'end_at' => $appointment->end_at,
            'location_id' => $appointment->location_id,
            'vehicle_id' => $appointment->vehicle_id,
            'user_id' => $user->id,
            'status' => $appointment->status,
            'price' => $appointment->price,
            'appointment_type_ids' => $appointment_type->id
        ]);
        $this->assertDatabaseHas('appointment_appointment_types', [
            'appointment_id' => $appointment->id,
            'appointment_type_id' => $appointment_type->id,
        ]);
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
    public function test_authenticated_user_can_cancel_appointment()
    {
        $this->withoutExceptionHandling();
        $user = User::factory()->create();
        $appointment = Appointment::factory()->for($user)->create(['status' => 2]);
        // Login as User
        $this->actingAs($user);
        $this->assertAuthenticated();
        $this->assertDatabaseHas(
            'appointments',
            [
                'id' => $appointment->id,
                'status' => 2,
                'user_id' => $user->id
            ]
        );
        $this->post('/appointments/' . $appointment->id . '/cancel');
        $this->assertDatabaseMissing(
            'appointments',
            [
                'id' => $appointment->id,
                'status' => 2,
                'user_id' => $user->id
            ]
        );
        $this->assertDatabaseHas(
            'appointments',
            [
                'id' => $appointment->id,
                'status' => 1,
                'user_id' => null
            ]
        );
    }
}
