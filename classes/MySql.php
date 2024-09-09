<?php
/*
class MySql {
    private $host ="localhost",$userName= "root",$password="root",$db_name ="online_shop";
    
    protected $conn;

    public function __construct(){
        $this ->conn =mysqli_connect($this->host ,$this ->userName ,$this -> password ,$this ->db_name);
        }
        

}
*/
class MySql{
    private $servername = 'localhost', $password = 'root' , $username = 'root' , $dbname = 'online_shop';
    protected $conn ;
    public function __construct(){
        try {
        $this-> conn = new PDO("mysql:host=$this->servername;dbname=online_shop",$this->username, $this->password);
        } catch (PDOEXCEPTION $e) {
            echo "Connection failed : ".$e->getMessage();
    }
    }   
}
?>