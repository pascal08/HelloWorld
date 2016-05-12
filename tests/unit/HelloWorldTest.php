<?php

namespace Acme\HelloWorld;

class HelloWorldTest extends \PHPUnit_Framework_TestCase
{
    public function testNoName()
    {
        $this->assertEquals('Hello, World!', HelloWorld::helloWorld());
    }

    public function testSampleName()
    {
        $this->assertEquals('Hello, Alice!', HelloWorld::helloWorld('Alice'));
    }

    public function testAnotherSampleName()
    {
        $this->assertEquals('Hello, Bob!', HelloWorld::helloWorld('Bob'));
    }
}