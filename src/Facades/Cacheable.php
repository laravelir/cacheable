<?php

namespace Laravelir\Cacheable\Facades;

use Illuminate\Support\Facades\Facade;

class Cacheable extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'cacheable';
    }
}
