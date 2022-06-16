<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Beverage;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BeverageTest extends TestCase
{
    use DatabaseMigrations;

    private $beverage;

    public function setUp(): void
    {
        # code...
        parent::setUp();

        $this->withoutExceptionHandling();

        $this->beverage = Beverage::factory()->create();
    }

    /**
     * A basic feature test example.
     * @test
     * @return void
     */
    public function user_can_visit_beverage_page()
    {

        $response = $this->get('/beverage');

        $response->assertSee($this->beverage->name);

        $response->assertStatus(200);
    }

    /**
     * A basic feature test example.
     * @test
     * @return void
     */
    public function user_can_visit_single_beverage_page()
    {
        $response = $this->get('/beverage/' . $this->beverage->id);

        $response->assertSee($this->beverage->name);

        $response->assertStatus(200);
    }
}
