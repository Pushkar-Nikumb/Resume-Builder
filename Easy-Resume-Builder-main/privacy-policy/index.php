<?php include '../dbconnect.php'; ?>

<!DOCTYPE html>
<html lang="en-US">

<head>
      <title>Privacy Policy | <?php echo $domain; ?></title>
      <meta name="title" content="Privacy Policy | <?php echo $domain; ?>">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="language" content="English">
      <meta name="description" content="This privacy policy has been compiled to better serve those who are concerned with how their ‘Personally Identifiable Information’ (PII).">
      <meta name="keywords" content="<?php echo $keyword ?>">
      <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
      <meta name="robots" content="index, follow">
      <meta name="url" content="https://<?php echo $domain.'/privacy-policy'; ?>/">
      <meta name="author" content="Vinod Kumar">
      <link rel="canonical" href="https://<?php echo $domain.'/privacy-policy'; ?>/" />
      <meta name="generator" content="HTML 5 and PHP 7.1" />

      <!-- Meta OG Property -->
      <meta property="og:locale" content="en_US" />
      <meta property="og:type" content="article" />
      <meta property="og:title" content="Privacy Policy | <?php echo $domain; ?>" />
      <meta property="og:description" content="This privacy policy has been compiled to better serve those who are concerned with how their ‘Personally Identifiable Information’ (PII)." />
      <meta property="og:url" content="https://<?php echo $domain.'/privacy-policy'; ?>/" />
      <meta property="og:site_name" content="<?php echo $domain; ?>" />

      <!-- Twitter Card -->
      <meta name="twitter:card" content="summary" />
      <meta name="twitter:description" content="This privacy policy has been compiled to better serve those who are concerned with how their ‘Personally Identifiable Information’ (PII)." />
      <meta name="twitter:title" content="Privacy Policy | <?php echo $domain; ?>" />

      <!-- Base URL Set -->
      <base href="<?php echo $url ?>">

      <!--- Include CSS files --->
      <?php include"../sitestyle.php"; ?>

      <!-- Inline CSS --->
      <style type="text/css">
          #privacy{
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
<div class="container-fluid " style="word-spacing: 5px;">
      <p class="h2 tbold">Privacy Policy<p>
      
      <p class="h4 tbold"><?php echo $domain; ?> Privacy Policy</p>
    
      <p class="h4">This privacy policy has been compiled to better serve those who are concerned with how their ‘Personally Identifiable Information’ (PII) is being used online. PII, as described in US privacy law and information security, is information that can be used on its own or with other information to identify, contact, or locate a single person, or to identify an individual in context. Please read our privacy policy carefully to get a clear understanding of how we collect, use, protect or otherwise handle your Personally Identifiable Information in accordance with our website.
      </p>
      <br>
      <p class="h4 tbold">What personal information do we collect from the people that visit our blog, website or app?</p>
   
      <p class="h4">
        In this blog i am not collect any type of data from users. because this site not required for sign up and other user data.
      </p>

      <br>
      <p class="h4 tbold">Do we use ‘cookies’?</p>
     
      <p class="h4">I am naver use cookies.</p>
      <br>
      <p class="h4 tbold">Contacting Us</p>
      <p class="h4">If there are any questions regarding this privacy policy, you may contact us using the information below.</p>
      <br>
      <p class="h4 tbold">Contact : <?php echo $gmail ?></p>
      <br>

      <a href="mailto:<?php echo $gmail ?>" class="btn btn-success btn-lg">Send Me Mail</a>

</div>
</div>
<?php include '../footer.php'; ?>
</body>
</html>