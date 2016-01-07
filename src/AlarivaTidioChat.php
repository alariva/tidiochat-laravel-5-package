<?php

namespace Alariva\Tidiochat;

class AlarivaTidioChat
{
    public static function js()
    {
        $src = self::src();

        return "<script src=\"$src\"></script>";
    }

    public static function src()
    {
        return '//code.tidio.co/'.\Config::get('tidiochat.key').'.js';
    }
}
