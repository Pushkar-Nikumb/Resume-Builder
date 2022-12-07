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


      //echo $row['Name']."\n";
    //echo $row['Father_Name']."\n";
  //  echo $row['EMAIL']."\n";
//    echo $row['UNIVERSITY']."\n";
    //echo $row['Gender']."\n";
  //  echo $row['Country']."\n";
//    echo $row['Personal_Address']."\n";
    //echo $row['Job_Description']."\n";
  //  echo $row['LANGUAGE']."\n";
//    echo $row['SKILL_SET']."\n";


    
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
    <form action="resume/cvgenerate.php" method="post">
    
    <table>
        <th>PERSONAL INFORMATION</th>
                <tr>
                        <td>HTML :</td>
                        <td>
                            <select name = "txtHTML">
                                <option>10</option>
                                <option>20</option>
                                <option>30</option>
                                <option>40</option>
                                <option>50</option>
                                <option>60</option>
                                <option>70</option>
                                <option>80</option>
                                <option>90</option>
                                <option>100</option>
                            </select>
                        </td>
                </tr>
                
                <tr>
                        <td>CSS :</td>
                        <td>
                            <select name = "txtCSS">
                                <option>10</option>
                                <option>20</option>
                                <option>30</option>
                                <option>40</option>
                                <option>50</option>
                                <option>60</option>
                                <option>70</option>
                                <option>80</option>
                                <option>90</option>
                                <option>100</option>
                            </select>
                        </td>
                </tr>

                <tr>
                        <td>JAVASCRIPT :</td>
                        <td>
                            <select name = "txtJAVASCRIPT">
                                <option>10</option>
                                <option>20</option>
                                <option>30</option>
                                <option>40</option>
                                <option>50</option>
                                <option>60</option>
                                <option>70</option>
                                <option>80</option>
                                <option>90</option>
                                <option>100</option>
                            </select>
                        </td>
                </tr>

                <tr>
                        <td>PYTHON :</td>
                        <td>
                            <select name = "txtPYTHON">
                                <option>10</option>
                                <option>20</option>
                                <option>30</option>
                                <option>40</option>
                                <option>50</option>
                                <option>60</option>
                                <option>70</option>
                                <option>80</option>
                                <option>90</option>
                                <option>100</option>
                            </select>
                        </td>
                </tr>

                <tr>
                        <td>JAVA :</td>
                        <td>
                            <select name = "txtJAVA">
                                <option>10</option>
                                <option>20</option>
                                <option>30</option>
                                <option>40</option>
                                <option>50</option>
                                <option>60</option>
                                <option>70</option>
                                <option>80</option>
                                <option>90</option>
                                <option>100</option>
                            </select>
                        </td>
                </tr>
                <input type="hidden" name="txtRowNo" value="<?php echo $recNo; ?>">       
                <tr>
                        <td>PHOTOSHOP :</td>
                        <td>
                            <select name = "txtPHOTOSHOP">
                                <option>10</option>
                                <option>20</option>
                                <option>30</option>
                                <option>40</option>
                                <option>50</option>
                                <option>60</option>
                                <option>70</option>
                                <option>80</option>
                                <option>90</option>
                                <option>100</option>
                            </select>
                        </td>
                </tr>
                <tr>
                    <td>
                    <button type = "submit" name = "submit">GO</submit>
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