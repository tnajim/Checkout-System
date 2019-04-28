<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DisplayTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);

        $this->get('/')->assertSee('Checkout System');
        $this->get('/')->assertSee('Apples $ 0.70');
        $this->get('/')->assertSee('Oranges $ 0.35');
        $this->get('/')->assertSee('Scan Apple');
        $this->get('/')->assertSee('Scan Orange');
        $this->get('/')->assertSee('Checkout with New Offers');
    }
}
