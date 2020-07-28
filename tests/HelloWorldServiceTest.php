<?php

/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 29.07.20
 * Time: 0:20
 */

namespace Demo\Tests;

use SebastianBergmann\CodeCoverage\TestCase;

class HelloWorldServiceTest extends TestCase
{
    public function testWelcome()
    {
        $service = new HelloWorldService();
        $result = $service->welcome();

        $this->assertEquals('Hello, World', $result);
    }
}