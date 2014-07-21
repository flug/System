<?php

namespace System;


class Boolean
{

    private $bool;

    public function __construct($bool)
    {
        if ($bool === true || $bool === false) {
            $this->bool = $bool;
        } else {
            throw new \LogicException(sprintf("Your variable %s is not a bool", $bool));
        }

    }


    public function __toValue()
    {
        return $this->bool;
    }

} 
