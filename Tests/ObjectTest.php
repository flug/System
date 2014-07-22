<?php

namespace System\Test;

use System\Integer;

class ObjectTest extends \PHPUnit_Framework_TestCase
{
    public function testGetType()
    {
        $n1 = new Integer(12);

        $this->assertEquals('Integer', $n1->GetType());
    }
}
 