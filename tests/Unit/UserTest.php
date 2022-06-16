<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class UserTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic unit test example.
     * @test
     * @return void
     */
    public function user_has_full_name()
    {
        $user = User::create([
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => 'password'
        ]);

        $this->assertEquals('user',$user->full_name);
    }
}
