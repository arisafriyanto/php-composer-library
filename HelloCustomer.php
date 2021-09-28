<?php

use Afriyan\Learning\Customer;

require_once __DIR__ . "/vendor/autoload.php";

$customer = new Customer("Aris Afriyanto");
$customer->sayHello(name: "Rawless");
