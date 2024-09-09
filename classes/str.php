<?php

class str {

    public static function limit ($str){
        if (strlen($str)>20){
            return substr($str,0,20).".....";

        }
    return $str;
}
}




?>