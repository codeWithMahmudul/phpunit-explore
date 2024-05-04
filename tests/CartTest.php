<?php

namespace App\Tests;

use App\Cart;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    protected $cart;

    protected function setUp(): void
    {
        $this->cart = new Cart();
    }

    protected function tearDown(): void
    {
        Cart::setTax(1.2);
    }

    public function testCartTaxValueCanBeChangedStatically()
    {
        // setup
        $this->cart->price = 10;

        //  Do something
        Cart::setTax(1.5);
        $netPrice = $this->cart->getNetPrice();
        // Make assertion
        $this->assertEquals(15, $netPrice);
    }

    public function testCalculatedNetPrice()
    {
        // setup
        $this->cart->price = 10;
        // Do something
        $netPrice = $this->cart->getNetPrice();
        // Make assertion
        $this->assertEquals(12, $netPrice);
    }
}
