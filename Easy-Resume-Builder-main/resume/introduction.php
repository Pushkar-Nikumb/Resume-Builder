 <?php include '../dbconnect.php'; ?>

<!DOCTYPE html>
<html lang="en-US">

<head>
      <title>Resume-Introduction | <?php echo $domain; ?></title>
      <meta name="title" content="Resume-Introduction | <?php echo $domain; ?>">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="language" content="English">
      <meta name="description" content="Impressive Resumes Made Easy! Get hired with the professional Perfect Resume that will make you stand out of the crowd! Start Now!">
      <meta name="keywords" content="<?php echo $keyword ?>">
      <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
      <meta name="robots" content="index, follow">
      <meta name="url" content="https://<?php echo $domain; ?>/resume/introduction">
      <meta name="author" content="Vinod Kumar">
      <link rel="canonical" href="https://<?php echo $domain; ?>/resume/introduction" />
      <meta name="generator" content="HTML 5 and PHP 7.1" />

      <!-- Meta OG Property -->
      <meta property="og:locale" content="en_US" />
      <meta property="og:type" content="website" />
      <meta property="og:title" content="Resume-Introduction | <?php echo $domain; ?>" />
      <meta property="og:description" content="Impressive Resumes Made Easy! Get hired with the professional Perfect Resume that will make you stand out of the crowd! Start Now!" />
      <meta property="og:url" content="https://<?php echo $domain; ?>/resume/introduction" />
      <meta property="og:site_name" content="<?php echo $domain; ?>" />

      <!-- Twitter Card -->
      <meta name="twitter:card" content="summary" />
      <meta name="twitter:description" content="Impressive Resumes Made Easy! Get hired with the professional Perfect Resume that will make you stand out of the crowd! Start Now!" />
      <meta name="twitter:title" content="Resume-Introduction | <?php echo $domain; ?>" />

      <!-- Base URL Set -->
      <base href="<?php echo $url ?>">

      <!--- Include CSS files --->
      <?php include"../sitestyle.php"; ?>

      <!-- Inline CSS --->
      <style type="text/css">
          #home{
            background: rgba(0,0,0,0.9);
            color: white;
            border-radius: 3px;
 
          }
      </style>
</head>

<body>

<?php  include '../navbar.php'; ?>
<br><br><br>
<div class="container">
      <h2 class="text-center tbold">BUILDING A PERFECT RESUME HAS NEVER BEEN THIS EASY!</h2>
</div>
<br><br>
<div class="row">
      <div class="col-md-1 col-sm-1"></div>
      <div class="col-md-3 col-sm-3">
            <div class="text-center bd">
                  <span style="font-size: 20px;">1</span><br>
                  <img  width="130"  height="240" src="/img/icon-cv2.svg" alt="icon-cv" >
            </div>
            <div class="text-center">
                  <br>
                  <h4>Choose a professional<br>resume template</h4>
            </div>
      </div>
      
      <div class="col-md-3 col-sm-3" style="margin-left: 25px;">
            
            <div class="text-center bd">
                  <span style="font-size: 20px;">2</span><br>
                  <img  width="150"  height="240" src="/img/icon-build.svg" alt="icon-cv" >
            </div>
            <div class="text-center">
                  <br>
                  <h4>Build your resume using our <br> pre-written examples</h4>
            </div>
      </div>


      <div class="col-md-3 col-sm-3" style="margin-left: 25px;">
            <div class="text-center bd">
                  <span style="font-size: 20px;">3</span><br>
                  <img  width="150"  height="240" src="/img/icon-download2.svg" alt="icon-cv" >
            </div>
            <div class="text-center">
                  <br>
                  <h4>Download your resume and start <br> impressing employers</h4>
            </div>
      </div>
</div>
      <br><br>
    <p class="text-center">
     <a href="<?php echo $url.'resume/templates' ?>" class="btn btn-warning btn-lg">Choose Your Template</a>
    </p>

<?php include '../footer.php'; ?>

</body>
</html>