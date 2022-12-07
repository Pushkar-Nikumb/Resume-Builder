<?php
    $recNo = $_GET['recno'];
    
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
    $SQL_Query = "SELECT * FROM `biodata` WHERE ID = $recNo;";
    $Response = mysqli_query($Conn,$SQL_Query);

    if(mysqli_num_rows($Response) > 0)
    {
        $row = mysqli_fetch_assoc($Response);               
    }
    else{
        echo " NO database Found";
    }

    
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
    <h2> Edit your Personal Information </h2>
    <p> Column Paragraph</p>
    <form action="updateData.php" method="post">
        <label>Name</label>
        <input type="text" name="txtName" id = "txtName" 
        placeholder = "Enter your Name" value="<?php echo $row['Name'] ?>"><br>
        <label>Department</label>
        <input type="text" name="txtDept" id = "txtDept" 
        placeholder = "Enter your Department" value="<?php echo $row['Department'] ?>"><br>
        <label>Education</label>
        <input type="text" name="txtEdu" id = "txtEdu" 
        placeholder = "Educated from the College" value="<?php echo $row['Education'] ?>"><br>
        <label>Skills</label>
        <input type="text" name="txtSkills" id = "txtSkills"
        placeholder = "Skill-Set" value="<?php echo $row['Skills'] ?>"><br>
        <input type="hidden" name="txtRowNo" value="<?php echo $recNo; ?>">
        <button type = "submit" name = "submit">Update</submit>


    </form>
    </div>
   
</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="footer">
    <p>Footer</p>
</div>    

</body>

</html>