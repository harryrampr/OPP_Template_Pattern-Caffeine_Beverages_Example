<?php
declare(strict_types=1);

require_once __DIR__ . '/../../vendor/autoload.php';


use App\Coffee;
use App\Tea;

/**
 * Create instances of Tea and Coffee classes and prepare beverages with or without condiments.
 */

// Create a new instance of Tea
$tea = new Tea();

// Create a new instance of Coffee
$coffee = new Coffee();

// Prepare tea with condiments
$tea->setCustomerWantsCondiments(true);
echo '<div class="recipe">' . PHP_EOL;
$tea->prepare();

// Prepare coffee with condiments
$coffee->setCustomerWantsCondiments(true);
echo "</div>\n<div class=\"recipe\">" . PHP_EOL;
$coffee->prepare();

// Prepare tea without condiments
$tea->setCustomerWantsCondiments(false);
echo "</div>\n<div class=\"recipe\">" . PHP_EOL;
$tea->prepare();

// Prepare coffee without condiments
$coffee->setCustomerWantsCondiments(false);
echo "</div>\n<div class=\"recipe\">" . PHP_EOL;
$coffee->prepare();
echo '</div>', PHP_EOL;