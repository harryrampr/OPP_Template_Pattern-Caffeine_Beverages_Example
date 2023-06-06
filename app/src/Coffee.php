<?php
declare(strict_types=1);

namespace App;

/**
 * Class Coffee
 *
 * Represents a specific type of caffeine beverage - Coffee.
 * Extends the CaffeineBeverage abstract class and implements the required methods.
 */
class Coffee extends CaffeineBeverage
{
    /**
     * Brews the coffee by dripping it through a filter.
     */
    protected function brew(): void
    {
        echo '<p>Dripping Coffee through filter</p>', PHP_EOL;
    }

    /**
     * Adds sugar and milk to the coffee.
     */
    protected function addCondiments(): void
    {
        echo '<p>Adding Sugar and Milk</p>', PHP_EOL;
    }
}