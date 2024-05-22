<?php

namespace Kiukishenkaec\Supervisor\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kiukishenkaec\Supervisor\Supervisor
 */
class Supervisor extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Kiukishenkaec\Supervisor\Supervisor::class;
    }
}
