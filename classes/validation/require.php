<?php


namespace classes\validation ;
require_once 'validationinterface.php';
class required implements validationinterface{

    public function validate ($name, $value){
        if (empty($value))
        {
            return "$name is Required ";
        }
        return "false";
    }

}

?>