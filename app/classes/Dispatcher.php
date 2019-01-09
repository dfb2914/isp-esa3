<?php

/**
 * Routing to suitable Controller
 */
class Dispatcher
{
    
    /**
     * calls requested view
     * @param string request
     * @return void
     */
    public function dispatch($request, $errors)
    {
        switch($request) {
            case 'home':
                require 'app/views/home.php';
            break;
            case 'address':
                require 'app/views/contact.php';
            break;
            case 'summary':
                require 'app/views/summary.php';
            break;
        }
    }
    
}