<?php

namespace Tests\Feature;

use App\Models\Question;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_can_submit_contact_form()
    {
        $this->withoutExceptionHandling();
        $question = Question::factory()->make();

        $this->assertDatabaseMissing('questions', $question->toArray());
        $response = $this->post('/contact', $question->toArray());
        $this->assertDatabaseHas('questions', $question->toArray());

        $response->assertStatus(200);
    }
}
