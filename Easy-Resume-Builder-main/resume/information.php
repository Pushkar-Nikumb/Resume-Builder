 <?php include '../dbconnect.php'; 

  $cont = 0;
 ?>

<!DOCTYPE html>
<html lang="en-US">

<head>
      <title>Resume-Information | <?php echo $domain; ?></title>
      <meta name="title" content="Resume-Information | <?php echo $domain; ?>">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="language" content="English">
      <meta name="description" content="Impressive Resumes Made Easy! Get hired with the professional Perfect Resume that will make you stand out of the crowd! Start Now!">
      <meta name="keywords" content="<?php echo $keyword ?>">
      <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
      <meta name="robots" content="index, follow">
      <meta name="url" content="https://<?php echo $domain; ?>/resume/information">
      <meta name="author" content="Vinod Kumar">
      <link rel="canonical" href="https://<?php echo $domain; ?>/resume/information" />
      <meta name="generator" content="HTML 5 and PHP 7.1" />

      <!-- Meta OG Property -->
      <meta property="og:locale" content="en_US" />
      <meta property="og:type" content="article" />
      <meta property="og:title" content="Resume-Information  | <?php echo $domain; ?>" />
      <meta property="og:description" content="Impressive Resumes Made Easy! Get hired with the professional Perfect Resume that will make you stand out of the crowd! Start Now!" />
      <meta property="og:url" content="https://<?php echo $domain; ?>/resume/information" />
      <meta property="og:site_name" content="<?php echo $domain; ?>" />

      <!-- Twitter Card -->
      <meta name="twitter:card" content="summary" />
      <meta name="twitter:description" content="Impressive Resumes Made Easy! Get hired with the professional Perfect Resume that will make you stand out of the crowd! Start Now!" />
      <meta name="twitter:title" content="Resume-Information  | <?php echo $domain; ?>" />

      <!-- Base URL Set -->
      <base href="<?php echo $url ?>">

      <!--- Include CSS files --->
      <?php include"../sitestyle.php"; ?>

      <!-- Linear CSS --->
      <style type="text/css">
        #education, #skill, #experience, #download{
          display: none;
        }
      </style>
</head>

<body>

<?php  include'../navbar.php'; ?>


<br><br><br>
<div class="container ">
  <h4 class="text-center ">Required field is marked *</h4>
<form action="output/resume

<?php
echo $_POST['tmp'];
?>" method="post" class="basic-grey">
<div class="col-md-1"></div>
  <div class="col-lg-10">
    <div class="cwell ">
            
        <!-- Personal Information -->
        <div id="basic" >   
        <div class="row">       
            <div class="col-sm-12 ">
                 <h1 class="text-center text-danger">Personal Information</h1>
                 <p class="text-center">Employers will use this information to contact you.</p>
                <br><br>
            </div>
            

            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                    <span>* Full Name: </span><br>
                    <input name="name" placeholder="eg.&nbsp; jame lee"  type="text" class="form-control" required="required" />
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                    <span>* Address:</span><br>
                    <input name="address" placeholder="eg. &nbsp;New Yourk USA"  type="text" class="form-control" required="required" />
                </div>
            </div>
       
             <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                    <span>Phone Number:</span><br>
                    <input name="phone" placeholder="eg.&nbsp; 9999999999"  type="Number" class="form-control" />
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                    <span>* Email:</span><br>
                    <input name="email" placeholder="eg. &nbsp;sample@gmail.com"  type="email" class="form-control" required="required" />
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                     <span>Objective:</span><br>
                     <textarea name="object" type="text" placeholder="eg.&nbsp; i need job for money." class="form-control"></textarea>
                </div>
            </div>
            
        </div>
      
      <div class="row">
        <div class="col-md-1 col-sm-1 col-xs-1 ">
              <a href="<?php echo $url."resume/templates" ?>" class="btn btn-danger">&lt;&lt;BACK</a>
        </div>
        
         <div class="col-md-11 col-sm-11 col-xs-11 text-right">
              <a onclick="foreducation()" class="btn btn-danger ">NEXT&gt;&gt;</a> 
        </div>
      </div>
    </div>
      
        <!-- Education Information -->
        <div id="education">
          <div class="row">
            <div class="col-sm-12 ">
                
                <h1 class="text-center text-danger">Education</h1>
                <p class="text-center">Add information about your educational background.</p>
                <br><br>
            </div>
            

            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                  <span>Education 1</span><br>
                    <input name="ed1" placeholder="eg.&nbsp; school 10th"  type="text" class="form-control" />
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                    <span>Education 2</span><br>
                    <input name="ed2" placeholder="eg.&nbsp; school 12th"  type="text" class="form-control"/>
                </div>
            </div>
       
             <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                    <span>Education 3</span><br>
                    <input name="ed3" placeholder="eg.&nbsp; graduation"  type="text" class="form-control" />
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                    <span>Education 4</span><br>
                    <input name="ed4" placeholder="eg. &nbsp;Phd"  type="text" class="form-control" />
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                  <span>Education 5</span><br>
                     <input name="ed5" placeholder="eg.&nbsp; other" type="text" class="form-control"  />
                </div>
            </div>
        </div>
        
        <div class="row">
        <div class="col-md-1 col-sm-1 col-xs-1">
              <a onclick="forbasic()" class="btn btn-danger">&lt;&lt;BACK</a>
        </div>

         <div class="col-md-11 col-sm-11 col-xs-11 text-right ">
              <a onclick="forskill()" class="btn btn-danger ">NEXT&gt;&gt;</a> 
        </div>
      </div>
    </div>

        <!-- Skills  Information -->
        <div id="skill">
          <div class="row">
            <div class="col-sm-12">
                
                <h1 class="text-center text-danger">Skills & Abilities</h1>
                <p class="text-center">Highlight of your 3 top skills.</p>
                <br><br>
            </div>
            

            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                  <span>Skills 1</span><br>
                    <input name="ski" placeholder="eg.&nbsp; Photography" type="text" class="form-control" />
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                    <span>Skills 2</span><br>
                    <input name="ski" placeholder="eg.&nbsp; Pyhton"  type="text" class="form-control"/>
                </div>
            </div>
       
             <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                    <span>Skills 3</span><br>
                    <input name="ski2" placeholder="eg.&nbsp; Data Entry"  type="text" class="form-control" />
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                    <span>Skills 4</span><br>
                    <input name="ski3" placeholder="eg.&nbsp; Typing"  type="text" class="form-control" />
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-md-1 col-sm-1 col-xs-1">
              <a onclick="foreducation()" class="btn btn-danger">&lt;&lt;BACK</a>
        </div>

         <div class="col-md-11 col-sm-11 col-xs-11 text-right">
              <a onclick="forexperience()" class="btn btn-danger ">NEXT&gt;&gt;</a> 
        </div>
      </div>
    </div>

      
        <!-- Experience Information -->
        <div id="experience">
          <div class="row">
            <div class="col-sm-12">
                
                <h1 class="text-center text-danger">Experience</h1>
                <p class="text-center">List your work experience, from the most recent to the oldest. Feel free to use our pre-written examples.
</p>
                <br><br>
            </div>
            

            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                    <span>Work 1:</span><br>
                    <input name="tit_ex" placeholder="eg.&nbsp; Project 1" type="text" class="form-control" />
                    <textarea name="desc_ex" placeholder="eg.&nbsp; Project 1 Description" class="form-control mt"></textarea>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                    <span>Work 2:</span><br>
                    <input name="tit_ex2" placeholder="eg.&nbsp; Project 2" type="text" class="form-control" />
                    <textarea name="desc_ex2" placeholder="eg.&nbsp; Project 2 Description" class="form-control mt"></textarea>
                </div>
            </div>
       
             <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                    <span>Work 3:</span><br>
                    <input name="tit_ex3" placeholder="eg.&nbsp; Project 3" type="text" class="form-control" />
                    <textarea name="desc_ex3" placeholder="eg.&nbsp; Project 3 Description" class="form-control mt"></textarea>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                    <span>Work 4:</span><br>
                    <input name="tit_ex4" placeholder="eg.&nbsp; Project 4" type="text" class="form-control" />
                    <textarea name="desc_ex4" placeholder="eg.&nbsp; Project 4 Description" class="form-control mt"></textarea>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                    <span>Work 5:</span><br>
                    <input name="tit_ex5" placeholder="eg.&nbsp; Project 5" type="text" class="form-control" />
                    <textarea name="desc_ex5" placeholder="eg. &nbsp;Project 5 Description" class="form-control mt"></textarea>
                </div>
            </div>            
        </div>
        


    <div class="text-center" >
        <br>
    <button class="btn btn-success btn-lg tbold" name="sub" value="print">Print</button> &nbsp;&nbsp; 
    <button class="btn btn-info btn-lg tbold" name="sub" value="doc">Download</button>
    <br><br>
      <p><font color="red">Note:</font> if you have any problem for submission please fill out the required field.</p>
    <br>
    <br>
    </div>
  
  <div class="row">
        <div class="col-md-1 col-sm-1 col-xs-1">
              <a onclick="forskill()" class="btn btn-danger">&lt;&lt;BACK</a>
        </div>
  </div>
</div>
</div></div>
<div class="col-md-1"></div>
</form>
</div>

<?php include '../footer.php'; ?>

<!-- Javascript --->
<script type="text/javascript">
  function forbasic() {
    var b = document.getElementById("basic");
    var e = document.getElementById("education");
    var s = document.getElementById("skill");
    var ex = document.getElementById("experience");
    var d = document.getElementById("download");

    b.style.display = "block";
    e.style.display = "none";
    s.style.display = "none";
    ex.style.display = "none";
    d.style.display = "none";  
  }

    function foreducation() {
    var b = document.getElementById("basic");
    var e = document.getElementById("education");
    var s = document.getElementById("skill");
    var ex = document.getElementById("experience");
    var d = document.getElementById("download");

    b.style.display = "none";
    e.style.display = "block";
    s.style.display = "none";
    ex.style.display = "none";
    d.style.display = "none";  
  }


  function forskill() {
    var b = document.getElementById("basic");
    var e = document.getElementById("education");
    var s = document.getElementById("skill");
    var ex = document.getElementById("experience");
    var d = document.getElementById("download");

    b.style.display = "none";
    e.style.display = "none";
    s.style.display = "block";
    ex.style.display = "none";
    d.style.display = "none";  
  }


  function forexperience() {
    var b = document.getElementById("basic");
    var e = document.getElementById("education");
    var s = document.getElementById("skill");
    var ex = document.getElementById("experience");
    var d = document.getElementById("download");

    b.style.display = "none";
    e.style.display = "none";
    s.style.display = "none";
    ex.style.display = "block";
    d.style.display = "none";  
  }

</script>

</body>
</html>