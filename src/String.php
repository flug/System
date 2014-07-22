<?php

namespace System;

use System\Builder\Object;
use System\Math\Integer;

class String extends Object
{
    private $var;

    const LTR = 0;

    const RTL = 1;

    public function __construct($var = null)
    {
        $this->var = $var;
    }

    /**
     * @return string|null
     */
    public function __toString()
    {
        return $this->var;
    }

    /**
     * @param \System\String $search
     * @param \System\String $replace
     * @param \System\Integer $count
     * @param \System\Boolean $insensibleCase
     * @return $this
     */
    public function Replace(String $search, String $replace, Integer $count = null, Boolean $insensibleCase = null)
    {
        if ($count == null) {
            $count = new Integer(0);
        }

        if ($insensibleCase == null) {
            $insensibleCase = new Boolean(false);
        }

        if ($insensibleCase->__toValue()) {
            $this->var = str_ireplace($search->__toString(), $replace->__toString(), $this->var, $count->__toValue());

        } else {
            $this->var = str_replace($search->__toString(), $replace->__toString(), $this->var, $count->__toValue());
        }

        return $this;
    }

    /**
     * @param \System\String $compareString
     * @return \System\Boolean
     */
    public function Compare(String $compareString)
    {
        if ($this->var == $compareString->__toString()) {
            return new Boolean(true);
        }

        return new Boolean(false);
    }

    /**
     * @param \System\String $stringContact
     * @return $this
     */
    public function Concat(String $stringContact)
    {
        $this->var = $this->var . $stringContact->__toString();

        return $this;
    }

    public function Contains(String $string)
    {
        //TODO implement this method
    }

    public function Format()
    {
        // TODO implement this method
    }

    /**
     * @return Boolean
     */
    public function IsNullOrEmpty()
    {
        if ($this->var != null || $this->var != '') {
            return new Boolean(false);
        }
        return new Boolean(true);

    }

    public function SubString(Integer $int)
    {
        // TODO implement this method
    }

    public function ToLower()
    {
        // TODO implement this method
    }

    public function ToUpper()
    {
        // TODO implement this method
    }

    public function Trim()
    {
        // TODO implement this method
    }

    public function TrimEnd()
    {
        // TODO implement this method
    }

    public function TrimStart()
    {
        // TODO implement this method
    }

    public function Pad()
    {
        //TODO implement this method
    }

    /**
     * @param $var
     * @return $this
     */
    public function __invoke($var)
    {
        $this->var = $var;

        return $this;
    }
}