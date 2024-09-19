<?php 

require_once 'MySql.php';
class admin extends MySql {
    public function  login ($email,$password)
    {
        $query="SELECT * FROM admin WHERE `email`='$email' ";
        $result=mysqli_query($this->conn,$query);

        if ( mysqli_num_rows($result)==1) {
            $admin =mysqli_fetch_assoc($result);
            if (password_verify($password,$admin['password'])){
                return $admin;
            }
        }else{
            return false;
        }
        return false;


    }
}



?>