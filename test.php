<?php
/* test conn
require_once './classes/MySql.php';

$obj =new MySql();
*/
//test product to all
/*
require_once './classes/product.php';

$obj =new product();
$obj ->getall();
print_r($obj ->getall());*/

//test product to one where id =id

require_once './classes/product.php';

$obj =new product();
print_r($obj ->getone(1));


?>
