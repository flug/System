<?php

namespace System;


use System\Integer;

class String extends \ArrayObject
{

    private $var;

    public function __construct($var)
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



    public function Replace(String $search, String $replace, Integer $count = null, Boolean $insensibleCase = null)
    {
        if ($count == null)
        {
            $count = new Integer(0);
        }

        if($insensibleCase == null)
        {
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
     * @param String $compareString
     * @return bool
     */
    public function Compare(String $compareString)
    {
        if ($this->var == $compareString->__toString()) {
            return true;
        }
        return false;
    }

    /**
     * @param String $stringContact
     * @return string
     */
    public function Concat(String $stringContact)
    {
        $this->var  = $this->var . $stringContact->__toString();

        return $this;
    }

    public function Contains($string)
    {
        //TODO implement this method
    }

    public function Format()
    {
        // TODO implement this method
    }

    /**
     * @return bool
     */
    public function IsNullOrEmpty()
    {
        if ($this->var != null || $this->var != '') {
            return false;
        }
        return true;

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

    /**
     * @param $var
     * @return static
     */
    public static  function Instance($var)
    {
            return new static($var);
    }

    /**
     * @return String
     */
    public function Copy()
    {
        return static::Instance($this->var);
    }

}
