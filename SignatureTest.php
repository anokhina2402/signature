<?php
require_once "includes/Signature.php";
require_once "includes/Hash1.php";
require_once "includes/Hash2.php";

class SignatureTest extends PHPUnit_Framework_TestCase
{


    public function testDoSignature()
    {
        //testing class Hash1
        $mock = $this->getMock('Hash1');
        $mock->expects($this->once())
            ->method('doHash')
            ->will($this->returnValue('hash1'));
        $signature = new Signature($mock);
        $result = $signature->doSignature('login', 'secret_word');

        $this->assertEquals('login|hash1', $result);

        //testing class Hash2
        $mock = $this->getMock('Hash2');
        $mock->expects($this->once())
            ->method('doHash')
            ->will($this->returnValue('hash2'));
        $signature = new Signature($mock);
        $result = $signature->doSignature('login', 'secret_word');

        $this->assertEquals('login|hash2', $result);

    }
}
