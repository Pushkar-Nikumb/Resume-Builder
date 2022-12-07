<?php
$Name = $_POST['txtName'];
$Dept = $_POST['txtDept'];
$Education = $_POST['txtEdu'];
$Skill = $_POST['txtSkills'];

$Servername = "localhost";
$Username = "root";
$Password = "";
$Database_name = "crud_db";

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
$SQL_Query = "INSERT INTO `biodata` (`ID`, `Name`, `Department`, `Education`, `Skills`, `Remarks`) VALUES (NULL, '$Name', '$Dept', '$Education', '$Skill', '');";
if(mysqli_query($Conn,$SQL_Query))
{
    echo "<script>
        alert('New Record Inserted Successfully');
        </script>";
    header('location: index.php');
}
else{
    echo "Error inserting Record!!!".mysqli_error($Conn);

}
?>