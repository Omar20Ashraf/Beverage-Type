<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Beverage;
use Illuminate\Foundation\Testing\DatabaseMigrations;

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
     * @test
     * @return void
     */
    public function user_can_visit_single_beverage_page()
    {
        $response = $this->get('/beverage/' . $this->beverage->id);

        $response->assertSee($this->beverage->name);

        $response->assertStatus(200);
    }

    /**
     * @test
     * @return void
     */
    public function logged_in_user_can_buy_beverage()
    {
        $this->authUser();

        $data = [
            'beverage_id' => $this->beverage->id,
            'price' => $this->beverage->price,
        ];

        $response = $this->post('/beverage/buy', $data);

        $this->assertDatabaseHas('purchases',$data);

        $response->assertStatus(200);
    }
}
