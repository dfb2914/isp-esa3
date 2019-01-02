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
        if(!$validation->fails()
            && $this->isVarSet($data, 'name')
            && $this->isVarSet($data, 'plz') 
            && $this->isVarSet($data, 'ort') 
            && $this->isVarSet($data, 'telefon') ) {
                $view = 'summary';
        } elseif($validation->fails()
            && ($this->isVarSet($data, 'name')
            || $this->isVarSet($data, 'plz') 
            || $this->isVarSet($data, 'ort') 
            || $this->isVarSet($data, 'telefon') ) ) {
                $view = 'billing';
        } elseif(!$validation->fails()
            &&  ($this->isVarSet($data, "dest_1") 
            || $this->isVarSet($data, "dest_2") 
            || $this->isVarSet($data, "dest_3") ) ) {
                $view = 'billing';
        } else {
                $view = 'home';
        }
        
        
        if($validation->fails()) {
            echo '<pre>', print_r($validation->errors()->all()), '</pre>';
        }
        
        
        $this->dispatcher->dispatch($view);
               
    }
    
    private function isVarSet($data, $key)
    {
        if(!empty($data[$key])) {
            return true; 
        }
        return false;
    }
}