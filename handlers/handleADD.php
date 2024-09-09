<?php

require_once '../app.php';
$id =$request->get('ID');
if($request->hasreq($request->post('submit'))){
    $name =$request->post('NAME');
    $desc =$request->post('desc');
    $price =$request->post('price');
    $name=$request->file('img');
    $img= new img($img) ;
    $result=$product ->add($name,$desc,$img,$price);
    if ($result){
        $img->upload();
        $request->redirect("../index.php");
    }


}
else{
    $request->redirect("../index.php");
}



?>