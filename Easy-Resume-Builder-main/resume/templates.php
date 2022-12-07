 <?php include '../dbconnect.php'; 

 ?>

<!DOCTYPE html>
<html lang="en-US">

<head>
      <title>Resume-Templates | <?php echo $domain; ?></title>
      <meta name="title" content="Resume-Templates  | <?php echo $domain; ?>">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="language" content="English">
      <meta name="description" content="Impressive Resumes Made Easy! Get hired with the professional Perfect Resume that will make you stand out of the crowd! Start Now!">
      <meta name="keywords" content="<?php echo $keyword ?>">
      <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
      <meta name="robots" content="index, follow">
      <meta name="url" content="https://<?php echo $domain; ?>/resume/templates">
      <meta name="author" content="Vinod Kumar">
      <link rel="canonical" href="https://<?php echo $domain; ?>/resume/templates" />
      <meta name="generator" content="HTML 5 and PHP 7.1" />

      <!-- Meta OG Property -->
      <meta property="og:locale" content="en_US" />
      <meta property="og:type" content="article" />
      <meta property="og:title" content="Resume Templates  | <?php echo $domain; ?>" />
      <meta property="og:description" content="Impressive Resumes Made Easy! Get hired with the professional Perfect Resume that will make you stand out of the crowd! Start Now!" />
      <meta property="og:url" content="https://<?php echo $domain; ?>/resume/templates" />
      <meta property="og:site_name" content="<?php echo $domain; ?>" />

      <!-- Twitter Card -->
      <meta name="twitter:card" content="summary" />
      <meta name="twitter:description" content="Impressive Resumes Made Easy! Get hired with the professional Perfect Resume that will make you stand out of the crowd! Start Now!" />
      <meta name="twitter:title" content="Resume-Templates  | <?php echo $domain; ?>" />

      <!-- Base URL Set -->
      <base href="<?php echo $url ?>">

      <!--- Include CSS files --->
      <?php include"../sitestyle.php"; ?>
</head>

<body>

<?php  include '../navbar.php'; ?>


<div class="intro-about">
<div class="container" >
      <br>
      <h2 class="text-center">CHOOSE YOUR RESUME TEMPLATE</h2>
      <h5 class="text-center">Remember, you can always change your template later on.</h5>
      <br>
      <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12 template-file template-file__image thumbl">
              <form  method="post" action="resume/pro/information">
               <button type="submit" style="border: none; background: unset; " name="tmp" value="1">
                <img alt="Resume1" src="thumbnails/pro1.jpg" class="img img-responsive thumbnail " style="border: 1px solid grey;" />
                <span class="btn btn-primary btn-sm">Use This Template</span>
               </button></form>
            </div>   

            <div class="col-md-4 col-sm-6 col-xs-12 template-file template-file__image">
              <form  method="post" action="resume/information">
               <button type="submit" style="border: none; background: unset; " name="tmp" value="1">
                <img alt="Resume1" src="thumbnails/1.jpg" class="img img-responsive thumbnail " style="border: 1px solid grey;" />
                <span class="btn btn-primary btn-sm">Use This Template</span>
               </button></form>
            </div>  

            <div class="col-md-4 col-sm-6 col-xs-12 template-file template-file__image thumbr">
               <form  method="post" action="resume/information">
               <button type="submit" style="border: none; background: unset;" name="tmp" value="2">
                <img alt="Resume1" src="thumbnails/2.jpg" class="img img-responsive thumbnail " style="border: 1px solid grey;" />
                <span class="btn btn-primary btn-sm">Use This Template</span>
               </button></form>
            </div>  

            <div class="col-md-4 col-sm-6 col-xs-12 template-file template-file__image thumbl">
               <form  method="post" action="resume/information">
               <button type="submit" style="border: none; background: unset;" name="tmp" value="3">
                <img alt="Resume1" src="thumbnails/3.jpg" class="img img-responsive thumbnail " style="border: 1px solid grey;" />
                <span class="btn btn-primary btn-sm">Use This Template</span>
               </button></form>
            </div>                      

            <div class="col-md-4 col-sm-6 col-xs-12 template-file template-file__image">
              <form  method="post" action="resume/information">
               <button type="submit" style="border: none; background: unset;" name="tmp" value="4">
                <img alt="Resume1" src="thumbnails/4.jpg" class="img img-responsive thumbnail " style="border: 1px solid grey;" />
                <span class="btn btn-primary btn-sm">Use This Template</span>
                </button></form>
            </div>  

            <div class="col-md-4 col-sm-6 col-xs-12 template-file template-file__image thumbr ">
               <form  method="post" action="resume/information">
               <button type="submit" style="border: none; background: unset;" name="tmp" value="5">
                <img alt="Resume1" src="thumbnails/5.jpg" class="img img-responsive thumbnail " style="border: 1px solid grey;" />
                <span class="btn btn-primary btn-sm">Use This Template</span>
               </button></form>
            </div>  

            <div class="col-md-4 col-sm-6 col-xs-12 template-file template-file__image thumbl">
               <form  method="post" action="resume/information">
               <button type="submit" style="border: none; background: unset;" name="tmp" value="6">
                <img alt="Resume1" src="thumbnails/6.jpg" class="img img-responsive thumbnail " style="border: 1px solid grey;" />
                <span class="btn btn-primary btn-sm">Use This Template</span>
               </button></form>
            </div>                      

            <div class="col-md-4 col-sm-6 col-xs-12 template-file template-file__image ">
               <form  method="post" action="resume/information">
               <button type="submit" style="border: none; background: unset;" name="tmp" value="7">
                <img alt="Resume1" src="thumbnails/7.jpg" class="img img-responsive thumbnail " style="border: 1px solid grey;" />
                <span class="btn btn-primary btn-sm">Use This Template</span>
               </button></form>
            </div>                     
      </div>
</div>
<br><br><br><br>
</div>
<?php include '../footer.php'; ?>

</body>
</html>
