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
    private $name = 'World';

    public function welcome(): string
    {
        return sprintf('Hello, %s', $this->name);
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

}