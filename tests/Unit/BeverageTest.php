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
}
