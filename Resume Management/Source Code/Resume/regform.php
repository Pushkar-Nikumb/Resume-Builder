<script language="JavaScript" 
type="text/JavaScript">
if(navigator.appName == "Microsoft Internet Explorer")
{
 window.location = "ie.php"
}

if(navigator.appName == "Firefox")
{
 window.location = "fire.php"
}
</script>

<?php
?>
<center>
<form action="regpro.php" method="POST">
<TABLE BORDER="0" width="400"  height="100" style"background-color:lightblue">

<TR>
<TD><b>Full Name</b></TD>
<TD>
<input type="text" name="name" placeholder='eg:shanmuka' style="width:170px" maxlength="80" required>
</TD>
</TR>

<TR>
<TD><b>Father's Name</b></TD>
<TD>
<input type="text" name="f_name" placeholder='eg:senthil' style="width:170px" maxlength="80" required>
</TD>
</TR>

<TR>
<TD><b>Date of Birth</b></TD>
<TD>
<input type="date" name="dob" style="width:140px" required>
<i>(dd-mm-yyyy)</i>
</TD>
</TR>

<TR>
<TD><b>Gender</b></TD>
<TD>
<select name="gen" required>
<option value="MALE">Male</option>
<option value="FEMALE">Female</option>
</select>
</TD>
</TR>

<TR>
<TD><b>Martial Status</b></TD>
<TD>
<select name="mar_sta">
<option value="Single">Single</option>
<option value="Married">Married</option>
<option value="Widowed">Widowed</option>
<option value="Divorced">Divorced</option>
<option value="Seperated">Seperated</option>
</select>
</TD>
</TR>

<TR>
<TD><b>Religion</b></TD>
<TD>
<input type="text" name="relig" style="width:150px" maxlength="30" required>
</TD>
</TR>

<TR><TD><b>Community</b></TD>
<TD>
<select name="comm" required>
<option>BC</option>
<option>OC</option>
<option>MBC</option>
<option>SC</option>
<option>ST</option>
</select>
</TD>
</TR>

<TR>
<TD><b>Languages Known</b></TD>
<TD>
1<input type="text" name="lang1" style="width:150px" maxlength="15" required><br>
2<input type="text" name="lang2" style="width:150px" maxlength="15"><br>
3<input type="text" name="lang3" style="width:150px" maxlength="15"><br>
</TD>
</TR>

<TR><TD colspan ='2'><center><b>Educational Qualification<i> (minimum two fields should be filled)</i></TD></TR>
<TR>
<TD  colspan ='2'>
<center>
<table border='1'>
<tr>
<td><center><b>Course</td>
<td><center><b>Board/University</td>
<td><center><b>Year of Passing</td>
<td><center><b>% of Marks</td>
</tr>
<tr><td><center>
<input type="text" placeholder="eg:B.Ed" name="ed_cr_1" style="width:150px" maxlength="100" required>
</td>
<td><center>
<input type="text" placeholder="eg:University/College name" name="ed_bd_1" style="width:200px" maxlength="100" required>
</td>
<td><center>
<input type="text" placeholder="eg:May 2014" name="ed_yr_1" style="width:150px" maxlength="100" required>
</td>
<td><center>
<input type="text" placeholder="eg:97.90%" name="ed_perc_1" style="width:80px" maxlength="100" required>
</td>
</tr>
<tr><td><center>
<input type="text" name="ed_cr_2" placeholder="eg:M.Sc" style="width:150px" maxlength="100" required>
</td>
<td><center>
<input type="text" name="ed_bd_2" placeholder="eg:University/College name" style="width:200px" maxlength="100" required>
</td>
<td><center>
<input type="text" name="ed_yr_2" placeholder="eg:May 2014" style="width:150px" maxlength="100" required>
</td>
<td><center>
<input type="text" name="ed_perc_2" placeholder="eg:97.90%" style="width:80px" maxlength="100" required>
</td>
</tr>
<tr><td><center>
<input type="text" name="ed_cr_3" placeholder="eg:H.S.C" style="width:150px" maxlength="100">
</td>
<td><center>
<input type="text" name="ed_bd_3" placeholder="eg:School/Institution name" style="width:200px" maxlength="100">
</td>
<td><center>
<input type="text" name="ed_yr_3" placeholder="eg:May 2014" style="width:150px" maxlength="100">
</td>
<td><center>
<input type="text" name="ed_perc_3" placeholder="eg:97.90%" style="width:80px" maxlength="100">
</td>
</tr>
<tr><td><center>
<input type="text" name="ed_cr_4" style="width:150px" maxlength="100">
</td>
<td><center>
<input type="text" name="ed_bd_4" style="width:200px" maxlength="100">
</td>
<td><center>
<input type="text" name="ed_yr_4" style="width:150px" maxlength="100">
</td>
<td><center>
<input type="text" name="ed_perc_4" style="width:80px" maxlength="100">
</td>
</tr>
<tr><td><center>
<input type="text" name="ed_cr_5" style="width:150px" maxlength="100">
</td>
<td><center>
<input type="text" name="ed_bd_5" style="width:200px" maxlength="100">
</td>
<td><center>
<input type="text" name="ed_yr_5" style="width:150px" maxlength="100">
</td>
<td><center>
<input type="text" name="ed_perc_5" style="width:80px" maxlength="100">
</td>
</tr>
<tr><td><center>
<input type="text" name="ed_cr_6" style="width:150px" maxlength="100">
</td>
<td><center>
<input type="text" name="ed_bd_6" style="width:200px" maxlength="100">
</td>
<td><center>
<input type="text" name="ed_yr_6" style="width:150px" maxlength="100">
</td>
<td><center>
<input type="text" name="ed_perc_6" style="width:80px" maxlength="100">
</td>
</tr>
</table>
</TD>
</TR>

<TR>
<TD></TD>
<TD><br>
<b>Are you a fresher ?</b>
<select name="fresh" required>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
</TD>
</TR>

<TR><TD colspan ='2'><br><center><b>Experience Details<i> (If fresher, leave below fields empty)</i></TD></TR>
<TR>
<TD  colspan ='2'>
<center>
<table border='1'>
<tr>
<td><center><b>Position Held</td>
<td><center><b>Name of the Institution</td>
<td><center><b>Period</td>
</tr>
<tr><td><center>
<input type="text" name="ex_pos_1" placeholder='eg:Teacher' style="width:200px" maxlength="100">
</td>
<td><center>
<input type="text" name="ex_ins_1" placeholder='eg:University/College name' style="width:250px" maxlength="100">
</td>
<td><center>
<input type="text" name="ex_prd_1" placeholder='eg:2013-2014' style="width:100px" maxlength="100">
</td>
</tr>
<tr><td><center>
<input type="text" name="ex_pos_2" placeholder='' style="width:200px" maxlength="100">
</td>
<td><center>
<input type="text" name="ex_ins_2" placeholder='' style="width:250px" maxlength="100">
</td>
<td><center>
<input type="text" name="ex_prd_2" placeholder='' style="width:100px" maxlength="100">
</td>
</tr>
<tr><td><center>
<input type="text" name="ex_pos_3" placeholder='' style="width:200px" maxlength="100">
</td>
<td><center>
<input type="text" name="ex_ins_3" placeholder='' style="width:250px" maxlength="100">
</td>
<td><center>
<input type="text" name="ex_prd_3" placeholder='' style="width:100px" maxlength="100">
</td>
</tr>
<tr><td><center>
<input type="text" name="ex_pos_4" placeholder='' style="width:200px" maxlength="100">
</td>
<td><center>
<input type="text" name="ex_ins_4" placeholder='' style="width:250px" maxlength="100">
</td>
<td><center>
<input type="text" name="ex_prd_4" placeholder='' style="width:100px" maxlength="100">
</td>
</tr>
<tr><td><center>
<input type="text" name="ex_pos_5" placeholder='' style="width:200px" maxlength="100">
</td>
<td><center>
<input type="text" name="ex_ins_5" placeholder='' style="width:250px" maxlength="100">
</td>
<td><center>
<input type="text" name="ex_prd_5" placeholder='' style="width:100px" maxlength="100">
</td>
</tr>
<tr><td><center>
<input type="text" name="ex_pos_6" placeholder='' style="width:200px" maxlength="100">
</td>
<td><center>
<input type="text" name="ex_ins_6" placeholder='' style="width:250px" maxlength="100">
</td>
<td><center>
<input type="text" name="ex_prd_6" placeholder='' style="width:100px" maxlength="100">
</td>
</tr>
</table>
</TD>
</TR>

<TR>
<TD><b>Address</b></TD>
<TD>
<textarea name="addr" rows="4" cols="30" maxlength="100" required>
</textarea>
</TD>
</TR>

<TR>
<TD><b>Region</b></TD>
<TD>
<input type="text" name="regn" placeholder='eg:Mannargudi' style="width:170px" maxlength="50" required>
</TD>
</TR>

<TR>
<TD><b>City</b></TD>
<TD>
<input type="text" name="cty" placeholder='eg:Thiruvarur' style="width:170px" maxlength="50" required>
</TD>
</TR>

<TR>
<TD><b>Post Preference</b></TD>
<TD>
<select name="post_pref" required>
<option value="Teaching">Teaching</option>
<option value="Non-Teaching">Non-Teaching</option>
<option value="Typist">Typist</option>
<option value="Clerk">Clerk</option>
<option value="Office Assistant">Office Assistant</option>
<option value="Manager">Manager</option>
<option value="Cashier">Cashier</option>
<option value="ANY">ANY</option>
</select>
</TD>
</TR>

<TR>
<TD><b>Subject Preference</b></TD>
<TD>
<select name="sub_pref" required>
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
</select>
</TD>
</TR>

<TR>
<TD><b>Landline no</b></TD>
<TD>
<input type="text" name="lan_no" style="width:200px" maxlength="15" required>
</TD>
</TR>

<TR>
<TD><b>Mobile no</b></TD>
<TD>
<input type="text" name="mob_no" placeholder='For contact purpose' style="width:130px" maxlength="13" required>
</TD>
</TR>

<TR>
<TD><b>Email-Id</b></TD>
<TD>
<input type="email" name="eid" placeholder='For contact purpose' style="width:200px" maxlength="80" required>
</TD>
</TR>

<TR>
<TD><b></b></TD>
<TD>
<input type="checkbox" name="agreed" required><b><i>
I assure that all details submitted above are true</i></b>
</TD>
</TR>

<TR>
<TD><b></b></TD>
<TD>
&nbsp;&nbsp;&nbsp;<input type="submit"  name="ressub" value="Submit" style="height:30px;width:100px">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value="Clear Data" style="height:30px;width:100px">
</TD>
</TR>
</table>
</form>
</i>
</center>

</body>
</html>