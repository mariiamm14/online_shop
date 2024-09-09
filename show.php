<?php include 'inc/header.php'; ?>
<?php include './app.php'; ?>
<?php
//$id = $_GET['ID'];
$id =$request ->get('ID');
$product =$product->getone($id) ;

?>
<div class="container my-5">

    <div class="row">


    <div class="col-lg-6">
            <img src="images/<?= $product[0]['img'] ?>"  class="card-img-top">
            </div>
            <div class="col-lg-6">
            <h5 ><?= $product[0]['NAME'] ?></h5>
            <p class="text-muted"><?= $product[0]['price'] ?></p>
            <p><?=$product[0]['desc']?></p>
            <a href="index.php" class="btn btn-primary">Back</a>
            <a href="edit.php?<?= $product[0]['ID'] ?>" class="btn btn-info">Edit</a>
            <a href="" class="btn btn-danger">Delete</a>
        </div>
        
    </div>
</div>



<?php include 'inc/footer.php'; ?>