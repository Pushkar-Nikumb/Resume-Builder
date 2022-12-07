<?php
include_once("config.php");
if(isset($_POST['ressub']))
{
$name=mysql_real_escape_string($_POST['name']);
$f_name=mysql_real_escape_string($_POST['f_name']);
$dob=mysql_real_escape_string($_POST['dob']);
$gen=mysql_real_escape_string($_POST['gen']);
$mar_sta=mysql_real_escape_string($_POST['mar_sta']);
$relig=mysql_real_escape_string($_POST['relig']);
$comm=mysql_real_escape_string($_POST['comm']);
$lang1=mysql_real_escape_string($_POST['lang1']);
$lang2=mysql_real_escape_string($_POST['lang2']);
$lang3=mysql_real_escape_string($_POST['lang3']);
$ed_cr_1=mysql_real_escape_string($_POST['ed_cr_1']);
$ed_bd_1=mysql_real_escape_string($_POST['ed_bd_1']);
$ed_yr_1=mysql_real_escape_string($_POST['ed_yr_1']);
$ed_perc_1=mysql_real_escape_string($_POST['ed_perc_1']);
$ed_cr_2=mysql_real_escape_string($_POST['ed_cr_2']);
$ed_bd_2=mysql_real_escape_string($_POST['ed_bd_2']);
$ed_yr_2=mysql_real_escape_string($_POST['ed_yr_2']);
$ed_perc_2=mysql_real_escape_string($_POST['ed_perc_2']);
$ed_cr_3=mysql_real_escape_string($_POST['ed_cr_3']);
$ed_bd_3=mysql_real_escape_string($_POST['ed_bd_3']);
$ed_yr_3=mysql_real_escape_string($_POST['ed_yr_3']);
$ed_perc_3=mysql_real_escape_string($_POST['ed_perc_3']);
$ed_cr_4=mysql_real_escape_string($_POST['ed_cr_4']);
$ed_bd_4=mysql_real_escape_string($_POST['ed_bd_4']);
$ed_yr_4=mysql_real_escape_string($_POST['ed_yr_4']);
$ed_perc_4=mysql_real_escape_string($_POST['ed_perc_4']);
$ed_cr_5=mysql_real_escape_string($_POST['ed_cr_5']);
$ed_bd_5=mysql_real_escape_string($_POST['ed_bd_5']);
$ed_yr_5=mysql_real_escape_string($_POST['ed_yr_5']);
$ed_perc_5=mysql_real_escape_string($_POST['ed_perc_5']);
$ed_cr_6=mysql_real_escape_string($_POST['ed_cr_6']);
$ed_bd_6=mysql_real_escape_string($_POST['ed_bd_6']);
$ed_yr_6=mysql_real_escape_string($_POST['ed_yr_6']);
$ed_perc_6=mysql_real_escape_string($_POST['ed_perc_6']);
$fresh=mysql_real_escape_string($_POST['fresh']);
$ex_pos_1=mysql_real_escape_string($_POST['ex_pos_1']);
$ex_ins_1=mysql_real_escape_string($_POST['ex_ins_1']);
$ex_prd_1=mysql_real_escape_string($_POST['ex_prd_1']);
$ex_pos_2=mysql_real_escape_string($_POST['ex_pos_2']);
$ex_ins_2=mysql_real_escape_string($_POST['ex_ins_2']);
$ex_prd_2=mysql_real_escape_string($_POST['ex_prd_2']);
$ex_pos_3=mysql_real_escape_string($_POST['ex_pos_3']);
$ex_ins_3=mysql_real_escape_string($_POST['ex_ins_3']);
$ex_prd_3=mysql_real_escape_string($_POST['ex_prd_3']);
$ex_pos_4=mysql_real_escape_string($_POST['ex_pos_4']);
$ex_ins_4=mysql_real_escape_string($_POST['ex_ins_4']);
$ex_prd_4=mysql_real_escape_string($_POST['ex_prd_4']);
$ex_pos_5=mysql_real_escape_string($_POST['ex_pos_5']);
$ex_ins_5=mysql_real_escape_string($_POST['ex_ins_5']);
$ex_prd_5=mysql_real_escape_string($_POST['ex_prd_5']);
$ex_pos_6=mysql_real_escape_string($_POST['ex_pos_6']);
$ex_ins_6=mysql_real_escape_string($_POST['ex_ins_6']);
$ex_prd_6=mysql_real_escape_string($_POST['ex_prd_6']);
$addr=mysql_real_escape_string($_POST['addr']);
$regn=mysql_real_escape_string($_POST['regn']);
$cty=mysql_real_escape_string($_POST['cty']);
$post_pref=mysql_real_escape_string($_POST['post_pref']);
$sub_pref=mysql_real_escape_string($_POST['sub_pref']);
$lan_no=mysql_real_escape_string($_POST['lan_no']);
$mob_no=mysql_real_escape_string($_POST['mob_no']);
$eid=mysql_real_escape_string($_POST['eid']);


//Adding data into database

$sql="INSERT INTO resume(name,f_name,dob,gen,mar_sta,relig,comm,lang1,lang2,lang3,ed_cr_1,ed_bd_1,ed_yr_1,ed_perc_1,
ed_cr_2,ed_bd_2,ed_yr_2,ed_perc_2,ed_cr_3,ed_bd_3,ed_yr_3,ed_perc_3,ed_cr_4,ed_bd_4,ed_yr_4,ed_perc_4,ed_cr_5,
ed_bd_5,ed_yr_5,ed_perc_5,ed_cr_6,ed_bd_6,ed_yr_6,ed_perc_6,fresh,ex_pos_1,ex_ins_1,ex_prd_1,ex_pos_2,ex_ins_2,ex_prd_2,
ex_pos_3,ex_ins_3,ex_prd_3,ex_pos_4,ex_ins_4,ex_prd_4,ex_pos_5,ex_ins_5,ex_prd_5,
ex_pos_6,ex_ins_6,ex_prd_6,addr,regn,cty,post_pref,sub_pref,lan_no,mob_no,eid) VALUES('$name','$f_name','$dob','$gen','$mar_sta','$relig','$comm','$lang1','$lang2','$lang3','$ed_cr_1',
'$ed_bd_1','$ed_yr_1','$ed_perc_1','$ed_cr_2','$ed_bd_2','$ed_yr_2','$ed_perc_2','$ed_cr_3','$ed_bd_3','$ed_yr_3','$ed_perc_3',
'$ed_cr_4','$ed_bd_4','$ed_yr_4','$ed_perc_4','$ed_cr_5','$ed_bd_5','$ed_yr_5','$ed_perc_5','$ed_cr_6','$ed_bd_6','$ed_yr_6','$ed_perc_6',
'$fresh','$ex_pos_1','$ex_ins_1','$ex_prd_1','$ex_pos_2','$ex_ins_2','$ex_prd_2','$ex_pos_3','$ex_ins_3',
'$ex_prd_3','$ex_pos_4','$ex_ins_4','$ex_prd_4','$ex_pos_5','$ex_ins_5','$ex_prd_5','$ex_pos_6','$ex_ins_6','$ex_prd_6',
'$addr','$regn','$cty','$post_pref','$sub_pref','$lan_no','$mob_no','$eid')";

$result = mysql_query($sql);
if($result)
{
echo "<br><br><br><br><br><br><br><br><br><br><br><br>";
echo "<br><br><br><br><br><br><br><br><br><br><br><br>";
echo "<br><br><br><br><br><br><br><br><br><br><br><br>";
echo "<center><img src=images/oops1.PNG>";
echo "<br>";
echo "<center><h3>"."Your Resume Has been Updated in our Database,."."<br>"."We will contact you shortly after review..."."</h3></center>";
}
else 
{
echo "<br><br><br><br><br><br><br><br><br><br><br><br>";
echo "<br><br><br><br><br><br><br><br><br><br><br><br>";
echo "<br><br><br><br><br><br><br><br><br><br><br><br>";
echo "<center><img src=images/oops2.PNG>";
echo "<br>";
echo "<center><h3>"."Oops, You have already submitted your resume"."</h3></center>";

}
}
else
{
echo "<center><h3>"."Unauthorized Entry"."</h3></center>";
}
?>