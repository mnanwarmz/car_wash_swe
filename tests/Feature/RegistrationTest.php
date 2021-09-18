<?php

namespace Tests\Feature;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Fortify\Features;
use Laravel\Jetstream\Jetstream;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
	use RefreshDatabase;

	public function test_new_users_can_register()
	{
		if (!Features::enabled(Features::registration())) {
			return $this->markTestSkipped('Registration support is not enabled.');
		}

		$user = $this->createUser();
		$response = $this->post('/register', [
			'name' => 'Test User',
			'email' => 'test@example.com',
			'password' => 'password',
			'password_confirmation' => 'password',
			'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature(),
		]);

		$this->actingAs();
		$this->assertAuthenticated();
		$response->assertRedirect(RouteServiceProvider::HOME);
	}
}
