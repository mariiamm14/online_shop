<?php


namespace classes\validation ;
require_once 'validationinterface.php';
class Img implements validationinterface{

    public function validate($name, $value){
        $ext =pathinfo($value,PATHINFO_EXTENSION);
        $extension=["png ","jpg","jpeg","gif"];
        if (!empty($value) && !in_array($ext,$extension) ) 
        {
            return "$name not valid ";
        }
        return "false";
    }

}

?>