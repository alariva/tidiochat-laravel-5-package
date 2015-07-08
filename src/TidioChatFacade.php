<?php

namespace alariva\tidiochat;

use Illuminate\Support\Facades\Facade;

class TidioChatFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'tidiochat';
    }
}
