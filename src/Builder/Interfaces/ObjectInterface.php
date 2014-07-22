<?php

namespace System\Builder\Interfaces;

interface ObjectInterface
{
    public function Copy($var);

    public static function Instance($object);
} 