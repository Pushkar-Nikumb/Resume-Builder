    <?php
    $Name = $_POST['txtName'];
    $FAtherName = $_POST['txtFN'];
    $Gender = $_POST['txtGender'];
    $EMAIL = $_POST['txtEMAIL'];
    $University = $_POST['txtUniversity'];
    $Country = $_POST['txtCountry'];
    $Personal_Address = $_POST['txtAddress'];
    $Contact_No = $_POST['txtContact'];
    $Job_Description = $_POST['txtJob'];
    $LANGUAGE = $_POST['txtLang'];
    $SKILL_SET = $_POST['txtSkill'];


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
        //$SQL_Query = "SELECT * FROM `biodata` WHERE ID = $recNo;";
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
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
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
    
    </div>
    </body>
    </html>