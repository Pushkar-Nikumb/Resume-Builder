<?php
session_start();
ob_start();
if((!isset($_SESSION['resuid']))&&(!isset($_SESSION['respwd'])))
{
header('Location: default.php') ;
}
include_once("bg.php");
$wel="You are Logged in as ";
echo $wel.$_SESSION['resuid'];
echo "&nbsp"."&nbsp";
echo '<input type="button" style="width:150px;height:30px"  value="Click here to Logout" onclick="window.location =\'logout.php\'" />';
?>

<html>
<head></head>
<title></title>
<body>
<br><br><br><br>
<center>
<table border="20" height="100" width="100" cellspacing="5" cellpadding="10" bordercolor='#21DBD9' bgcolor='#E5F4F4'>
<form action="resumeall.php" method="GET">
<TR>
<TD>
<center>
<input type="submit" style="height:50px;width:200px" value="Show all Resume" name="showallresume">
</form>
</TD>
</TR>
<TR>
<TD>
<center><input type="button" style="height:50px;width:200px" value="Search Resume" onclick="window.location ='searchresume.php'">
</TD>
</TR>
</table>
</center>
</body>
<?php
ob_end_flush();
?>