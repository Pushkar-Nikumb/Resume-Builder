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
<body>
<center>
<input type="button"  style="height:40px;width:120px" value="Go to Home" onclick="window.location ='dashboard.php'">
<br><br>
<table border="10" height="50" cellspacing="1" cellpadding="10" bordercolor='#21DBD9' bgcolor='#E5F4F4'>
<TR>
<form method="GET" action="searchresume.php">
<TD>
<center>
<b>Search by Name</b><br>
<input type="text" name="name" style="width:180px;height:20px" required><br>
<input type="submit" value="Search" name="namesearch" style="height:30px;width:90px">
</form>
</TD>
<form method="GET" action="searchresume.php">
<TD>
<center>
<b>Search by Post Preference</b><br>
<select name="post_pref" required>
<option></option>
<option value="Teaching">Teaching</option>
<option value="Non-Teaching">Non-Teaching</option>
<option value="Typist">Typist</option>
<option value="Clerk">Clerk</option>
<option value="Office Assistant">Office Assistant</option>
<option value="Manager">Manager</option>
<option value="Cashier">Cashier</option>
<option value="ANY">ANY</option>
</select><br>
<input type="submit" value="Search" name="postpresearch" style="height:30px;width:90px">
</form>
</TD>
<form method="GET" action="searchresume.php">
<TD>
<center>
<b>Search by Martial Status</b><br>
<select name="mar_sta" required>
<option></option>
<option value="Single">Single</option>
<option value="Married">Married</option>
<option value="Widowed">Widowed</option>
<option value="Divorced">Divorced</option>
<option value="Seperated">Seperated</option>
</select><br>
<input type="submit" value="Search" name="marsearch" style="height:30px;width:90px">
</form>
</TD>
</TR>
<TR>
<form method="GET" action="searchresume.php">
<TD>
<center>
<b>Search by Subject Preference</b><br>
<select name="sub_pref" required>
<option></option>
<option value="ENGLISH">ENGLISH</option>
<option value="TAMIL">TAMIL</option>
<option value="MATHS">MATHS</option>
<option value="SCIENCE">SCIENCE</option>
<option value="PHYSICS">PHYSICS</option>
<option value="CHEMISTRY">CHEMISTRY</option>
<option value="BIOLOGY">BIOLOGY</option>
<option value="BOTANY">BOTANY</option>
<option value="ZOOLOGY">ZOOLOGY</option>
<option value="SOCIAL-SCIENCE">SOCIAL-SCIENCE</option>
<option value="GEOGRAPHY">GEOGRAPHY</option>
<option value="HISTORY">HISTORY</option>
<option value="COMPUTER SCIENCE">COMPUTER SCIENCE</option>
<option value="HINDI">HINDI</option>
<option value="ANY">ANY</option>
<option value="NIL">NIL</option>
</select><br>
<input type="submit" value="Search" name="subpresearch" style="height:30px;width:90px">
</form>
</TD>
<form method="GET" action="searchresume.php">
<TD>
<center>
<b>Search by Gender</b><br>
<select name="gen" required>
<option></option>
<option value="MALE">Male</option>
<option value="FEMALE">Female</option>
</select><br>
<input type="submit" value="Search" name="gensearch" style="height:30px;width:90px">
</form>
</TD>
<form method="GET" action="searchresume.php">
<TD>
<center>
<b>Search by Fresher</b><br><br>
<input type="text" name="fresh" value="YES" hidden>
<input type="submit" value="Search" name="freshsearch" style="height:30px;width:90px">
</form>
</TD>
</TR>
</table>
<?php
if(isset($_GET['namesearch']))//Name Search
{
$name=mysql_real_escape_string($_GET['name']);
$sql = mysql_query("SELECT * FROM resume WHERE name LIKE '%$name%'");
$tot= mysql_num_rows($sql);
echo "<h3><i>".$tot." resume(s) found for the name: ".$name."";
echo "<center>";
echo "<table border='20' height='100' width='900' cellspacing='3' cellpadding='3' bordercolor='#21DBD9'>
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
echo "<tr bgcolor='#E5F4F4'>";
echo "<td width='3%'>"."<center>".$row['name']."</td>";
echo "<td width='3%'>"."<center>".$row['f_name']."</td>";
echo "<td width='3%'>"."<center>".$row['sub_pref']."</td>";
echo "<td width='3%'>"."<center>".$row['regn']."</td>";
echo "<td width='3%'>"."<center>".$row['cty']."</td>";
echo "<form action='resumefull.php' method='GET'><td width='3%'>"."<center>
<input type='text' name='eid' value=".$row['eid']." hidden>
<input type='submit' value='View Resume' name='view'></form>"."</td>";
echo "<form action='resumedel.php' method='GET'><td width='3%'>"."<center>
<input type='text' name='eid' value=".$row['eid']." hidden>
<input type='text' name='name' value=".$row['name']." hidden>
<input type='submit' value='Delete Resume' name='deletesearchresume'></form>"."</td>";
echo "</td>";
echo "</tr>";
}
echo "</table></center>";
}
?>
<?php
if(isset($_GET['postpresearch']))//Post Search
{
$post_pref=mysql_real_escape_string($_GET['post_pref']);
$sql = mysql_query("SELECT * FROM resume WHERE post_pref='$post_pref'");
$tot= mysql_num_rows($sql);
echo "<h3><i>".$tot." resume(s) found for the Post: ".$post_pref."";
echo "<center>";
echo "<table border='20' height='100' width='900' cellspacing='3' cellpadding='3' bordercolor='#21DBD9'>
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
echo "<tr bgcolor='#E5F4F4'>";
echo "<td width='3%'>"."<center>".$row['name']."</td>";
echo "<td width='3%'>"."<center>".$row['f_name']."</td>";
echo "<td width='3%'>"."<center>".$row['sub_pref']."</td>";
echo "<td width='3%'>"."<center>".$row['regn']."</td>";
echo "<td width='3%'>"."<center>".$row['cty']."</td>";
echo "<form action='resumefull.php' method='GET'><td width='3%'>"."<center>
<input type='text' name='eid' value=".$row['eid']." hidden>
<input type='submit' value='View Resume' name='view'></form>"."</td>";
echo "<form action='resumedel.php' method='GET'><td width='3%'>"."<center>
<input type='text' name='eid' value=".$row['eid']." hidden>
<input type='text' name='post_pref' value=".$row['post_pref']." hidden>
<input type='submit' value='Delete Resume' name='deletesearchresume'></form>"."</td>";
echo "</td>";
echo "</tr>";
}
echo "</table></center>";
}
?>

<?php
if(isset($_GET['marsearch']))//Martial Status Search
{
$mar_sta=mysql_real_escape_string($_GET['mar_sta']);
$sql = mysql_query("SELECT * FROM resume WHERE mar_sta='$mar_sta'");
$tot= mysql_num_rows($sql);
echo "<h3><i>".$tot." resume(s) found for Martial status: ".$mar_sta."";
echo "<center>";
echo "<table border='20' height='100' width='900' cellspacing='3' cellpadding='3' bordercolor='#21DBD9'>
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
echo "<tr bgcolor='#E5F4F4'>";
echo "<td width='3%'>"."<center>".$row['name']."</td>";
echo "<td width='3%'>"."<center>".$row['f_name']."</td>";
echo "<td width='3%'>"."<center>".$row['sub_pref']."</td>";
echo "<td width='3%'>"."<center>".$row['regn']."</td>";
echo "<td width='3%'>"."<center>".$row['cty']."</td>";
echo "<form action='resumefull.php' method='GET'><td width='3%'>"."<center>
<input type='text' name='eid' value=".$row['eid']." hidden>
<input type='submit' value='View Resume' name='view'></form>"."</td>";
echo "<form action='resumedel.php' method='GET'><td width='3%'>"."<center>
<input type='text' name='eid' value=".$row['eid']." hidden>
<input type='text' name='mar_sta' value=".$row['mar_sta']." hidden>
<input type='submit' value='Delete Resume' name='deletesearchresume'></form>"."</td>";
echo "</td>";
echo "</tr>";
}
echo "</table></center>";
}
?>

<?php
if(isset($_GET['subpresearch']))//Subject Preference Search
{
$sub_pref=mysql_real_escape_string($_GET['sub_pref']);
$sql = mysql_query("SELECT * FROM resume WHERE sub_pref='$sub_pref'");
$tot= mysql_num_rows($sql);
echo "<h3><i>".$tot." resume(s) found for Subject Preference: ".$sub_pref."";
echo "<center>";
echo "<table border='20' height='100' width='900' cellspacing='3' cellpadding='3' bordercolor='#21DBD9'>
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
echo "<tr bgcolor='#E5F4F4'>";
echo "<td width='3%'>"."<center>".$row['name']."</td>";
echo "<td width='3%'>"."<center>".$row['f_name']."</td>";
echo "<td width='3%'>"."<center>".$row['sub_pref']."</td>";
echo "<td width='3%'>"."<center>".$row['regn']."</td>";
echo "<td width='3%'>"."<center>".$row['cty']."</td>";
echo "<form action='resumefull.php' method='GET'><td width='3%'>"."<center>
<input type='text' name='eid' value=".$row['eid']." hidden>
<input type='submit' value='View Resume' name='view'></form>"."</td>";
echo "<form action='resumedel.php' method='GET'><td width='3%'>"."<center>
<input type='text' name='eid' value=".$row['eid']." hidden>
<input type='text' name='sub_pref' value=".$row['sub_pref']." hidden>
<input type='submit' value='Delete Resume' name='deletesearchresume'></form>"."</td>";
echo "</td>";
echo "</tr>";
}
echo "</table></center>";
}
?>

<?php
if(isset($_GET['gensearch']))//Gender Search
{
$gen=mysql_real_escape_string($_GET['gen']);
$sql = mysql_query("SELECT * FROM resume WHERE gen='$gen'");
$tot= mysql_num_rows($sql);
echo "<h3><i>".$tot." resume(s) found for Gender: ".$gen."";
echo "<center>";
echo "<table border='20' height='100' width='900' cellspacing='3' cellpadding='3' bordercolor='#21DBD9'>
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
echo "<tr bgcolor='#E5F4F4'>";
echo "<td width='3%'>"."<center>".$row['name']."</td>";
echo "<td width='3%'>"."<center>".$row['f_name']."</td>";
echo "<td width='3%'>"."<center>".$row['sub_pref']."</td>";
echo "<td width='3%'>"."<center>".$row['regn']."</td>";
echo "<td width='3%'>"."<center>".$row['cty']."</td>";
echo "<form action='resumefull.php' method='GET'><td width='3%'>"."<center>
<input type='text' name='eid' value=".$row['eid']." hidden>
<input type='submit' value='View Resume' name='view'></form>"."</td>";
echo "<form action='resumedel.php' method='GET'><td width='3%'>"."<center>
<input type='text' name='eid' value=".$row['eid']." hidden>
<input type='text' name='gen' value=".$row['gen']." hidden>
<input type='submit' value='Delete Resume' name='deletesearchresume'></form>"."</td>";
echo "</td>";
echo "</tr>";
}
echo "</table></center>";
}
?>

<?php
if(isset($_GET['freshsearch']))//Fresher Search
{
$fresh=mysql_real_escape_string($_GET['fresh']);
$sql = mysql_query("SELECT * FROM resume WHERE fresh='$fresh'");
$tot= mysql_num_rows($sql);
echo "<h3><i>".$tot." resume(s) found for fresher";
echo "<center>";
echo "<table border='20' height='100' width='900' cellspacing='3' cellpadding='3' bordercolor='#21DBD9'>
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
echo "<tr bgcolor='#E5F4F4'>";
echo "<td width='3%'>"."<center>".$row['name']."</td>";
echo "<td width='3%'>"."<center>".$row['f_name']."</td>";
echo "<td width='3%'>"."<center>".$row['sub_pref']."</td>";
echo "<td width='3%'>"."<center>".$row['regn']."</td>";
echo "<td width='3%'>"."<center>".$row['cty']."</td>";
echo "<form action='resumefull.php' method='GET'><td width='3%'>"."<center>
<input type='text' name='eid' value=".$row['eid']." hidden>
<input type='submit' value='View Resume' name='view'></form>"."</td>";
echo "<form action='resumedel.php' method='GET'><td width='3%'>"."<center>
<input type='text' name='eid' value=".$row['eid']." hidden>
<input type='text' name='fresh' value=".$row['fresh']." hidden>
<input type='submit' value='Delete Resume' name='deletesearchresume'></form>"."</td>";
echo "</td>";
echo "</tr>";
}
echo "</table></center>";
}
?>
</center>
</body>