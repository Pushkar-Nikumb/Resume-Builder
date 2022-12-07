<?php
    $name = $_POST['Names'];
    $Class = $_POST['CLass'];


    $servername = "localhost";
    $username = "root";
    $password = "";
    $database_name = "stud_info";

    $conn = mysqli_connect($servername,$username,$password,$database_name);
    if(!$conn)
    {
        echo"FAiled";
    }
    else
    {
        echo "database connected sucessfully";
    }

    
        $sql = "INSERT INTO `sampledb`(`Name`, `Class`) VALUES ('$name','$Class')";
        if(mysqli_query($conn,$sql))
        {
            echo "inserted sucessfully";
        }    
?>