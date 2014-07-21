<?php


namespace System\Text;


use System\Builder\Interfaces\ObjectInterface;

class Encoding implements ObjectInterface {

    const UTF8  = "UTF-8" ;
    const ASCII = "ASCII" ;
    const UTF32 = "UTF-32";
    const UTF7  = "UTF-7" ;

    private $string;

    public function toUnicode()
    {
        //TODO implement this method
    }

    public function Convert()
    {

    }

    public function GetBytes()
    {
        //TODO implement this method
    }

    public function GetCharCount()
    {
        //TODO implement this method
    }

    public function Equals()
    {
        //TODO implement this method
    }

    public function Copy()
    {
        return static::Instance($this->string);
    }

    public static function Instance($object)
    {
        return new static($object);
    }
}