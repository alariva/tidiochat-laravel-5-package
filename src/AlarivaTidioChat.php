<?php

namespace Alariva\Tidiochat;

class AlarivaTidioChat
{
    public static function js($useDefer = true)
    {
        $src = self::src();

        $defer = $useDefer ? ' defer="defer"' : '';

        return "<script src=\"{$src}\"{$defer}></script>";
    }

    public static function src()
    {
        return '//code.tidio.co/'.\Config::get('tidiochat.key').'.js';
    }
}
