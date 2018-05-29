<?php

use PHPUnit\Framework\Assert as PHPUnit;
use PHPUnit\Framework\TestCase;
use Tokenly\TokenGenerator\TokenGenerator;

/*
* 
*/
class TokenGeneratorTest extends TestCase
{

    public function testGenerateToken() {
        $generator = new TokenGenerator();
        $t1 = $generator->generateToken(10);
        $this->assertEquals(10, strlen($t1));

        $t2 = (new TokenGenerator())->generateToken(60, 'foo');
        $this->assertEquals(60, strlen($t2));
        $this->assertEquals('foo', substr($t2, 0, 3));
    } 

}
