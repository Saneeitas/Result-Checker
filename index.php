<?php
    include "connection.php";
    include "header.php";
?>

<!-- body -->

<div class="container">

    <div class="container-fluid my-3">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="border p-3">
                    <form action="search.php" method="post">
                        <div class="form-group">
                            <h4>Search</h4>
                            <input type="text" class="form-control" name="search" required
                                placeholder="Enter registration number" id="">
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">View result</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require "footer.php"; ?>