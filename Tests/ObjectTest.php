<?php

namespace System\Test;

use System\Math\Integer;
use System\String;

class ObjectTest extends \PHPUnit_Framework_TestCase
{
    public function testGetType()
    {
        $n1 = new Integer(12);
        $n2 = new String('foo');

        $this->assertEquals('Integer', $n1->GetType());
        $this->assertEquals('String', $n2->GetType());
    }
}
 