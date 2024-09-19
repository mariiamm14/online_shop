<?
require_once '../app.php';
$id =$request->get('ID');
$prod =$product->getone('ID');
$result= $product->delete('ID');
if($result){
    Img::delete_img($prod['img']);
    $session ->set("success",['PRODUCT UPDATED SUCCESSFULLY']);
    $request->redirect("../index.php");

}
else{
    $session ->set("errors",['PRODUCT errors']);
    $request->redirect("../index.php");
}
?>