<?php include 'inc/header.php'; ?>
<?php require_once './app.php';  ?>
<?php
$id =$request->get('ID');
$product = $product->getone($id);
?>
<div class="container my-5">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">


            <form action ="./handlers/handleEdite.php?ID=<?= $id ?>" method="post" enctype="multipart/form-data" >
                <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name = "name "value="<?php echo $product[0]['NAME'] ; ?> "/>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price:</label>
                    <input type="number" class="form-control" id="price" name="price" value="<?php echo $product[0]['price'];?>">
                </div>

                <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name = "desc" ><?php echo $product[0]['desc'] ; ?></textarea>
                </div>

                <div class="mb-3">
                <label for="formFile" class="form-label">Image:</label>
                <input class="form-control" type="file" id="formFile" name="img" value="<?php echo $product[0]['img'] ; ?>"/>
                </div>

                <div class="col-lg-3">
                        <img src="<?php echo $product[0]['img'] ; ?>" class="card-img-top">
                        </div>
                        
                <center><button on type="submit" class="btn btn-primary" name="submit">Add</button></center>
            </form>
        </div>
    </div>
</div>



<?php include 'inc/footer.php'; ?>