<?php

namespace System\Test;

use System\Integer;
use System\String;

class StringTest extends \PHPUnit_Framework_TestCase
{

	public function testInstance()
	{
		$stringValue = "Test";
        $stringCompare = "Test Compare";
        $stringConcact = "Test Contact";
        $stringReplace = "Test Success";
		$string = new String($stringValue);

		$this->assertSame($stringValue, $string->__toString());
        $this->assertTrue($string->Compare(new String($stringValue))->__toValue());
        $this->assertFalse($string->Compare(new String($stringCompare))->__toValue());
        $this->assertSame($stringValue.$stringConcact, $string->Concat(new String($stringConcact))->__toString());
        $this->assertFalse($string->IsNullOrEmpty()->__toValue());
        $this->assertSame($stringReplace, $string->Replace(new String($stringValue.$stringConcact), new String("Test Success") , null)->__toString());

	}
}
