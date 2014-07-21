<?php

namespace System\Test;

use System\Integer;

class IntegerTest extends \PHPUnit_Framework_TestCase
{
    public function testCompareIntegerGreaterThanInteger()
    {
        $mainValue = new Integer(16325);
        $zeroValue = 0;
        $zeroValueObject = new Integer(0);
        $negativeValue = -1934;
        $negativeValueObject =  new Integer(-1934);

        $this->assertEquals(1, $mainValue->CompareTo($zeroValue));
        $this->assertEquals(1, $mainValue->CompareTo($negativeValue));
        $this->assertEquals(1, $mainValue->CompareTo($zeroValueObject));
        $this->assertEquals(1, $mainValue->CompareTo($negativeValueObject));
    }

    public function testCompareIntegerEqualInteger()
    {
        $mainValue = new Integer(16325);
        $sameValue = 16325;
        $sameValueObject = new Integer(16325);

        $this->assertEquals(0, $mainValue->CompareTo($sameValue));
        $this->assertEquals(0, $mainValue->CompareTo($sameValueObject));
    }

    public function testCompareIntegerLessThanInteger()
    {
        $mainValue = new Integer(16325);
        $positiveValue = 903624;
        $positiveValueObject = new Integer(903624);

        $this->assertEquals(-1, $mainValue->CompareTo($positiveValue));
        $this->assertEquals(-1, $mainValue->CompareTo($positiveValueObject));
    }
}
 