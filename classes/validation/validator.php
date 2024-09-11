<?php
    


    namespace classes\validation ;
    require_once 'email.php';
    require_once 'img.php';
    require_once 'max.php';
    require_once 'number.php';
    require_once 'str.php';
    require_once 'require.php';


    class validator{
        
        public $errors=[];
        public function makevalidation ($name ,$value ,$obj){
            return $obj ->validate($name,$value);

        }

        public function rules($name ,$value ,$rules){
            foreach ($rules as $rule){
                if ($rule =="email"){
                    $error=$this ->makevalidation($name ,$value , new email);
                }
                elseif ($rule =="img"){
                    $error=$this ->makevalidation($name ,$value , new Img);
                }
                elseif ($rule =="max:100"){
                    $error=$this ->makevalidation($name ,$value , new max);
                }
                elseif ($rule =="number"){
                    $error=$this ->makevalidation($name ,$value , new number);
                }
                elseif ($rule =="string"){
                    $error=$this ->makevalidation($name ,$value , new str);
                }
                elseif ($rule =="required"){
                    $error=$this ->makevalidation($name ,$value , new required);
                }
                else{
                    $error=false;
                }
                if ($error!= false) {
                $this->errors[]=$error;
                }

            }
        }

    }






?>