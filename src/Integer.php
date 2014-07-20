<?php

namespace System;

use System\String;

class Integer extends String {

    private $integer ;


    public function __construct($integer){
        if($integer !== (int) $integer)
        {
            $this->integer = (int) $integer;
        }
        $this->integer = $integer;
    }

    public function __toValue()
    {
        return (int)$this->integer;
    }
}
