<?php

namespace Wdelfuego\Nova4\CustomizableFooter;

class Footer
{
    private static $content = '';
    
    public static function set(string $content) : void
    {
        self::$content = $content;
    }
    
    public static function get() : string
    {
        return self::$content;
    }
}
