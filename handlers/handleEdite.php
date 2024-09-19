<?php

require_once '../app.php';
$id =$request->get('ID');
if($request->hasreq($request->post('submit'))){


    $name =$request->post('NAME');
    $desc =$request->post('desc');
    $price =$request->post('price');
    $img = $request->file('img');
    
    $validate ->rules('NAME',$name,['required','string','max:100']) ;
    $validate ->rules('desc',$desc,['required','string']) ;
    $validate ->rules('price',$price,['required','number']) ;
    $validate ->rules('img',$img['name'],['img']) ;
    
    
    //echo "<pre>";
    //var_dump($validate ->errors);
    //die();

    
    if (! $validate ->errors) {
        $prod =$product->getone('ID');
        if($img ['name']){
            $img=new Img ($img);
            $result= $product->update($name,$desc,$img->new_name,$price,$id);
            if ($result) {
                $img->upload();
                $img ->delete_img($pro['img']);
                $session ->set("success",['PRODUCT UPDATED SUCCESSFULLY']);
                $request->redirect("../index.php");

            } else {
                $session ->set("errors",['errors ']);
                $request->redirect("../edit.php?id=$id");
            }
            
        }else{
            $result= $product->update($name,$desc,$prod[$img],$price,$id);
            if ($result) {
                $session ->set("success",['PRODUCT UPDATED SUCCESSFULLY']);
                $request->redirect("../index.php");

            } else {
                $session ->set("errors",['errors ']);
                $request->redirect("../edit.php?id=$id");
            }
        }

}

else{
    $session->set('errors',$validate ->errors);
    $request->redirect("../edit.php?id=$id");
}}
else{
    $request->redirect("../add.php");
}




?>