<?php

namespace System\Math;

use System\Builder\Object;

class Integer extends Object
{
    CONST LESSTHAN = -1;
    CONST EQUAL = 0;
    CONST GREATERTHAN = 1;

    private $integer;

    public function __construct($integer)
    {
        if ($integer !== (int)$integer) {
            $this->integer = (int)$integer;
        }
        $this->integer = $integer;
    }

    public function CompareTo($value)
    {
        if (is_int($value)) {
            if ($this->integer < $value) {
                return -1;
            }
            if ($this->integer > $value) {
                return 1;
            }

            return 0;
        } else {
            if (!$value) {
                return 1;
            }

            /** @var \System\Integer $value */
            if (__NAMESPACE__ . '\\Integer' === get_class($value)) {
                if ($this->integer < $value->integer) {
                    return -1;
                }
                if ($this->integer > $value->integer) {
                    return 1;
                }

                return 0;
            }

            throw new \InvalidArgumentException('Arg_MustBeInt');
        }
    }

    public function Equals($obj)
    {
        if (is_int($obj)) {
            return $this->integer === $obj;
        } else {
            /** @var \System\Integer $obj */
            if (__NAMESPACE__ . '\\Integer' !== get_class($obj)) {
                return false;
            }

            return $this->integer === $obj->integer;
        }
    }
}