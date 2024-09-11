<?php


namespace classes\validation ;
require_once 'validationinterface.php';
class max implements validationinterface{

    public function validate($name, $value){
        if (strlen($value) >100)
        {
            return "$name must be less than 100 chars ";
        }
        return "false";
    }

}

?>