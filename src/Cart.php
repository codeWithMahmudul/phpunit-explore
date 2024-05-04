<?php

namespace App;

class Cart
{
    private float $price;
    public static float $tax = 1.2;

    public static function setTax($tax)
    {
        self::$tax = $tax;
    }

    public function getNetPrice(): float
    {
        return $this->price * self::$tax;
    }
}
