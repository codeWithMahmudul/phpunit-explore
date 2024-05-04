<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

class FirstTest extends TestCase
{
    public function testAdd()
    {
        $this->assertSame(20, 20);
    }


    /** @dataprovider dataProviderForProduct*/
    public function testProductFunction()
    {
        require "./src/productFunction.php";
        $result = product(5, 4);

        $this->assertEquals(20, $result);
        $this->assertNotEquals(10, $result);
    }
}
