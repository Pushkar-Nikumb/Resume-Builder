<?php
    $recNo = $_GET['recno'];
    
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
        //echo "DAtabase Establised Successfully!!!";
    }
    $SQL_Query = "SELECT * FROM `biodata` WHERE ID = $recNo;";
    $Response = mysqli_query($Conn,$SQL_Query);

    if(mysqli_num_rows($Response) > 0)
    {
        $row = mysqli_fetch_assoc($Response);               
    }
    else{
        echo " NO database Found";
    }

    
    echo $row['Name']."\n";
    echo $row['Father_Name']."\n";
    echo $row['EMAIL']."\n";
    echo $row['UNIVERSITY']."\n";
    echo $row['Gender']."\n";
    echo $row['Country']."\n";
    echo $row['Personal_Address']."\n";
    echo $row['Job_Description']."\n";
    echo $row['LANGUAGE']."\n";
    echo $row['SKILL_SET']."\n";


    
?>
