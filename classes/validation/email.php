<?php


namespace classes\validation ;
require_once 'validationinterface.php';
class email implements validationinterface{

    public function validate($name, $value){
        if (!filter_var($value,FILTER_VALIDATE_EMAIL))
        {
            return "$name must be email ";
        }
        return "false";
    }

}

?>