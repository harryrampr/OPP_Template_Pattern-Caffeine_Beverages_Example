<?php
declare(strict_types=1);

namespace App;

abstract class CaffeineBeverage
{

    private bool $customerWantsCondiments = false;

    public function setCustomerWantsCondiments(bool $customerWantsCondiments): void
    {
        $this->customerWantsCondiments = $customerWantsCondiments;
    }

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

    protected function boilWater(): void
    {
        echo "</div>\n<div class=\"recipe\">\n<p class=\"initial\">Boiling water</p>", PHP_EOL;
    }

    abstract protected function brew(): void;

    protected function pourInCup(): void
    {
        echo '<p>Pouring into cup</p>', PHP_EOL;
    }

    abstract protected function addCondiments(): void;
}