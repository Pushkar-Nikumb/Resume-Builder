<?php


               // Database Connection
                    $host = "localhost";
                    $db_name = "resume";
                    $username = "root";
                    $pass = "";

                    // connect to mysql
                    $con = mysqli_connect($host,$username,$pass,$db_name);
                    if (mysqli_connect_errno()){
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    die();
                    }

                    // for fetch basic details
                    $sqlcommand ="SELECT * FROM basic";
                    $result = mysqli_query($con,$sqlcommand);
                    $rowdata = mysqli_fetch_array($result);

					$url 		= 	$rowdata['url'];

					$domain 	= 	"localhost";

					$keyword 	= 	$rowdata['keyword'];

					$sitename 	= 	$rowdata['sitename'];

					$face 		= 	$rowdata['facebook'];

					$insta 		= 	$rowdata['instagram'];

					$twitter 	= 	$rowdata['twitter'];

					$linkdin 	= 	$rowdata['linkden'];

					$gmail		=   $rowdata['gmail'];






                         $url           =    "https://localhost/erb";

                         $domain   =    "localhost";

                         $keyword  =    "resume, reusume buillder, resume maker";

                         $sitename      =    "Easy Resume Build";

                         $face          =    'https://facebook.com/';

                         $insta         =    'https://instagram.com/';

                         $twitter  =    'https://twitter.com/'; 

                         $linkdin  =    'https://linkden.com/';

                         $gmail         =  'dempmail@gmail.com';


?>