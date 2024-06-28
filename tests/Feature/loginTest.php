<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class loginTest extends TestCase
{


    public function test_do_login()
    {
        $this->post('/loginCandidate',[
            "email"=>"budi@gmail.com",
            "password"=>"12345678"
        ])
        ->assertSeeText("sukses")
        ->assertSessionHas('email','budi@gmail.com')
        ;
       
    }
    public function test_loginProfile(){

        $response = $this->post('/loginCandidate', [
            'email' => 'budi@gmail.com',
            'password' => '12345678'
        ]);

        // Memastikan redirect ke halaman profil
        $response->assertRedirect('/profile');

        // Melakukan request ke halaman profil
        $profileResponse = $this->get('/profile');

        // Memeriksa apakah halaman profil menampilkan data yang benar
        $profileResponse->assertSeeText("sukses")
                        ->assertSessionHas('email', 'budi@gmail.com')
                        ->assertSeeText($user->candidate->id); 
    }
}
