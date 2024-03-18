<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class RegisterUserTest extends DuskTestCase
{
    /** @test */
    public function check_if_root_site_is_corret(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
    }

    /** @test*/
    public function check_if_login_function_is_working()
    {
        $userTest = new User();
        $userTest->name = 'Usuario de teste';
        $userTest->email = 'teste@gmail.com';
        $userTest->password = bcrypt('123');
        $userTest->save();

        $this->browse(function (Browser $browser) {
            $browser->visit('login')
                ->type('email', 'teste@gmail.com')
                ->type('password', '123')
                ->press('Login')
                ->assertPathIs('/home');
        });

        $userTest->delete();
    }

    /** @test */
    public function check_if_register_function_is_working()
    {
        $this->browse(function (Browser $browser){
            $browser->visit('/register')
                ->type('name', 'Usuario de teste')
                ->type('email', 'test@gmail.com')
                ->type('password', '123')
                ->press('Registrar')
                ->assertPathIs('/login')
                ->assertSee('Usuario criado com sucesso');
        });
        $userTest = User::where('email', 'test@gmail.com')->first();
        $userTest->delete();
    }
}
