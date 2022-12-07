<?php
$rowNo = $_GET['recno'];

$Servername = "localhost";
$Username = "root";
$Password = "";
$Database_name = "resume_db";

//connect to DATABASE MySql Server
$Conn = mysqli_connect($Servername,$Username,$Password,$Database_name);
if(!$Conn)
{
    die("Connection to database Failed : ").mysqli_connect_error();
}
else
{
    echo "DAtabase Establised Successfully!!!";
}

$SQL_Delete = "DELETE FROM `biodata` WHERE `biodata`.`ID` = $rowNo";
$Response = mysqli_query($Conn,$SQL_Delete);

if(mysqli_query($Conn,$SQL_Delete))
{

    echo "<script>
        alert('Record Deleted Successfully');
        </script>";
    header('location: read.php');
}
else{
    echo "Error Deleting Record!!!".mysqli_error($Conn);

}
?>