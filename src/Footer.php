<?php

namespace Wdelfuego\Nova4\CustomizableFooter;

use Laravel\Nova\Nova;

class Footer
{
    public static function set(string $content) : void
    {
        Nova::footer(function ($request) use ($content) {
            return $content;
        });
    }
}
