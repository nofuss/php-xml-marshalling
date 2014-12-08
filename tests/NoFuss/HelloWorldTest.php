<?php
namespace NoFuss;

class HelloWorldTest extends \PHPUnit_Framework_TestCase
{
    const NAME = 'Gracie';

    public function testSayHello()
    {
        $helloWorld = new HelloWorld();
        $result = $helloWorld->sayHello(self::NAME);
        $this->assertEquals('Hello ' . self::NAME, $result);
    }
}
