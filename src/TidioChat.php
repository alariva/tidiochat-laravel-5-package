<?php
/**
 * TidioChatWidget class
 */

namespace alariva\tidiochat;

/**
 * Creates a TidioChat Widget
 *
 * @package TidioChat
 */
class TidioChat
{
    /**
     * Renders the widget inclusion
     *
     * @return string
     */
    public static function render()
    {
        $string = '<script src="//code.tidio.co/'.\Config::get('TidioChat.key').'.js"></script>';

        return $string;
    }    
}
