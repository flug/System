<?php

namespace System\Test;

use System\Math\Integer;

class IntegerTest extends \PHPUnit_Framework_TestCase
{
    public function testCompareIntegerGreaterThanInteger()
    {
        $mainValue = new Integer(16325);
        $zeroValue = 0;
        $zeroValueObject = new Integer(0);
        $negativeValue = -1934;
        $negativeValueObject =  new Integer(-1934);

        $this->assertEquals(Integer::GREATERTHAN, $mainValue->CompareTo($zeroValue));
        $this->assertEquals(Integer::GREATERTHAN, $mainValue->CompareTo($negativeValue));
        $this->assertEquals(Integer::GREATERTHAN, $mainValue->CompareTo($zeroValueObject));
        $this->assertEquals(Integer::GREATERTHAN, $mainValue->CompareTo($negativeValueObject));
    }

    public function testCompareIntegerEqualInteger()
    {
        $mainValue = new Integer(16325);
        $sameValue = 16325;
        $sameValueObject = new Integer(16325);

        $this->assertEquals(Integer::EQUAL, $mainValue->CompareTo($sameValue));
        $this->assertEquals(Integer::EQUAL, $mainValue->CompareTo($sameValueObject));
    }

    public function testCompareIntegerLessThanInteger()
    {
        $mainValue = new Integer(16325);
        $positiveValue = 903624;
        $positiveValueObject = new Integer(903624);

        $this->assertEquals(Integer::LESSTHAN, $mainValue->CompareTo($positiveValue));
        $this->assertEquals(Integer::LESSTHAN, $mainValue->CompareTo($positiveValueObject));
    }

    public function testCompareIntegerEqualsInteger()
    {
        $mainValue = new Integer(16325);
        $sameValue = 16325;
        $sameValueObject = new Integer(16325);

        $this->assertTrue($mainValue->Equals($sameValue));
        $this->assertTrue($mainValue->Equals($sameValueObject));
    }

    public function testCompareIntegerNotEqualsInteger()
    {
        $mainValue = new Integer(16325);
        $sameValue = 0;
        $sameValueObject = new Integer(0);

        $this->assertNotTrue($mainValue->Equals($sameValue));
        $this->assertNotTrue($mainValue->Equals($sameValueObject));
    }
}
 