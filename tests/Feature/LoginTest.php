<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Chrome;

class LoginTest extends DuskTestCase
{
    use RefreshDatabase;
    
   /** @test */
    public function a_user_can_log_in()
    {
        $user = factory(User::class)->create([
            'email' => 'admin@test.com',
        ]);

        $this->browse(function ($browser) use ($user) {
            $browser->visit('/login')
                    ->type('email', $user->email)
                    ->type('password', 'secret')
                    ->press('Sign in')
                    ->assertPathIs('/home');
        });
    }
}
