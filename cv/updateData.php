<?php
$Name = $_POST['txtName'];
$FATHER_NAME = $_POST['txtFather'];
$GENDER = $_POST['txtGender'];
$EMAIL = $_POST['txtEmail'];
$UNIVERSITY = $_POST['txtUniversity'];
$COUNTRY = $_POST['txtCountry'];
$PERSONAL_ADDRESS = $_POST['txtAddress'];
$CONTACT = $_POST['txtContact'];
$JOB_DESCRIPTION = $_POST['txtJob'];
$LANGUAGE = $_POST['txtLanguage'];
$SKILL_SET = $_POST['txtSkill'];

$rowNo = $_POST['txtRowNo'];

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

$SQL_Update = "UPDATE `biodata` SET `Name`='$Name',`Father_Name`='$FATHER_NAME',`Gender`='$GENDER',`EMAIL`='$EMAIL',`UNIVERSITY`='$UNIVERSITY',`Country`='$COUNTRY',`Personal_Address`='$PERSONAL_ADDRESS',`Contact_No`='$CONTACT',`Job_Description`='$JOB_DESCRIPTION',`LANGUAGE`='$LANGUAGE',`SKILL_SET`='$SKILL_SET' WHERE `biodata`.ID = $rowNo;";
$Response = mysqli_query($Conn,$SQL_Update);

if(mysqli_query($Conn,$SQL_Update))
{
    echo "<script>
        alert('Record Updated Successfully');
        </script>";
    header('location: read.php');
}
else{
    echo "Error inserting Record!!!".mysqli_error($Conn);

}
?>