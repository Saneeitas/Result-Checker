<?php
session_start();

      include "connection.php";
      require "header.php" ;
      include "process.php";
?>

<div class="container">
    <div class="form-group">
        <h4 class=" my-2 bg-primary text-white text-center rounded ">ADMIN LOGIN</h4>
        <?php 
        if(isset($error)) {
            ?>
        <div class="alert alert-danger">
            <strong><?php echo $error ?></strong>
        </div>
        <?php
        }elseif (isset($success)) {
            ?>
        <div class="alert alert-success">
            <strong><?php echo $success ?></strong>
        </div>
        <?php
        }
    ?>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="" method="post">
                <div class="form-group mt-2">
                    <input type="text" class="form-control" name="username" placeholder="Enter your username" required
                        id="">
                </div>
                <div class="form-group mt-2">
                    <input type="password" class="form-control" placeholder="Enter your password" required
                        name="password" id="">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" name="login" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require "footer.php"; ?>