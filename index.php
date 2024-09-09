<?php include 'inc/header.php'; ?>

<?php require_once './app.php' ?>

<?php 
$products =$product -> getall();
?>


<div class="container my-5">

    <div class="row">
        



    <?php foreach($products as $product ){?>
    <div class="col-lg-4 mb-3">



            <div class="card">
            <img src="images/<?= $product['img'] ?>" class="card-img-top">
            <div class="card-body">
            <h5 class="card-title"><?= $product['NAME'] ?></h5>
            <p class="text-muted"><?= $product['price'] ?></p>
            <p class="card-text"><?= str::limit($product['desc'])?></p>
            <a href="show.php?ID=<?= $product['ID'] ?>" class="btn btn-primary">Show</a>

            <a href="edit.php?<?= $product['ID'] ?>" class="btn btn-info">Edit</a>
            <a href="" class="btn btn-danger">Delete</a>

            </div>
        </div>
        
    </div>
    <?php 
    }?>
    </div>

</div>



<?php include 'inc/footer.php'; ?>