<?php
declare(strict_types=1);

namespace App;

class Coffee extends CaffeineBeverage
{

    protected function brew(): void
    {
        echo '<p>Dripping Coffee through filter</p>', PHP_EOL;
    }

    protected function addCondiments(): void
    {
        echo '<p>Adding Sugar and Milk</p>', PHP_EOL;
    }
}