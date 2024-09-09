<?php
require_once 'MySql.php';

class product extends MySql{
    public function getall(){
    $query ="SELECT * FROM products";
    $result = $this-> conn->prepare($query);
    $result->execute([]);
    $products=[];
    if(!empty($result)){
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    return [];
}


/*
public function getone($id){
    $query ="SELECT * FROM products where `ID`=$id ";
    $result =mysqli_query($this -> conn ,$query);
    $products=[];
    if (!empty($result) ){
        $products = mysql_fetch_assoc($result);
    }
    return $products;
}*/
public function getone($id){
    $query = "select * from products where ID = ?";
    $result = $this-> conn->prepare($query);
    $result->execute([$id]);
    if(!empty($result)){
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    return [];
}
public function add($name,$desc,$img,$price) {
    $query ="INSERT INTO products (`NAME`,`desc`,`img`,`price`) values ('$name','$desc','$img','$price')";
    $result = $this-> conn->prepare($query);
    $result->execute([$name,$desc,$img,$price]);
    if ($result ){
        return true;
    }
        return false;
}

public function update($name,$desc,$img,$price,$id) {
    $query ="UPDATE products set `ID`='$id',`NAME`='$name',`desc`='$desc',`img`='$img',`price`='$price' where `id`=$id";
    $result = $this-> conn->prepare($query);
    $result->execute([$name,$desc,$img,$price,$id]);
    if ($result ){
        return true;
    }
        return false;
}

public function delete($id) {
    $query ="DELETE FROM  products where `ID`='$id'";
    $result = $this-> conn->prepare($query);
    $result->execute([$id]);
    if ($result ){
        return true;
    }
        return false;
}



}


?>