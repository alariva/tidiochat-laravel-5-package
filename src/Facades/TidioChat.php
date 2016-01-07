<?php

namespace Alariva\Tidiochat\Facades;

use Illuminate\Support\Facades\Facade;

class TidioChat extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'tidiochat';
    }
}
