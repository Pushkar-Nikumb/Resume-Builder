<?php
$Name = $_POST['txtName'];
$Dept = $_POST['txtDept'];
$Education = $_POST['txtEdu'];
$Skill = $_POST['txtSkills'];
$rowNo = $_POST['txtRowNo'];

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

$SQL_Update = "UPDATE `biodata` SET `Name` = '$Name', `Department` = '$Dept', `Education` = '$Education', `Skills` = '$Skill' WHERE `biodata`.ID = $rowNo;";
$Response = mysqli_query($Conn,$SQL_Update);

if(mysqli_query($Conn,$SQL_Update))
{
    echo "<script>
        alert('Record Updated Successfully');
        </script>";
    header('location: index.php');
}
else{
    echo "Error inserting Record!!!".mysqli_error($Conn);

}
?>