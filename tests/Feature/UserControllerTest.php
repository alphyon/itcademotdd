<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('api/users');
        $response->assertStatus(200);
        $response->assertJsonStructure([
            'code',
            'message',
            'data'
        ]);
    }
    public function testExampleException()
    {
        User::truncate();
        $response = $this->get('api/users');
        $response->assertStatus(404);
        $response->assertJsonStructure([
            'code',
            'message',
            'data'
        ]);
    }

    public function testTotal(){
        $this->assertTrue(true);
    }
}
