<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <link type = "text/css" rel = "stylesheet" href = "css/cssStyle.css">
</head>
<body>    
    <div class="header">
        <h1> RESUME BUILDER APPLICATION </h1>
</div>
<div class = "nav">
        <a href="index.php" class = "active">HOME</a>
        <a href="read.php">READ</a>
        <a href="update.php">UPDATE</a>
        <a href="delete.php">DELETE</a>
        <a href="cvInfo.php">GENERATE CV</a>
        
</div>

<div class = "bodyArea">
    

    <div class = "column">
    <h2> Enter Personal Information </h2>
    <form action="saveData.php" method="post">
    
    <table>
        <th>PERSONAL INFORMATION</th>
                    <tr>
                        <td>NAME :</td>
                        <td>
                            <input type="text" name = "txtName" placeholder = "Enter Your Name" required>
                        </td>
                    </tr>

                <tr>
                        <td>FATHER NAME :</td>
                        <td>
                            <input type="text" name = "txtFather" placeholder = "Enter Your Father Name" required>
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
                            <input type="text" name = "txtEmail" placeholder = "Enter Your E-mail" required>
                        </td>
                </tr>

                <tr>
                        <td>UNIVERSITY :</td>
                        <td>
                            <input type="text" name = "txtUniversity" placeholder = "Enter Your University" required>
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
                            <input type="text" name = "txtAddress" placeholder = "Enter Your Address" required>
                        </td>
                </tr>

                <tr>
                        <td>CONTACT :</td>
                        <td>
                            <input type="text" name = "txtContact" placeholder = "Enter Your Contact" required>
                        </td>
                </tr>

                <tr>
                        <td>JOB DESCRIPTION :</td>
                        <td>
                            <input type="text" name = "txtJob" placeholder = "JOB DESCRIPTION" required>
                        </td>
                </tr>

                <tr>
                        <td>LANGUAGE :</td>
                        <td>
                            <input type="text" name = "txtLanguage" placeholder = "Enter Your LANGUAGE" required>
                        </td>
                </tr>

                <tr>
                        <td>SKILL-SET :</td>
                        <td>
                            <input type="text" name = "txtSkill" placeholder = "Enter Your SKILL-SET" required>
                        </td>
                </tr>

                <tr>
                        <td>
                            <input type="submit" name = "submit">
                        </td>
                </tr>
    </table>  

    </form>
    </div>
<div class="footer">
    <p><h1>SEARCH</h1></p>

   

    <form action="searchData.php" method="post">    
    <table>        
            <tr>
                    <td>NAME :</td>
                        <td>
                            <input type="text" name = "searchNAME" placeholder = "Enter Your NAME" required>
                            <input type="submit" name = "submit">

                        </td>
            </tr>
          
    </table>
    </form>

</div>   
<div>
        <img align = "center" src="resumeimg.jfif" width="500" height="480">
</div>
</body>
</html>