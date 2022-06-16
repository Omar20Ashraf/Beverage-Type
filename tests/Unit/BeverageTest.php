<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use App\Models\Beverage;
use App\Exceptions\UserCanBuyFiveBeverageException;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class BeverageTest extends TestCase
{
    use DatabaseMigrations;

    private $beverage;

    public function setUp(): void
    {
        # code...
        parent::setUp();

        $this->beverage = Beverage::factory()->make();
    }


    /**
     * A test beverage has name
     * @test
     * @return void
     */
    public function beverage_has_name()
    {
        $this->assertNotEmpty($this->beverage->name);
    }

    /**
     * A beverage has type
     * @test
     * @return void
     */
    public function beverage_has_type()
    {
        $this->assertNotEmpty($this->beverage->type);
    }


    /**
     * A user can buy 5 beverage.
     * @test
     * @return void
     */
    public function user_can_buy_five_beverage()
    {
        //create user
        $user = User::factory()->create([
            'beverage_num' => 6
        ]);

        //log the user in
        $this->actingAs($user);

        //throw exception
        $this->expectException(UserCanBuyFiveBeverageException::class);


        //buy
        $this->beverage->buy();

    }
}
