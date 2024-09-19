<?php include 'inc/header.php'; ?>

<?php require_once './app.php' ?>

<?php 
$products =$product -> getall();
?>


<div class="container my-5">

    <div class="row">
    <?php
        if ($session->hassession($session ->get('success'))) {
            foreach ($session ->get('success') as $succ) {?>
            <div class="alert alert-success"><?= $succ?></div>
            <?php }
            $session ->unset('success');

        }
        
        ?>
        <?php
        if (!empty ($products  )) {

            
        
        
        ?>



    <?php foreach($products as $product ){?>
    <div class="col-lg-4 mb-3">



            <div class="card">
            <img src="images/<?= $product['img'] ?>" class="card-img-top">
            <div class="card-body">
            <h5 class="card-title"><?= $product['NAME'] ?></h5>
            <p class="text-muted"><?= $product['price'] ?></p>
            <p class="card-text"><?= str::limit($product['desc'])?></p>
            <a href="show.php?ID=<?= $product['ID'] ?>" class="btn btn-primary">Show</a>
            <?php
                    if ($session->hassession($session->get("adminId"))) {
                    ?>
            <a href="edit.php?<?= $product['ID'] ?>" class="btn btn-info">Edit</a>
            <a href="handlers/handleDelete.php?ID=<?= $product['ID'] ?>" class="btn btn-danger">Delete</a>
            <?php }?>
            </div>
        </div>
        
    </div>
    <?php 
    
    }} 
    else{?>
        <div class="alert alert-warning ">no products</div>
    <?php }
    ?>
    </div>

</div>



<?php include 'inc/footer.php'; ?>