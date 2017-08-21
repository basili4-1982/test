<?php
/**
 * Контроллер обработки Http иключений
 */

namespace controllers;

use inc\Errors;
use inc\View;

class HttpErrors extends Errors
{
    
    public function error404()
    {
        return View::make('error404');
    }
    
    public function error()
    {
    
    }
}