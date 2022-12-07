<?php include '../dbconnect.php'; ?>

<!DOCTYPE html>
<html lang="en-US">

<head>
      <title>Contact Us | <?php echo $domain; ?></title>
      <meta name="title" content="Contact Us | <?php echo $domain; ?>">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="language" content="English">
      <meta name="description" content="HQuestions? Enquiries? Suggestions? Existential doubts? Our teams are ready to hear about them!.">
      <meta name="keywords" content="<?php echo $keyword ?>">
      <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
      <meta name="robots" content="index, follow">
      <meta name="url" content="https://<?php echo $domain.'/contact-us'; ?>/">
      <meta name="author" content="Vinod Kumar">
      <link rel="canonical" href="https://<?php echo $domain.'/contact-us'; ?>/" />
      <meta name="generator" content="HTML 5 and PHP 7.1" />

      <!-- Meta OG Property -->
      <meta property="og:locale" content="en_US" />
      <meta property="og:type" content="article" />
      <meta property="og:title" content="Contact Us | <?php echo $domain; ?>" />
      <meta property="og:description" content="Questions? Enquiries? Suggestions? Existential doubts? Our teams are ready to hear about them!." />
      <meta property="og:url" content="https://<?php echo $domain.'/contact-us'; ?>/" />
      <meta property="og:site_name" content="<?php echo $domain; ?>" />

      <!-- Twitter Card -->
      <meta name="twitter:card" content="summary" />
      <meta name="twitter:description" content="Questions? Enquiries? Suggestions? Existential doubts? Our teams are ready to hear about them!." />
      <meta name="twitter:title" content="Contact Us | <?php echo $domain; ?>" />

      <!-- Base URL Set -->
      <base href="<?php echo $url ?>">

      <!--- Include CSS files --->
      <?php include"../sitestyle.php"; ?>

      <!-- Inline CSS --->
      <style type="text/css">
          #contact{
            background: rgba(0,0,0,0.9);
            color: white;
            border-radius: 3px;
 
          }
          body{
               background: #ECEFF2;
          }
      </style>
</head>

<body>

<?php  include '../navbar.php'; ?>

<div class="intro-about">
<div class="container-fluid ">
      <h1 class="tbold">CONTACT US</h1>
      <p class="h4">Questions? Enquiries? Suggestions? Existential doubts? Our teams are ready to hear about them!</p>
      
      <p class="h4">To get in touch with us, you can write mail directly to <?php echo $gmail; ?></p>
      
      <br><br>
      <p class="text-center">
        <a href="mailto:<?php echo $gmail ?>" class="btn btn-success btn-lg">Send Me Mail</a>
      </p>

      <br><br><br>
      <p class="text-center">
        <a href="<?php echo $url.'resume/introduction' ?>" class="btn btn-danger btn-lg">Create Resume Now</a>
      </p>

</div>


<?php include '../footer.php'; ?>
</body>
</html>