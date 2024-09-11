<?php


namespace classes\validation ;
require_once 'validationinterface.php';
class str implements validationinterface{

    public function validate($name, $value){
        if (is_numeric($value))
        {
            return "$name must be string ";
        }
        return "false";
    }

}

?>