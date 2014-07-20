<?php

namespace System;


class Boolean
{

    private $bool;

    public function __construct($bool)
    {
        if (is_bool($bool)) {
            $this->bool = $bool;
        } else {
            throw new \LogicException(sprintf("You variable %s is not a bool", $bool));
        }

    }


    public function __toValue()
    {
        return $this->bool;
    }

} 