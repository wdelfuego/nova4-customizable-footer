<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use Wdelfuego\Nova4\CustomizableFooter\Footer;

Route::get('/footer-content', function (Request $request) {
    return (new Response)->setContent(Footer::get());
});
