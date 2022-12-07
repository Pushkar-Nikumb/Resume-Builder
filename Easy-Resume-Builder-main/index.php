 <?php include 'dbconnect.php'; ?>

<!DOCTYPE html>
<html lang="en-US">

<head>
      <title>Build Free Resume In Just 5 Minut | <?php echo $domain; ?></title>
      <meta name="title" content="Build Free Resume In Just 5 Minut | <?php echo $domain; ?>">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="language" content="English">
      <meta name="description" content="Impressive Resumes Made Easy! Get hired with the professional Perfect Resume that will make you stand out of the crowd! Start Now!">
      <meta name="keywords" content="<?php echo $keyword ?>">
      <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
      <meta name="robots" content="index, follow">
      <meta name="url" content="https://<?php echo $domain; ?>/">
      <meta name="author" content="Vinod Kumar">
      <link rel="canonical" href="https://<?php echo $domain; ?>/" />
      <meta name="generator" content="HTML 5 and PHP 7.1" />

      <!-- Meta OG Property -->
      <meta property="og:locale" content="en_US" />
      <meta property="og:type" content="website" />
      <meta property="og:title" content="Build Free Resume In Just 5 Minut | <?php echo $domain; ?>" />
      <meta property="og:description" content="Impressive Resumes Made Easy! Get hired with the professional Perfect Resume that will make you stand out of the crowd! Start Now!" />
      <meta property="og:url" content="https://<?php echo $domain; ?>/" />
      <meta property="og:site_name" content="<?php echo $domain; ?>" />

      <!-- Twitter Card -->
      <meta name="twitter:card" content="summary" />
      <meta name="twitter:description" content="Impressive Resumes Made Easy! Get hired with the professional Perfect Resume that will make you stand out of the crowd! Start Now!" />
      <meta name="twitter:title" content="Build Free Resume In Just 5 Minut | <?php echo $domain; ?>" />

      <!-- Base URL Set -->
      <base href="<?php echo $url ?>">

      <!--- Include CSS files --->
      <?php include"sitestyle.php"; ?>

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

<?php  include 'navbar.php'; ?>

<!-- Header -->
<div class="intro-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro-message">
                    <h1>Resume Builder</h1>
                    <h3>Create beautiful, professional resumes in minutes, free.</h3>
                    <hr class="intro-divider">
                    <ul class="list-inline intro-social-buttons">
                        <li>
                            <a href="<?php echo $url.'resume/introduction' ?>" class="btn btn-default btn-lg"> <span class="network-name">Create Resume Now</span></a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
</div>

<!-- Step For Ceate Resume --->
<div class="container-fluid bg-primary text-light text-center">
    <br>
    <span class="h2">3 EASY STEPS TO CREATE YOUR PERFECT RESUME</span>
    <br><br><br><br>
    <div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <picture class="icons">
                 <img  width="20"  height="30" src="/img/icon-cv.svg" alt="icon-cv">
            </picture>
            <br><br><br>
            <span class="text-center h4 tbold">
                CHOOSE YOUR <br> RESUME TEMPLATE
            </span>
            <br><br>
            <span class="text-center h4">
                Our professional resume templates are designed strictly following all industry guidelines and best practices
                employers are looking for.
            </span>
            <br><br><br><br>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <picture class="icons">
                 <img  width="20"  height="30" src="/img/icon-pen.svg" alt="icon-cv">
            </picture>
            <br><br><br>
            <span class="text-center h4 tbold">
                SHOW WHAT <br> YOU'RE MADE OF
            </span>
            <br><br>
            <span class="text-center h4">
                Not finding the right words to showcase yourself? We´ve added thousands of pre-written examples and resume samples. As easy as a click.
            </span>
            <br><br><br><br>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <picture class="icons">
                 <img  width="20"  height="30" src="/img/icon-download.svg" alt="icon-cv">
            </picture>
            <br><br><br>
            <span class="text-center h4 tbold">
                DOWNLOAD <br> YOUR RESUME
            </span>
            <br><br>
            <span class="text-center h4">
                Start impressing employers. Download your awesome resume and land the job you are looking for, effortlessly.
            </span>
            <br><br><br><br>
        </div>
        <br><br><br>
    </div></div>
</div>

<br><br>

<div class="container" >
    <h2 class="text-center tbold">
        <?php echo strtoupper($sitename); ?>
    </h2>
    <br>
    <p class="h4">
        Impressive Resumes Made Easy! Get hired with the professional Resume Builder that will make you stand out of the crowd! Start Now!.
    </p>
    <p class="h4">
        This is what you can expect from our easy resume builder:
    </p>
    <ul class="h4">
       <li> Advanced resume building technology </li>
       <li> HR-approved professional templates </li>
       <li> An easy to use platform </li>
       <li> Real-time reviews as you build your document </li>
       <li> A library of stellar examples for you to base your new resume on </li>
    </ul>
    <p class="h4">Ready to get started? Start To Build your resume  today!</p>

    <br><br>
    <p class="text-center">
     <a href="<?php echo $url.'resume/introduction' ?>" class="btn btn-danger btn-lg">Create Resume Now</a>
    </p>
</div>

<?php include 'footer.php'; ?>

</body>
</html>
