<?php

namespace Tests;

use App\CaffeineBeverage;
use App\Coffee;
use PHPUnit\Framework\TestCase;


/**
 * Class CaffeineBeverageTest
 *
 * Test case for the CaffeineBeverage class.
 */
class CaffeineBeverageTest extends TestCase
{
    /**
     * Test that CaffeineBeverage class is abstract.
     *
     * @return void
     */
    public function testCaffeineBeverageIsAbstract(): void
    {
        $reflectionClass = new \ReflectionClass(CaffeineBeverage::class);

        // Assert that the CaffeineBeverage class is abstract
        $this->assertTrue($reflectionClass->isAbstract());
    }

    /**
     * Test that the customerWantsCondiments property is private.
     *
     * @return void
     */
    public function testCustomerWantsCondimentsIsPrivate(): void
    {
        $reflectionClass = new \ReflectionClass(CaffeineBeverage::class);
        $reflectionProperty = $reflectionClass->getProperty('customerWantsCondiments');

        // Assert that customerWantsCondiments property is private
        $this->assertTrue($reflectionProperty->isPrivate());
    }

    /**
     * Test that the customerWantsCondiments property is a boolean and its default value is false.
     *
     * @return void
     */
    public function testCustomerWantsCondimentsDefaultValueIsFalse(): void
    {
        $reflectionClass = new \ReflectionClass(CaffeineBeverage::class);
        $reflectionProperty = $reflectionClass->getProperty('customerWantsCondiments');
        $reflectionProperty->setAccessible(true);

        $beverage = $this->getMockBuilder(CaffeineBeverage::class)
            ->disableOriginalConstructor()
            ->getMock();

        // Assert that customerWantsCondiments property is a boolean
        $this->assertIsBool($reflectionProperty->getValue($beverage));

        // Assert that customerWantsCondiments property has a default value of false
        $this->assertFalse($reflectionProperty->getValue($beverage));
    }

    /**
     * Test that the setCustomerWantsCondiments method sets the customerWantsCondiments property correctly.
     *
     * @return void
     */
    public function testSetCustomerWantsCondiments(): void
    {
        $beverage = $this->getMockBuilder(CaffeineBeverage::class)
            ->getMockForAbstractClass();

        // Set customerWantsCondiments to true using the setCustomerWantsCondiments method
        $beverage->setCustomerWantsCondiments(true);

        // Use reflection to get the customerWantsCondiments property value
        $reflectionClass = new \ReflectionClass(CaffeineBeverage::class);
        $reflectionProperty = $reflectionClass->getProperty('customerWantsCondiments');
        $reflectionProperty->setAccessible(true);
        $propertyValue = $reflectionProperty->getValue($beverage);

        // Assert that customerWantsCondiments property is true
        $this->assertTrue($propertyValue);
    }

    /**
     * Test that prepare() method follows the template method pattern.
     *
     * @return void
     */
    public function testPrepareFollowsTemplateMethodPattern(): void
    {
        // Create a mock CaffeineBeverage object
        $beverage = $this->getMockForAbstractClass(Coffee::class);

        // Set the customerWantsCondiments to true
        $beverage->setCustomerWantsCondiments(true);

        // Assert that the prepare() method follows the template method pattern
        $this->expectOutputString(
            '<p class="initial">Boiling water</p>' . PHP_EOL .
            '<p>Dripping Coffee through filter</p>' . PHP_EOL .
            '<p>Pouring into cup</p>' . PHP_EOL .
            '<p>Adding Sugar and Milk</p>' . PHP_EOL);
        $beverage->prepare();
    }

    /**
     * Test that brew() method is abstract.
     *
     * @return void
     */
    public function testBrewIsAbstract(): void
    {
        $reflectionMethod = new \ReflectionMethod(CaffeineBeverage::class, 'brew');

        // Assert that the brew() method is abstract
        $this->assertTrue($reflectionMethod->isAbstract());
    }

    /**
     * Test that addCondiments() method is abstract.
     *
     * @return void
     */
    public function testAddCondimentsIsAbstract(): void
    {
        $reflectionMethod = new \ReflectionMethod(CaffeineBeverage::class, 'addCondiments');

        // Assert that the addCondiments() method is abstract
        $this->assertTrue($reflectionMethod->isAbstract());
    }
}