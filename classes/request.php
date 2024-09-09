<?php
class request{
    //get
public function  get($key){
        return ((isset($_GET[$key]))) ? $_GET[$key]: false;
        
}
//post 
public function  post($key){
    return ((isset($_POST[$key]))) ? $_POST[$key]: false;
    
}
//file
public function  file($key){
    return ((isset($_FILES[$key]))) ? $_FILES[$key]: false;
    
}
//HAS REQUEST 
public function hasreq($key){
    return ((isset($key)))? true :false ;
}
//redirect

public function redirect($path){
    header("location :".$path);

}
}



?>