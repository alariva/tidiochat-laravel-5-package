<?php

namespace alariva\tidiochat;

class TidioChat
{
    public static function js()
    {
        $src = $this->src();
        return "<script src=\"$src\"></script>";
    }

    public static function src()
    {
        return '//code.tidio.co/'.\Config::get('TidioChat.key').'.js';
    }
}
