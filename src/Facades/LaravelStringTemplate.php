<?php

namespace Rpungello\LaravelStringTemplate\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rpungello\LaravelStringTemplate\LaravelStringTemplate
 */
class LaravelStringTemplate extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-string-template';
    }
}
