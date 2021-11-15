<?php

namespace Tests\Feature;

use App\Models\Branch;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class BranchTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_branch_manager_can_view_branch_manager_dashboard()
    {
        $user = User::factory()->create();
        $branchRole = Role::create(['name' => 'branch manager']);
        $user->assignRole($branchRole);
        $branch = Branch::factory()->create();

        $this->actingAs($user);
        $response = $this->get("/branch/{$branch->id}/dashboard");
        $response->assertStatus(200);
    }
    public function test_user_cannot_view_branch_manager_dashboard()
    {
        $user = User::factory()->create();
        $branch = Branch::factory()->create();

        $this->actingAs($user);
        $response = $this->get("/branch/{$branch->id}/dashboard");
        $response->assertStatus(403);
    }
    public function test_user_can_apply_to_open_branch()
    {
        $this->withoutExceptionHandling();
        $user = User::factory()->create();
        $branch = Branch::factory()->for($user)->make();

        $this->actingAs($user);

        $this->assertDatabaseMissing('branches', $branch->toArray());
        $response = $this->post("/branches/store", $branch->toArray());
        $this->assertDatabaseHas('branches', $branch->toArray());
    }
}
