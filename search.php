<?php

  require "header.php";
 include "connection.php";
 
 if(isset($_POST["search"])){
     $search = $_POST["search"];
 }else{
     $search = '';
     
 }

 ?>

<div class="container">
    <div class="container-fluid my-3">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="border p-3">
                    <form action="search.php" method="post">
                        <div class="form-group">
                            <h4>Search result for: <?php echo $search; ?></h4>
                            <input type="text" class="form-control" name="search"
                                placeholder="Enter registration number" required id="">
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">View result</button>
                    </form>
                </div>
            </div>
            <!--start-->

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Reg Number</th>
                        <th scope="col">Course Code</th>
                        <th scope="col">Level</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Total</th>
                        <th scope="col">Grade</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                $sql = $sql = "SELECT * FROM resultdetails WHERE RegNumber LIKE '%$search%' ORDER BY id DESC"; 
                $query = mysqli_query($connection,$sql);
                $counter =1;
                       
                while($result = mysqli_fetch_assoc($query)){
                    if(count($result) > 0){
                    ?>
                    <tr class="table-active">
                        <td scope="row"><?php echo $counter; ?></td>
                        <td><?php echo $result["RegNumber"]; ?></td>
                        <td><?php echo $result["CourseCode"]; ?></td>
                        <td><?php echo $result["Level"]; ?></td>
                        <td><?php echo $result["Semester"]; ?></td>
                        <td><?php echo $result["Total"]; ?></td>
                        <td><?php echo $result["Grade"]; ?></td>
                    </tr>
                    <?php
                         $counter++;
                     }  else{echo "not found";}                 
                }     
            ?>
                </tbody>
            </table>


            <!-- end -->
        </div>
    </div>
</div>



<?php require "footer.php";?>