<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_index()
    {
        $this->get('/registration')
        ->assertStatus(200)->assertSeeText("Yuk buat profilmu sebagai Pelamar!");
    }
}
