<?php

namespace Tests;

use App\Tea;
use App\CaffeineBeverage;
use \ReflectionClass;
use \ReflectionMethod;
use PHPUnit\Framework\TestCase;

/**
 * Class TeaTest
 *
 * Test case for the Tea class.
 */
class TeaTest extends TestCase
{
    /**
     * Test that Tea class extends CaffeineBeverage.
     *
     * @return void
     */
    public function testTeaExtendsCaffeineBeverage(): void
    {
        $this->assertInstanceOf(CaffeineBeverage::class, new Tea());
    }

    /**
     * Test that Tea::brew() method is protected.
     *
     * @return void
     */
    public function testBrewMethodIsProtected(): void
    {
        $reflectionClass = new ReflectionClass(Tea::class);
        $reflectionMethod = $reflectionClass->getMethod('brew');
        $this->assertTrue($reflectionMethod->isProtected());
    }

    /**
     * Test that the Tea::brew() method outputs the correct value.
     *
     * @return void
     */
    public function testBrewMethodOutputsCorrectValue(): void
    {
        $tea = new Tea();
        $reflectionMethod = new ReflectionMethod(Tea::class, 'brew');
        $reflectionMethod->setAccessible(true);

        $expectedOutput = '<p>Steeping the tea</p>' . PHP_EOL;
        $this->expectOutputString($expectedOutput);

        $reflectionMethod->invoke($tea);
    }

    /**
     * Test that Tea::addCondiments() method is protected.
     *
     * @return void
     */
    public function testAddCondimentsMethodIsProtected(): void
    {
        $reflectionClass = new ReflectionClass(Tea::class);
        $reflectionMethod = $reflectionClass->getMethod('addCondiments');
        $this->assertTrue($reflectionMethod->isProtected());
    }

    /**
     * Test that the Tea::addCondiments() method outputs the correct value.
     *
     * @return void
     */
    public function testAddCondimentsMethodOutputsCorrectValue(): void
    {
        $tea = new Tea();
        $reflectionMethod = new ReflectionMethod(Tea::class, 'addCondiments');
        $reflectionMethod->setAccessible(true);

        $expectedOutput = '<p>Adding Lemon</p>' . PHP_EOL;
        $this->expectOutputString($expectedOutput);

        $reflectionMethod->invoke($tea);
    }

    /**
     * Test that the Tea::prepare() method follows the template method pattern.
     *
     * @return void
     */
    public function testPrepareFollowsTemplateMethodPattern(): void
    {
        $tea = new Tea();
        $tea->setCustomerWantsCondiments(true);

        $expectedOutput = '<p class="initial">Boiling water</p>' . PHP_EOL .
            '<p>Steeping the tea</p>' . PHP_EOL .
            '<p>Pouring into cup</p>' . PHP_EOL .
            '<p>Adding Lemon</p>' . PHP_EOL;

        $this->expectOutputString($expectedOutput);
        $tea->prepare();
    }
}