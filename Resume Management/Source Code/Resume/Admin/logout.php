<?php
session_start();
include_once("bg.php");
ob_start();
unset($_SESSION['resuid']);
unset($_SESSION['respwd']);
?>

<?php
if((!isset($_SESSION['resuid']))&&(!isset($_SESSION['respwd'])))
{
echo "<br/>"."</br>"."<br/>"."</br>"."<br/>"."</br>";
echo "<b><center><h1>You are Logged out</h1></b>";
echo '<p><input type="button" style="height:30px" value="Click here to Log-In Again" onclick="window.location =\'default.php\'" /></p>';
}
?>