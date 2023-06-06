<?php

namespace Tests;

use App\Coffee;
use App\CaffeineBeverage;
use \ReflectionMethod;
use PHPUnit\Framework\TestCase;

/**
 * Class CoffeeTest
 *
 * Test case for the Coffee class.
 */
class CoffeeTest extends TestCase
{
    /**
     * Test that Coffee class extends CaffeineBeverage.
     *
     * @return void
     */
    public function testCoffeeExtendsCaffeineBeverage(): void
    {
        $this->assertInstanceOf(CaffeineBeverage::class, new Coffee());
    }

    /**
     * Test that brew() method is implemented.
     *
     * @return void
     */
    public function testBrewMethodIsImplemented(): void
    {
        $coffee = new Coffee();
        $reflectionMethod = new ReflectionMethod(Coffee::class, 'brew');

        $this->assertTrue($reflectionMethod->isProtected());
        $this->assertNotEquals('CaffeineBeverage', $reflectionMethod->getDeclaringClass()->getName());
        $this->assertSame($reflectionMethod->getDeclaringClass()->getName(), Coffee::class);
        $this->assertSame('void', $reflectionMethod->getReturnType()->getName());

        $reflectionMethod->setAccessible(true);
        $reflectionMethod->invoke($coffee);

        $this->expectOutputString('<p>Dripping Coffee through filter</p>' . PHP_EOL);
    }

    /**
     * Test that addCondiments() method is implemented.
     *
     * @return void
     */
    public function testAddCondimentsMethodIsImplemented(): void
    {
        $coffee = new Coffee();
        $reflectionMethod = new ReflectionMethod(Coffee::class, 'addCondiments');

        $this->assertTrue($reflectionMethod->isProtected());
        $this->assertNotEquals('CaffeineBeverage', $reflectionMethod->getDeclaringClass()->getName());
        $this->assertSame($reflectionMethod->getDeclaringClass()->getName(), Coffee::class);
        $this->assertSame('void', $reflectionMethod->getReturnType()->getName());

        $reflectionMethod->setAccessible(true);
        $reflectionMethod->invoke($coffee);

        $this->expectOutputString('<p>Adding Sugar and Milk</p>' . PHP_EOL);
    }
}