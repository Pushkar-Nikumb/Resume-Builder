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
$SQL_Query = "INSERT INTO `biodata`(`ID`, `Name`, `Father_Name`, `Gender`, `EMAIL`, `UNIVERSITY`, `Country`, `Personal_Address`, `Contact_No`, `Job_Description`, `LANGUAGE`, `SKILL_SET`) VALUES (NULL, '$Name','$FATHER_NAME','$GENDER','$EMAIL','$UNIVERSITY','$COUNTRY','$PERSONAL_ADDRESS','$CONTACT','$JOB_DESCRIPTION','$LANGUAGE','$SKILL_SET')";
if(mysqli_query($Conn,$SQL_Query))
{
    echo "<script>
        alert('New Record Inserted Successfully');
        </script>";
    header('location: read.php');
}
else{
    echo "Error inserting Record!!!".mysqli_error($Conn);

}
?>