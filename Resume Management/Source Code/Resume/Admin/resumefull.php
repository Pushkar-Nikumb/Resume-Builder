<?php
session_start();
ob_start();
if((!isset($_SESSION['resuid']))&&(!isset($_SESSION['respwd'])))
{
header('Location: default.php') ;
}
include_once("bg.php");
include_once("config.php");

if(isset($_GET['view']))//Name Search
{
echo '<center><input type="button" style="width:150px;height:30px"  value="Go Home" onclick="window.location =\'dashboard.php\'" />';
$eid=mysql_real_escape_string($_GET['eid']);
$sql = mysql_query("SELECT * FROM resume WHERE eid ='$eid'");
echo "<center>";
$row = mysql_fetch_assoc($sql);
if($row)
{
?>
<center>
<table border="10" width="700" cellpadding="1" bordercolor='#21DBD9' bgcolor='#E5F4F4'>
<TR>
<TD><b>Full Name</b></TD>
<TD>
<?php echo $row['name'];?>
</TD>
</TR>

<TR>
<TD><b>Father's Name</b></TD>
<TD>
<?php echo $row['f_name'];?>
</TD>
</TR>

<TR>
<TD><b>Date of Birth</b></TD>
<TD>
<?php echo $row['dob'];?>
</TD>
</TR>

<TR>
<TD><b>Gender</b></TD>
<TD>
<?php echo $row['gen'];?>
</TD>
</TR>

<TR>
<TD><b>Martial Status</b></TD>
<TD>
<?php echo $row['mar_sta'];?>
</TD>
</TR>

<TR>
<TD><b>Religion</b></TD>
<TD>
<?php echo $row['relig'];?>
</TD>
</TR>

<TR><TD><b>Community</b></TD>
<TD>
<?php echo $row['comm'];?>
</TD>
</TR>

<TR>
<TD><b>Languages Known</b></TD>
<TD>
<?php echo $row['lang1'];?>,
<?php echo $row['lang2'];?>,
<?php echo $row['lang3'];?>.
</TD>
</TR>

<TR><TD colspan ='2'><center><b>Educational Qualification</TD></TR>
<TR>
<TD  colspan ='2'>
<center>
<table border="5" width="500" cellpadding="1" bordercolor='#21DBD9' bgcolor='#E5F4F4'>
<tr>
<td><center><b>Course</td>
<td><center><b>Board/University</td>
<td><center><b>Year of Passing</td>
<td><center><b>% of Marks</td>
</tr>
<tr><td><center>
<?php echo $row['ed_cr_1'];?>
</td>
<td><center>
<?php echo $row['ed_bd_1'];?>
</td>
<td><center>
<?php echo $row['ed_yr_1'];?>
</td>
<td><center>
<?php echo $row['ed_perc_1'];?>
</td>
</tr>
<tr><td><center>
<?php echo $row['ed_cr_2'];?>
</td>
<td><center>
<?php echo $row['ed_bd_2'];?>
</td>
<td><center>
<?php echo $row['ed_yr_2'];?>
</td>
<td><center>
<?php echo $row['ed_perc_2'];?>
</td>
</tr>
<tr><td><center>
<?php echo $row['ed_cr_3'];?>
</td>
<td><center>
<?php echo $row['ed_bd_3'];?>
</td>
<td><center>
<?php echo $row['ed_yr_3'];?>
</td>
<td><center>
<?php echo $row['ed_perc_3'];?>
</td>
</tr>
<tr><td><center>
<?php echo $row['ed_cr_4'];?>
</td>
<td><center>
<?php echo $row['ed_bd_4'];?>
</td>
<td><center>
<?php echo $row['ed_yr_4'];?>
</td>
<td><center>
<?php echo $row['ed_perc_4'];?>
</td>
</tr>
<tr><td><center>
<?php echo $row['ed_cr_5'];?>
</td>
<td><center>
<?php echo $row['ed_bd_5'];?>
</td>
<td><center>
<?php echo $row['ed_yr_5'];?>
</td>
<td><center>
<?php echo $row['ed_perc_5'];?>
</td>
</tr>
<tr><td><center>
<?php echo $row['ed_cr_6'];?>
</td>
<td><center>
<?php echo $row['ed_bd_6'];?>
</td>
<td><center>
<?php echo $row['ed_yr_6'];?>
</td>
<td><center>
<?php echo $row['ed_perc_6'];?>
</td>
</tr>
</table>
</TD>
</TR>

<TR><TD colspan ='2'><center><b>Experience Details</TD></TR>
<TR>
<TD  colspan ='2'>
<center>
<table border="5" width="500" cellpadding="1" bordercolor='#21DBD9' bgcolor='#E5F4F4'>
<tr>
<td><center><b>Position Held</td>
<td><center><b>Name of the Institution</td>
<td><center><b>Period</td>
</tr>
<tr><td><center>
<?php echo $row['ex_pos_1'];?>
</td>
<td><center>
<?php echo $row['ex_ins_1'];?>
</td>
<td><center>
<?php echo $row['ex_prd_1'];?>
</td>
</tr>
<tr><td><center>
<?php echo $row['ex_pos_2'];?>
</td>
<td><center>
<?php echo $row['ex_ins_2'];?>
</td>
<td><center>
<?php echo $row['ex_prd_2'];?>
</td>
</tr>
<tr><td><center>
<?php echo $row['ex_pos_3'];?>
</td>
<td><center>
<?php echo $row['ex_ins_3'];?>
</td>
<td><center>
<?php echo $row['ex_prd_3'];?>
</td>
</tr>
<tr><td><center>
<?php echo $row['ex_pos_4'];?>
</td>
<td><center>
<?php echo $row['ex_ins_4'];?>
</td>
<td><center>
<?php echo $row['ex_prd_4'];?>
</td>
</tr>
<tr><td><center>
<?php echo $row['ex_pos_5'];?>
</td>
<td><center>
<?php echo $row['ex_ins_5'];?>
</td>
<td><center>
<?php echo $row['ex_prd_5'];?>
</td>
</tr>
<tr><td><center>
<?php echo $row['ex_pos_6'];?>
</td>
<td><center>
<?php echo $row['ex_ins_6'];?>
</td>
<td><center>
<?php echo $row['ex_prd_6'];?>
</td>
</tr>
</table>
</TD>
</TR>

<TR>
<TD><b>Address</b></TD>
<TD>
<?php echo $row['addr'];?>
</textarea>
</TD>
</TR>

<TR>
<TD><b>Region</b></TD>
<TD>
<?php echo $row['regn'];?>
</TD>
</TR>

<TR>
<TD><b>City</b></TD>
<TD>
<?php echo $row['cty'];?>
</TD>
</TR>

<TR>
<TD><b>Post Preference for</b></TD>
<TD>
<?php echo $row['post_pref'];?>
</TD>
</TR>

<TR>
<TD><b>Subject Preference for</b></TD>
<TD>
<?php echo $row['sub_pref'];?>
</TD>
</TR>

<TR>
<TD><b>Landline no</b></TD>
<TD>
<?php echo $row['lan_no'];?>
</TD>
</TR>

<TR>
<TD><b>Mobile no</b></TD>
<TD>
<?php echo $row['mob_no'];?>
</TD>
</TR>

<TR>
<TD><b>Email-Id</b></TD>
<TD>
<?php echo $row['eid'];?>
</TD>
</TR>

</table>
</form>
</i>
</center>

</body>
</html>
<?php
}
}
else
{
echo "<br/>"."</br>"."<br/>"."</br>"."<br/>"."</br>";
echo "<b><center><h3>Unauthorized Entry</h3></b>";
}
?>