<?php

/**
 * Validator for form field entries
 */
class Validator
{
    protected $errorHandler;
    protected $rules = ['required', 'minlength', 'plz', 'nospecialchars', 'telefon'];
    
    public $messages = [
        'required' => 'Das :field Feld muss angegben werden',
        'minlength' => 'Das :field Feld muss ein Mindeslänge von :condition haben',
        'plz' => 'Das :field Feld muss eine gültige PLZ enthalten',
        'nospecialchars' => 'Das :field Feld darf keine Sonderzeichen enthalten',
        'telefon' => 'Das :field Feld muss eine gültige Telefonnummer enthalten'
    ];
    
    public function __construct(ErrorHandler $errorHandler)
    {
        $this->errorHandler = $errorHandler;
    }
    /**
     * validates a form field
     * @param array item
     * @param array rules
     * @return object
     */
    
    public function check($items, $rules)
    {
        foreach($items as $item => $value) 
        {
            if(in_array($item, array_keys($rules)))
            {
                  $this->validate([
                    'field' => $item,
                    'value' => $value,
                    'rules' => $rules[$item]
                ]);
            }
        }
        return $this;
    }
    
    public function fails()
    {
        return $this->errorHandler->hasErrors();
    }
    
    public function errors()
    {
        return $this->errorHandler;
    }
    
    protected function validate($item)
    {
        $field = $item['field'];
        
        foreach($item['rules'] as $rule => $condition)
        {
            if(in_array($rule, $this->rules))
            {
                if(!call_user_func_array([$this, $rule], [$field, $item['value'], $condition]))
                {
                    $this->errorHandler->addError(
                        str_replace([':field', ':condition'], [$field, $condition], $this->messages[$rule]),
                        $field
                    );
                }
            }
        }
    }
    
    /**
     * check if required form field is set
     * @return boolean
     */
    protected function required($fiel, $value, $condition)
    {
        return !empty(trim($value));
    }
    
    /**
     * check if form field input has minimum length
     * @return boolean
     */
    protected function minlength($field, $value, $condition)
    {
        return mb_strlen($value) >= $condition;
    }
    
    /**
     * check if form field consists of exactly five digits
     * @return boolean
     */
    protected function plz($field, $value, $condition)
    {
        return preg_match_all('/^\d{5}$/', $value);
    }
    
    /**
     * check if form field input has any special characters
     * @return boolean
     */
    protected function nospecialchars($field, $value, $condition)
    {
        return (preg_match_all('/[^\w\s]+/', $value) ? false : true);
    }
    
    /**
     * check if form field input is a valid telefon number
     * @return boolean
     */
    protected function telefon($field, $value, $condition)
    {
        return (preg_match_all('/\d{3,5}[\/\-\s]\d{3,10}/', $value) ? true : false);
    }
}