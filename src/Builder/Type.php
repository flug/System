<?php

namespace System;


class Type
{
    private static function GetTypeLsb()
    {
        return get_called_class();
    }

    public function GetType()
    {
        $namespace = static::GetTypeLsb();
        return $namespace;
    }
}