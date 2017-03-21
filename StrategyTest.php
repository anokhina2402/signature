<?php
require_once "Strategy.php";

class StrategyTest extends PHPUnit_Framework_TestCase
{

    private $strategy = null;

    public function setUp() {
        $this->strategy = new Strategy();
    }

    public function tearDown() {
        unset($this->strategy);
    }

    public function testExecute()
    {
        //testing class Strategy
        $mock = $this->getMock('Strategy');
        $mock->expects($this->any())
            ->method('execute')
            ->will($this->returnValue('hash'));
        $result = $mock->execute(0, 'login', 'secret_word');

        $this->assertEquals('hash', $result);
    }
}
