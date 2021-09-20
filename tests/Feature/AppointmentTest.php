<?php

namespace Tests\Feature;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AppointmentTest extends TestCase
{
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
        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);


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
        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertDatabaseMissing('appointments', [
            'start_at' => $appointment->start_at,
        ]);
        $this->post('/appointments', $appointment->toArray());
        $this->assertDatabaseHas('appointments', [
            'start_at' => $appointment->start_at,
        ]);
    }
}
