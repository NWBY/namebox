<?php

namespace NWBY\Namebox\Facades;

use Illuminate\Support\Facades\Facade;

class Namebox extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'namebox';
    }
}
