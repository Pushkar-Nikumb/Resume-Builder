<?php
$HTML = $_POST['txtHTML'];
$CSS = $_POST['txtCSS'];
$JAVASC = $_POST['txtJAVASCRIPT'];
$PYTHON = $_POST['txtPYTHON'];
$JAVA = $_POST['txtJAVA'];
$PHOTO = $_POST['txtPHOTOSHOP'];

$recNo = $_POST['txtRowNo'];
    
    $Servername = "localhost";
    $Username = "root";
    $Password = "";
    $Database_name = "resume_db";

    //connect to DATABASE MySql Server
    $Conn = mysqli_connect($Servername,$Username,$Password,$Database_name);
    if(!$Conn)
    {
        die("Connection to database Failed : ").mysqli_connect_error();
    }
    else
    {
        //echo "DAtabase Establised Successfully!!!";
    }
    $SQL_Query = "SELECT * FROM `biodata` WHERE ID = $recNo;";
    $Response = mysqli_query($Conn,$SQL_Query);

    if(mysqli_num_rows($Response) > 0)
    {
        $row = mysqli_fetch_assoc($Response);               
    }
    else{
        echo " NO database Found";
    }


    
?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Creative CV</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/aos.css?ver=1.1.0" rel="stylesheet">
    <link href="css/bootstrap.min.css?ver=1.1.0" rel="stylesheet">
    <link href="css/main.css?ver=1.1.0" rel="stylesheet">
    <noscript>
      <style type="text/css">
        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }
      </style>
    </noscript>
  </head>
  <body id="top">
    <header>
      
    </header>
    <div class="page-content">
      <div>
<div class="profile-page">
  <div class="wrapper">
    <div class="page-header page-header-small" filter-color="green">
      <div class="page-header-image" data-parallax="true" style="background-image: url('images/cc-bg-1.jpg')"></div>
      <div class="container">
        <div class="content-center">
          <div class="h2 title"><?php echo $row['Name']?></div>
          <p class="category text-white"><?php echo $row['SKILL_SET']?></p></div>
      </div>
      
    </div>
  </div>
</div>
<div class="section" id="about">
  <div class="container">
    <div class="card" data-aos="fade-up" data-aos-offset="10">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">About</div>
            <p><?php echo "PROFESSION : ".$row['Job_Description']?></p>
            <p><?php echo "FATHER NAME : ".$row['Father_Name']?> </p>
            <p><?php echo "COUNTRY : ".$row['Country']?> </p>

          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">Basic Information</div>
            
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">GENDER:</strong></div>
              <div class="col-sm-8"><?php echo $row['Gender']?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
              <div class="col-sm-8"><?php echo $row['EMAIL']?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Phone:</strong></div>
              <div class="col-sm-8"><?php echo $row['Contact_No']?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">UNIVERSITY:</strong></div>
              <div class="col-sm-8"><?php echo $row['UNIVERSITY']?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Phone:</strong></div>
              <div class="col-sm-8"><?php echo $row['Contact_No']?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Address:</strong></div>
              <div class="col-sm-8"><?php echo $row['Personal_Address']?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">MOTHER TONGUE:</strong></div>
              <div class="col-sm-8"><?php echo $row['LANGUAGE']?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section" id="skill">
  <div class="container">
    <div class="h4 text-center mb-4 title">Professional Skills</div>
    <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge">HTML</span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo "$HTML"."%"?>;"></div><span class="progress-value"><?php echo "$HTML"."%"?></span>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge">CSS</span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo "$CSS"."%"?>;"></div><span class="progress-value"><?php echo "$CSS"."%"?></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge">JavaScript</span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo "$JAVASC"."%"?>;"></div><span class="progress-value"><?php echo "$JAVASC"."%"?></span>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge">PYTHON</span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo "$PYTHON"."%"?>;"></div><span class="progress-value"><?php echo "$PYTHON"."%"?></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge">JAVA</span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo "$JAVA"."%"?>;"></div><span class="progress-value"><?php echo "$JAVA"."%"?></span>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge">Photoshop</span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo "$PHOTO"."%"?>;"></div><span class="progress-value"><?php echo "$PHOTO"."%"?></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
    </div>
    <footer class="footer">
      <div class="h4 title text-center"><?php echo $row['Name']?></div>
     
    </footer>
    <script src="js/core/jquery.3.2.1.min.js?ver=1.1.0"></script>
    <script src="js/core/popper.min.js?ver=1.1.0"></script>
    <script src="js/core/bootstrap.min.js?ver=1.1.0"></script>
    <script src="js/now-ui-kit.js?ver=1.1.0"></script>
    <script src="js/aos.js?ver=1.1.0"></script>
    <script src="scripts/main.js?ver=1.1.0"></script>
  </body>
</html>