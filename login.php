<?php include 'inc/header.php';
?>
<?php  require_once 'app.php';
?>


<div class="container my-5">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">

        <?php
        if ($session->hassession($session ->get('errors'))) {
            foreach ($session ->get('errors') as $error) {?>
            <div class="alert alert-danger"><?= $error?></div>
            <?php }
            $session ->unset('errors');

        }
        
        ?>
            <form action="index.php" method="post" >
                <div class="mb-3">
                <label for="NAME" class="form-label">EMAIL:</label>
                <input type="text" class="form-control" id="name" name = "email">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Password:</label>
                    <input type="number" class="form-control" id="price" name="password">
                </div>
                <center><button on type="submit" class="btn btn-primary" name="submit">Add</button></center>
            </form>
        </div>
    </div>
</div>


<?php include 'inc/footer.php'; ?>