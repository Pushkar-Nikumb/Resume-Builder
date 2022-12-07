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
    <form action="updateData.php" method="post">
    
    <table>
        <th>PERSONAL INFORMATION</th>
                    <tr>
                        <td>NAME :</td>
                        <td>
                            <input type="text" name = "txtName" placeholder = "Enter Your Name" value="<?php echo $row['Name'] ?>" required>
                        </td>
                    </tr>

                <tr>
                        <td>FATHER NAME :</td>
                        <td>
                            <input type="text" name = "txtFather" placeholder = "Enter Your Father Name" value="<?php echo $row['Father_Name'] ?>" required>
                        </td>
                </tr>

                <tr>
                        <td>GENDER :</td>
                        <td>
                            <input type="radio" name = "txtGender" value = "MALE" required>MALE
                            <input type="radio" name = "txtGender" value = "FEMALE" required>FEMALE
                        </td>
                </tr>

                <tr>
                        <td>EMAIL :</td>
                        <td>
                            <input type="text" name = "txtEmail" placeholder = "Enter Your E-mail" value="<?php echo $row['EMAIL'] ?>" required>
                        </td>
                </tr>

                <tr>
                        <td>UNIVERSITY :</td>
                        <td>
                            <input type="text" name = "txtUniversity" placeholder = "Enter Your University" value="<?php echo $row['UNIVERSITY'] ?>" required>
                        </td>
                </tr>

                <tr>
                        <td>COUNTRY :</td>
                        <td>
                            <select name = "txtCountry">
                                <option>INDIA</option>
                                <option>USA</option>
                                <option>BANGALDESH</option>
                                <option>ENGLAND</option>
                                <option>AUSTRALIA</option>
                                <option>PAKISTAN</option>
                            </select>
                        </td>
                </tr>

                <tr>
                        <td>PERSONAL ADDRESS :</td>
                        <td>
                            <input type="text" name = "txtAddress" placeholder = "Enter Your Address" value="<?php echo $row['Personal_Address'] ?>" required>
                        </td>
                </tr>

                <tr>
                        <td>CONTACT :</td>
                        <td>
                            <input type="text" name = "txtContact" placeholder = "Enter Your Contact" value="<?php echo $row['Contact_No'] ?>" required>
                        </td>
                </tr>

                <tr>
                        <td>JOB DESCRIPTION :</td>
                        <td>
                            <input type="text" name = "txtJob" placeholder = "JOB DESCRIPTION" value="<?php echo $row['Job_Description'] ?>" required>
                        </td>
                </tr>

                <tr>
                        <td>LANGUAGE :</td>
                        <td>
                            <input type="text" name = "txtLanguage" placeholder = "Enter Your LANGUAGE" value="<?php echo $row['LANGUAGE'] ?>" required>
                        </td>
                </tr>

                <tr>
                        <td>SKILL-SET :</td>
                        <td>
                            <input type="text" name = "txtSkill" placeholder = "Enter Your SKILL-SET" value="<?php echo $row['SKILL_SET'] ?>" required>
                        </td>
                </tr>

                <input type="hidden" name="txtRowNo" value="<?php echo $recNo; ?>">

                <tr>
                        <td>
                            <input type="submit" name = "submit">
                        </td>
                </tr>
    </table>  

    </form>
    </div>
   
</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="footer">
    <p>Footer</p>
</div>    

</body>

</html>