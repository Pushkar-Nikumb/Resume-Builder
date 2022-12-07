<?php
include_once("configuser.php");
session_start();
ob_start();
?>
<?php
$uid = mysql_real_escape_string($_POST['uid']);
$pwd = mysql_real_escape_string($_POST['pwd']);
$result = mysql_query("SELECT * FROM resume WHERE uid='$uid' AND pwd='$pwd'");
if($row = mysql_fetch_array($result))
{
$_SESSION['resuid']=$row['uid'];
$_SESSION['respwd']=$row['pwd'];
header('location: dashboard.php');
}
else
{
echo "<center>"."Invalid Username or Password"."</center>";
}
?>