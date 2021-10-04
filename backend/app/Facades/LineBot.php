<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class LineBot extends Facade
{
    /**
     * revieve Accessor Name
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'line-bot';
    }
}
