<?php

require_once '../app.php';

if($request->hasreq($request->post('submit'))){


    $name =$request->post('NAME');
    $desc =$request->post('desc');
    $price =$request->post('price');
    $img = $request->file('img');
    
    $validate ->rules('NAME',$name,['required','string','max:100']) ;
    $validate ->rules('desc',$desc,['required','string']) ;
    $validate ->rules('price',$price,['required','number']) ;
    $validate ->rules('img',$img['name'],['required','img']) ;
    
    
    //echo "<pre>";
    //var_dump($validate ->errors);
    //die();

    
    if (!$validate ->errors) {
        $img = new Img ($img);
        $result =$product ->add($name,$desc,$price,$img->new_name);
    if ($result) {
        $img->upload();
        $session->set('success',['product added successfully ']);
        $request->redirect("../index.php");
    }
    else{
        $session->set('failed',[' errors  ']);
        $request->redirect("../add.php");
    }
    
}
else{
    $session->set('name',$name);
    $session->set('desc',$desc);
    $session->set('price',$price);
    $session->set('errors',$validate->errors);
    $request->redirect("../add.php");
}}
else{
    $request->redirect("../add.php");
}




?>