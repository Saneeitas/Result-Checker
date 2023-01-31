<?php
session_start();

//check if user is not logged in
if(!isset($_SESSION["user"])){
    header("location: admin.php");
}

include "connection.php";
require "header.php" ;
require "process.php";
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="form-group">

                <h4 class=" my-2 bg-primary text-white text-center rounded">RESULT UPLOAD</h4>
                <a class="nav-link text-danger text-end" href="logout.php"> Logout</a>

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
            <form action="" method="post">
                <div class="form-group mt-2">
                    <h5><label for="">Registration Number</label></h5>
                    <input type="text" class="form-control" name="regnumber" placeholder="Enter resgistrration number"
                        required id="">
                </div>
                <div class="form-group mt-2">
                    <h5> <label for="">Course Code</label></h5>
                    <input type="text" class="form-control" name="coursecode" placeholder="Enter course code" required>
                </div>
                <div class="form-group mt-2">
                    <h5><label for="">Level</label></h5>
                    <select name="level" class="form-control" id="">
                        <option value="100">100</option>
                        <option value="200">200</option>
                        <option value="300">300</option>
                        <option value="400">400</option>
                    </select>
                </div>
                <div class="form-group mt-2">
                    <h5><label for="">Semester</label></h5>
                    <select name="semester" class="form-control" id="">
                        <option value="FIRST">FIRST</option>
                        <option value="SECOND">SECOND</option>
                    </select>
                </div>
                <div class="form-group mt-2">
                    <h5><label for="">Total Score</label></h5>
                    <input type="text" class="form-control" name="total" placeholder="Enter total score" required>
                </div>
                <div class="form-group mt-2">
                    <h5><label for="">Grade</label></h5>
                    <select name="grade" class="form-control" id="">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                    </select>
                </div>
                <div class="form-group mt-2">
                    <button type="submit" name="upload" class="btn btn-primary">Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require "footer.php"; ?>