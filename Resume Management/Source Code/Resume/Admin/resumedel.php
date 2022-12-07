<?php
session_start();
ob_start();
if((!isset($_SESSION['resuid']))&&(!isset($_SESSION['respwd'])))
{
header('Location: default.php') ;
}
include_once("bg.php");
include_once("config.php");
?>
<?php
if(isset($_GET['deletesearchresume']))
{
if(isset($_GET['name']))//Delete by name
{
$name=mysql_real_escape_string($_GET['name']);
$eid=mysql_real_escape_string($_GET['eid']);
$sql = mysql_query("DELETE FROM resume WHERE eid ='$eid'");
if($sql)
{
header('Location: searchresume.php?name='.$name.'&namesearch=Search');
}
}
if(isset($_GET['post_pref']))//Delete by Post preference
{
$post_pref=mysql_real_escape_string($_GET['post_pref']);
$eid=mysql_real_escape_string($_GET['eid']);
$sql = mysql_query("DELETE FROM resume WHERE eid ='$eid'");
if($sql)
{
header('Location: searchresume.php?post_pref='.$post_pref.'&postpresearch=Search');
}
}
if(isset($_GET['mar_sta']))//Delete by martial status
{
$mar_sta=mysql_real_escape_string($_GET['mar_sta']);
$eid=mysql_real_escape_string($_GET['eid']);
$sql = mysql_query("DELETE FROM resume WHERE eid ='$eid'");
if($sql)
{
header('Location: searchresume.php?mar_sta='.$mar_sta.'&marsearch=Search');
}
}
if(isset($_GET['sub_pref']))//Delete by subject preference
{
$sub_pref=mysql_real_escape_string($_GET['sub_pref']);
$eid=mysql_real_escape_string($_GET['eid']);
$sql = mysql_query("DELETE FROM resume WHERE eid ='$eid'");
if($sql)
{
header('Location: searchresume.php?sub_pref='.$sub_pref.'&subpresearch=Search');
}
}
if(isset($_GET['gen']))//Delete by Gender
{
$gen=mysql_real_escape_string($_GET['gen']);
$eid=mysql_real_escape_string($_GET['eid']);
$sql = mysql_query("DELETE FROM resume WHERE eid ='$eid'");
if($sql)
{
header('Location: searchresume.php?gen='.$gen.'&gensearch=Search');
}
}
if(isset($_GET['fresh']))//Delete by Fresher
{
$fresh=mysql_real_escape_string($_GET['fresh']);
$eid=mysql_real_escape_string($_GET['eid']);
$sql = mysql_query("DELETE FROM resume WHERE eid ='$eid'");
if($sql)
{
header('Location: searchresume.php?fresh='.$fresh.'&freshsearch=Search');
}
}
}
?>

<?php
if(isset($_GET['deleteresumeall']))
{
$eid=mysql_real_escape_string($_GET['eid']);
$sql = mysql_query("DELETE FROM resume WHERE eid ='$eid'");
if($sql)
{
header('Location: resumeall.php?showallresume=Show+all+Resume');
}
}
?>