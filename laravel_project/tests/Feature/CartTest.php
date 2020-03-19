<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CartTest extends TestCase
{
    /** @test */

    function it works()
    {
        //on va récupérer le panier
        $response = $this->get('/cart');

        $response->assertSuccessful()
            ->assertViewHas('productsWithQuantities', function($productsWithQuantities){
            return $productsWithQuantities->isEmpty();
    });
}
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
