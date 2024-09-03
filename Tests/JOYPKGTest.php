<?php

namespace Tests;

use JOYPKG\JOYPKG;
use PHPUnit\Framework\TestCase;

class JOYPKGTest extends TestCase
{
    public function testSum()
    {
        $this->assertEquals(49, JOYPKG::getSimpleSum(12, 13, 24));

        $this->assertEquals(0, JOYPKG::getSimpleSum());
    }
}