<?php

/**
 * Error Handler is part of form field Validation
 */
class ErrorHandler
{
    protected $errors = [];
    
    /**
     * adds error to error array
     * @param array error
     * @return void
     */
    public function addError($error)
    {
        $this->errors[] = $error;
    }
    
    /**
     * returns all errors
     * @return array
     */
    public function all()
    {
        return $this->errors;
    }
    
    /**
     * checks if errors exist
     * @return boolean
     */
    public function hasErrors()
    {
        return count($this->all()) ? true : false;
    }
    
}