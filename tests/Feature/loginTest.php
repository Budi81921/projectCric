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
   
    
}
