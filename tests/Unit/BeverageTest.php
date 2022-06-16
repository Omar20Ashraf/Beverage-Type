<?php

namespace Tests\Unit;

use App\Models\Beverage;
use Tests\TestCase;
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
     * A basic unit test example.
     * @test
     * @return void
     */
    public function beverage_has_name()
    {
        $this->assertNotEmpty($this->beverage->name);
    }
}
