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
        $key = \Config::get('tidiochat.key');

        return '//code.tidio.co/'.$key.'.js';
    }
}
