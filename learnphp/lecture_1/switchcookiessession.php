<?php
//session area
session_start();

$_SESSION['s_data'] = "Pushkar";//super global variable
echo $_SESSION['s_data'];
$_SESSION['data_array'] = ["Pushkar","Suniel","Archana","Dadu"];//super global variable

//session_destroy();//destroy session