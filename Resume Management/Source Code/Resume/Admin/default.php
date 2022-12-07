<?php
include_once("bg.php");
?>
<body>
</br></br></br></br>
<center>
<h2>Sri Shanmuka Matriculation Higher Secondary School<h2>
<h2><font color='blue'>(Main School)&(Bypass School)</font><h2>
<h3>Resume Login</h3>
<table border="20" height="100" cellpadding="10" bordercolor='#21DBD9' bgcolor='#E5F4F4'>
<form action="logincheck.php" method="POST" autocomplete="off">
<TR>
<TD><b>User-Id</b></TD>
<TD>
<input type="email" name="uid" style="width:180px;height:20px" required>
</TD>
</TR>
<TR>
<TD><b>Password</b></TD>
<TD>
<input type="password" name="pwd" style="width:180px;height:20px" required>
</TD>
</TR>
<TR>
<TD><b></b></TD>
<TD>
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="Log-In" name="loger" style="height:30px;width:80px">
</form>
</table>
</center>