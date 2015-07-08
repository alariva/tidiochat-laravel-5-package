<?php

namespace alariva\tidiochat;

class TidioChat
{
    public static function js()
    {
        $string = '<script src="//code.tidio.co/'.\Config::get('TidioChat.key').'.js"></script>';
        return $string;
    }
}
