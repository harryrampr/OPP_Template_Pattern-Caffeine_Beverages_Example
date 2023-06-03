<?php
declare(strict_types=1);

require_once __DIR__ . '/../../vendor/autoload.php';


use App\Coffee;
use App\Tea;

$tea = new Tea();
$coffee = new Coffee();

echo '<div>', PHP_EOL;
$tea->setCustomerWantsCondiments(true);
$tea->prepare();

$coffee->setCustomerWantsCondiments(true);
$coffee->prepare();

$tea->setCustomerWantsCondiments(false);
$tea->prepare();

$coffee->setCustomerWantsCondiments(false);
$coffee->prepare();
echo '</div>', PHP_EOL;