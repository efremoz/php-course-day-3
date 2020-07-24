<?php

/**
 * Created by PhpStorm.
 * User: denisefremov
 * Date: 24.07.2020
 * Time: 17:14
 */

namespace Demo;

class HelloWorldService
{
    public function welcome(): void
    {
        echo 'Hello World' . PHP_EOL;
    }
}