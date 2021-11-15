<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Role;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PermissionTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_only_admin_can_view_admin_dashboard()
    {
        $admin = Role::create(['name' => 'admin']);
        $user = User::factory()->create();
        $user->assignRole($admin);
        $this->actingAs($user)
            ->get('/admin/dashboard')
            ->assertStatus(200);
    }

    public function test_non_admin_cannot_view_admin_dashboard()
    {
        $user = User::factory()->create();
        $this->actingAs($user)
            ->get('/admin/dashboard')
            ->assertStatus(403);
    }
}
