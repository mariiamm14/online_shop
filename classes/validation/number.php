<?php


namespace classes\validation ;
require_once 'validationinterface.php';
class number implements validationinterface{

    public function validate($name, $value){
        if (!empty($value) && !is_numeric($value))
        {
            return "$name must be number  ";
        }
        return "false";
    }

}

?>