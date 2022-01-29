<?php

namespace Reno\Cafe\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Reno\Cafe\Cafe
 */
class Cafe extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'cafe';
    }
}
