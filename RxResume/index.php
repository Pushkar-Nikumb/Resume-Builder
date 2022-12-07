<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <link type = "text/css" rel = "stylesheet" href = "css/cssStyle.css">
</head>
<body>    
    <div class="header">
        <h1> Simple PHP CRUD APPLICATION </h1>
</div>
<div class = "nav">
        <a href="index.php" class = "active">HOME</a>
        <a href="create.php">Create</a>
        <a href="read.php">Read</a>
        <a href="#">Update</a>
        <a href="#">Delete</a>
        
</div>

<div class = "bodyArea">
    

    <div class = "column">
    <h2> Enter Personal Information </h2>
    <p> Column Paragraph</p>
    <form action="saveData.php" method="post">
        <label>Name</label>
        <input type="text" name="txtName" id = "txtName" placeholder = "Enter your Name"><br><br>
        <label>Department</label>
        <input type="text" name="txtDept" id = "txtDept" placeholder = "Enter your Department"><br><br>
        <label>Education</label>
        <input type="text" name="txtEdu" id = "txtEdu" placeholder = "Educated from the College"><br><br>
        <label>Skills</label>
        <input type="text" name="txtSkills" id = "txtSkills" placeholder = "Skill-Set"><br><br>
        <button type = "submit" name = "submit">Submit</submit>


    </form>
    </div>
    <div class = "column">
    <h2>Database of All Records</h2>
    
    <table border="2">

    <tr>
        <th> No </th>
        <th> Name </th>
        <th> Department </th>
        <th> Education </th>
        <th> Skills </th>
    </tr>

<?php

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
            echo "<td>".$row['Department']."</td>";
            echo "<td>".$row['Education']."</td>";
            echo "<td>".$row['Skills']."</td>";
            echo "<td> <button onclick='editData(".$row['ID'].")'> Edit </button></td>";
            echo "<td> <button onclick='deleteData(".$row['ID'].")'> Delete </button></td>";

            echo "</tr>";
        }
    }
    else{

    }
    ?>
    </table>
    </div>
   
</div><br> 
<div class="footer">
    <p>Footer</p>
</div>    

</body>

<script>
    function editData(recno)
    {
        alert("Edit Record Number : "+recno);
        window.location.replace("editData.php?recno="+recno);//sending value recno to editData.php using get method, as earier we used post method here we use get method.
    }
    function deleteData(recno)
    {
        if(confirm("Are you sure to delete Record NO. "+recno))
        {
        window.location.replace("deleteData.php?recno="+recno);//sending value recno to editData.php using get method, as earier we used post method here we use get method.
            
        }
        else{

        }

        //alert("Edit Record Number : "+recno);
    }
</script>
</html>