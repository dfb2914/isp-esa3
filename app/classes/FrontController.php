<?php

/**
 * Front Controller class
 * 
 * responsible for handling all requests to other parts of the application
 */
class FrontController
{
    private $dispatcher;
    
    public function __construct()
    {
        $this->dispatcher = new Dispatcher();
    }
    
    /**
     * decides on which dispatcher-request is made
     * @param array data
     * @param array validation
     * @return void
     */
    public function check($data, $validation)
    {   
        $view = 'home';
        $hasErrors = $validation->fails();
        $errors = $validation->errors()->all();
        
        if(isset($_POST['kontakt']) && !$hasErrors) {
            $view = 'summary';
        }
        
        if(isset($_POST['kontakt']) && $hasErrors) {
            $view = 'address';
        }
        
        if(isset($_POST['ziele']) && !$hasErrors) {
            $view = 'address';
        }
        
        
        $this->dispatcher->dispatch($view, $errors);
               
    }
    
}