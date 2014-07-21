<?php

namespace System;

class Integer
{
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
}
