<?php
session_start();
ob_start();
if((!isset($_SESSION['resuid']))&&(!isset($_SESSION['respwd'])))
{
header('Location: default.php') ;
}
include_once("config.php");
include_once("bg.php");
?>
<center><input type="button"  style="height:40px;width:120px" value="Goto Home" onclick="window.location ='dashboard.php'">
<?php
if(isset($_GET['showallresume']))//Subject Preference Search
{
$sql = mysql_query("SELECT * FROM resume");
$tot= mysql_num_rows($sql);
echo "<center><h3><i>".$tot." resume(s) found from the database";
echo "<center>";
echo "<table border='20' height='100' width='1000' cellspacing='3' cellpadding='3' bordercolor='#21DBD9'>
<tr>
<th>Name</th>
<th>Father's Name</th>
<th>Subject preference</th>
<th>Region</th>
<th>City</th>
<th>Action</th>
<th>Action</th></tr>";
//And we display the results
while($row = mysql_fetch_assoc($sql))
{
$eid=$row['eid'];
echo "<tr bgcolor='#E5F4F4'>";
echo "<td width='3%'>"."<center>".$row['name']."</td>";
echo "<td width='3%'>"."<center>".$row['f_name']."</td>";
echo "<td width='3%'>"."<center>".$row['sub_pref']."</td>";
echo "<td width='3%'>"."<center>".$row['regn']."</td>";
echo "<td width='3%'>"."<center>".$row['cty']."</td>";
echo "<form action='resumefull.php' method='GET'><td width='3%'>"."<center>
<input type='text' name='eid' value=".$eid." hidden>
<input type='submit' value='View Resume' name='view'></form>"."</td>";
echo "<form action='resumedel.php' method='GET'><td width='3%'>"."<center>
<input type='text' name='eid' value=".$eid." hidden>
<input type='submit' value='Delete Resume' name='deleteresumeall'></form>"."</td>";
echo "</tr>";
}
echo "</table></center>";
}
?>