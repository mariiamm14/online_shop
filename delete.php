<?php 
session_start();
include 'handlers/handleDelete.php';

$result = $product->delete($request->get('ID'));
if($result == 0){
    header("Location: notfound.php");  
}
header("Location: ../index.php");  
?>