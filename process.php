<?php require "connection.php"; 

if(isset($_POST["login"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password' ";
    $query = mysqli_query($connection,$sql);
    $_SESSION["user"] = $query;

    if(mysqli_fetch_assoc($query)){
        header("location: upload.php");
    }else{
        $error = "Incorrect login ID";

    }    
}

if(isset($_POST["upload"])){

    $RegNumber = $_POST["regnumber"];
    $CourseCode = $_POST["coursecode"];
    $Level = $_POST["level"];
    $Semester = $_POST["semester"];
    $Total = $_POST["total"];
    $Grade = $_POST["grade"];

    //check if the result already exist
    $sql_check = "SELECT * FROM resultdetails WHERE RegNumber='$RegNumber' AND CourseCode='$CourseCode' ";
    $query_check = mysqli_query($connection,$sql_check);
    $result = mysqli_fetch_assoc($query_check);
    if($result){
        $error = "Result already exist";
    }else{
        $sql = "INSERT INTO resultdetails(RegNumber,CourseCode,Level,Semester,Total,Grade)
        VALUES('$RegNumber','$CourseCode','$Level','$Semester','$Total','$Grade')";
        $query = mysqli_query($connection,$sql);
        if($query){
            $success = "Result uploaded successfully";
        }else{
            $error = "Unable to upload result";
        }

    }  
}