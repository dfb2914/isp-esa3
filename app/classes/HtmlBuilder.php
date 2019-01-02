<?php

/**
 * class for creating html elements
 */
 class HtmlBuilder
 {
     /**
      * creates a input form field
      * @param string inputLabel
      * @param string inputClass
      * @param string inputType
      * @param string inputName
      * @param string inputValue
      * @return string
      */
     public static function createFormInput($inputLabel = null, $inputClass = null, $inputType, $inputName, $inputValue = null)
     {
         $resultString = "";
         
         if(isset($inputLabel)) {
             $resultString = "<label>$inputLabel: ";
         }
         $resultString .= "<input class='$inputClass' type='$inputType' name='$inputName' value='$inputValue'>";
         if(isset($inputLabel)) {
             $resultString .= "</label>";
         }
         return $resultString;
     }
     
     /**
      * creates a html p-tag
      * @param string inputLabel
      * @param string inputClass
      * @param string inputValue
      * @return string
      */
      public static function createPTag($inputLabel = null, $inputClass = null, $inputValue)
      {
      $resultString = "";
         
         if(isset($inputLabel)) {
             $resultString = "<label>$inputLabel: ";
         }
         $resultString .= "<p class='$inputClass'>$inputValue</p>";
         if(isset($inputLabel)) {
             $resultString .= "</label>";
         }
         return $resultString; 
      }
     
     /**
      * creates a html h-tag
      * @param int importance 
      * @param string text
      * @return string
      */
     public static function createHTag($importance, $text)
     {
        return "<h$importance>$text</h$importance>";     
     }
 }