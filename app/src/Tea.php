<?php
declare(strict_types=1);

namespace App;

/**
 * Class Tea
 *
 * Represents a specific type of caffeine beverage - Tea.
 * Extends the CaffeineBeverage abstract class and implements the required methods.
 */
class Tea extends CaffeineBeverage
{
    /**
     * Steeps the tea by steeping it in hot water.
     */
    protected function brew(): void
    {
        echo '<p>Steeping the tea</p>', PHP_EOL;
    }

    /**
     * Adds lemon to the tea.
     */
    protected function addCondiments(): void
    {
        echo '<p>Adding Lemon</p>', PHP_EOL;
    }
}