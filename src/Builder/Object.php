<?php

namespace System\Builder;

use System\Builder\Interfaces\ObjectInterface;

class Object extends Type implements ObjectInterface
{
    /**
     * @return String
     */
    public function Copy($var)
    {
        return static::Instance($var);
    }

    /**
     * @param $var
     * @return static
     */
    public static function Instance($var)
    {
        return new static($var);
    }
}