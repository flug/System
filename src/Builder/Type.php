<?php

namespace System\Builder;

class Type extends \ArrayObject
{
    private static function GetTypeLsb()
    {
        return get_called_class();
    }

    public function GetType()
    {
        $namespace = static::GetTypeLsb();

        return ltrim(strrchr($namespace, '\\'), '\\');
    }
}