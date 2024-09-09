<?php
require_once '../app.php';
$id =$request->get('ID');
if($request->hasreq($request->post('submit'))){

}
else{
    $request->redirect("../edit.php?ID=$id");
}
?>