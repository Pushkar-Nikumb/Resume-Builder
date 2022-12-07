<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <link type = "text/css" rel = "stylesheet" href = "css/cssStyle.css">
   <style>h1 {text-align: center;}</style>
</head>
<body>   
<h1> RESUME BUILDER APPLICATION </h1>

    <div class="header">
</div>
<div class = "nav">
<a href="index.php" class = "active">HOME</a>
        <a href="read.php">READ</a>
        <a href="update.php">UPDATE</a>
        <a href="delete.php">DELETE</a>

        
</div>

<h1> GENERATE YOUR RESUME HERE </h1>
    <div class = "column">
    
    <table border="3">

    <tr>
        <th>  ID  </th>
        <th> Name </th>
        <th> Father Name </th>
        <th> Gender </th>
        <th> EMAIL </th>
        <th> University </th>
        <th> Country </th>
        <th> Personal_Address </th>
        <th> Contact_No </th>
        <th> Job_Description </th>
        <th> LANGUAGE </th>
        <th> SKILL_SET </th>

    </tr>

<?php

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
    
    $SQL_Read = "SELECT * FROM `biodata`;";
    $Response = mysqli_query($Conn,$SQL_Read);

    if(mysqli_num_rows($Response) > 0)
    {
        while($row = mysqli_fetch_assoc($Response))
        {
            echo "<tr>";
            echo "<td>".$row['ID']."</td>";
            echo "<td>".$row['Name']."</td>";
            echo "<td>".$row['Father_Name']."</td>";
            echo "<td>".$row['Gender']."</td>";
            echo "<td>".$row['EMAIL']."</td>";
            echo "<td>".$row['UNIVERSITY']."</td>";
            echo "<td>".$row['Country']."</td>";
            echo "<td>".$row['Personal_Address']."</td>";
            echo "<td>".$row['Contact_No']."</td>";
            echo "<td>".$row['Job_Description']."</td>";
            echo "<td>".$row['LANGUAGE']."</td>";
            echo "<td>".$row['SKILL_SET']."</td>";

            echo "<td> <button onclick='editData(".$row['ID'].")'> GENERATE CV </button></td>";
            //echo "<td> <button onclick='deleteData(".$row['ID'].")'> Delete </button></td>";

            echo "</tr>";
        }
    }
    else{

    }
    ?>
    </table>
    </div>
    
    

</body>
<script>
    function editData(recno)
    {
        alert("Edit Record Number : "+recno);
        window.location.replace("addData.php?recno="+recno);//sending value recno to editData.php using get method, as earier we used post method here we use get method.
    }
    
</script>
</html>