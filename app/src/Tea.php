<?php
declare(strict_types=1);

namespace App;

class Tea extends CaffeineBeverage
{

    protected function brew(): void
    {
        echo '<p>Steeping the tea</p>', PHP_EOL;
    }

    protected function addCondiments(): void
    {
        echo '<p>Adding Lemon</p>', PHP_EOL;
    }
}