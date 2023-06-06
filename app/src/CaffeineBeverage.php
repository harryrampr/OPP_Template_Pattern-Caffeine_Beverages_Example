<?php
declare(strict_types=1);

namespace App;

/**
 * The base class for caffeine-based beverages.
 */
abstract class CaffeineBeverage
{
    /** @var bool Indicates whether the customer wants condiments. */
    private bool $customerWantsCondiments = false;

    /**
     * Set whether the customer wants condiments.
     *
     * @param bool $customerWantsCondiments Indicates whether the customer wants condiments.
     */
    public function setCustomerWantsCondiments(bool $customerWantsCondiments): void
    {
        $this->customerWantsCondiments = $customerWantsCondiments;
    }

    /**
     * Prepare the beverage by following a template method pattern.
     * It performs a series of steps in a specific order.
     */
    final public function prepare(): void
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();

        // This is a hook, makes optional
        // during runtime the use of condiments
        if ($this->customerWantsCondiments) {
            $this->addCondiments();
        }
    }

    /**
     * Boil water for the beverage.
     * This is a common step for all caffeine beverages.
     */
    protected function boilWater(): void
    {
        echo "<p class=\"initial\">Boiling water</p>", PHP_EOL;
    }

    /**
     * Brew the beverage.
     * This is an abstract method that needs to be implemented by subclasses.
     */
    abstract protected function brew(): void;

    /**
     * Pour the brewed beverage into a cup.
     * This is a common step for all caffeine beverages.
     */
    protected function pourInCup(): void
    {
        echo '<p>Pouring into cup</p>', PHP_EOL;
    }

    /**
     * Add condiments to the beverage.
     * This is an abstract method that needs to be implemented by subclasses.
     */
    abstract protected function addCondiments(): void;
}