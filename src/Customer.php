<?php

namespace Afriyan\Learning;

class Customer
{
    public function __construct(private string $name)
    {
    }

    public function sayHello(string $name): void
    {
        echo "Hii $this->name, My name is $name i like you mwahhhh:*:*";
    }
}
