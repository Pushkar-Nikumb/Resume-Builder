 <?php include '../../dbconnect.php'; 

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
      <meta name="url" content="https://<?php echo $domain; ?>/resume/pro/information">
      <meta name="author" content="Vinod Kumar">
      <link rel="canonical" href="https://<?php echo $domain; ?>/resume/pro/information" />
      <meta name="generator" content="HTML 5 and PHP 7.1" />

      <!-- Meta OG Property -->
      <meta property="og:locale" content="en_US" />
      <meta property="og:type" content="article" />
      <meta property="og:title" content="Resume-Information  | <?php echo $domain; ?>" />
      <meta property="og:description" content="Impressive Resumes Made Easy! Get hired with the professional Perfect Resume that will make you stand out of the crowd! Start Now!" />
      <meta property="og:url" content="https://<?php echo $domain; ?>/resume/pro/information" />
      <meta property="og:site_name" content="<?php echo $domain; ?>" />

      <!-- Twitter Card -->
      <meta name="twitter:card" content="summary" />
      <meta name="twitter:description" content="Impressive Resumes Made Easy! Get hired with the professional Perfect Resume that will make you stand out of the crowd! Start Now!" />
      <meta name="twitter:title" content="Resume-Information  | <?php echo $domain; ?>" />

      <!-- Base URL Set -->
      <base href="<?php echo $url ?>">

      <!--- Include CSS files --->
      <?php include"../../sitestyle.php"; ?>

      <!-- Linear CSS --->
      <style type="text/css">
        #education, #skill, #experience, #download, #mysum, #myhobby{
          display: none;
        }
      </style>
</head>

<body>

<?php  include'../../navbar.php'; ?>


<br><br><br>
<div class="container ">
  <h3 class="text-center ">Required field is marked *</h3>
<form action="resume/pro/" method="post" enctype="multipart/form-data" class="basic-grey">
<div class="col-md-1"></div>
  <div class="col-lg-10">
    <div class="cwell ">
            
        <!-- SUMMARY -->
        <div id="mysum">   
        <div class="row">       
            <div class="col-sm-12 ">
                 <h1 class="text-center text-danger">About Me</h1>
                 <p class="text-center">Write a short summary telling more about yourself, your strengths and experience. </p>
                <br><br>
            </div>
            

            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                    <span>* Profession: </span><br>
                    <input name="profession" placeholder="eg.&nbsp; Photographer"  type="text" class="form-control" required="required" />
                </div>
            </div>

             <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                    <span>WebSite Link:</span><br>
                    <input name="site" placeholder="eg.&nbsp; https://myportfolio.in"  type="text" class="form-control" />
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                    <span> Facebook: </span><br>
                    <input name="fb" placeholder="eg.&nbsp; iiamvk@Facebook"  type="text" class="form-control" />
                </div>
            </div>

             <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                    <span>Instagram:</span><br>
                    <input name="insta" placeholder="eg.&nbsp; iiamvk@instagram"  type="text" class="form-control" />
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                    <span> Twitter: </span><br>
                    <input name="tw" placeholder="eg.&nbsp; iiamvk@twitter"  type="text" class="form-control" />
                </div>
            </div>

             <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                    <span>Linkedin:</span><br>
                    <input name="link" placeholder="eg.&nbsp; iiamvk@linkedin"  type="text" class="form-control" />
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                    <span>* About:</span><br>
                    <textarea name="about" type="text" placeholder="eg. &nbsp; I am a successful software enginner."  class="form-control" required="required"></textarea>
                </div>
            </div>            
        </div>
      
      <div class="row">
        <div class="col-md-1 col-sm-1 col-xs-1">
              <a onclick="forbasic()" class="btn btn-danger">&lt;&lt;BACK</a>
        </div>
        
         <div class="col-md-11 col-sm-11 col-xs-11 text-right">
              <a onclick="hobby()" class="btn btn-danger ">NEXT&gt;&gt;</a> 
        </div>
      </div>
    </div>


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
                    <span> * Full Name: </span><br>
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
                     <span>* Profile Pic: (Image must be less than 2mb)</span><br>
                     <input class="form-control" type="file" name="pic" placeholder="select your profile picture" required="required" />
                </div>
            </div>
            

        </div>
      
      <div class="row">
        <div class="col-md-1 col-sm-1 col-xs-1">
              <a href="<?php echo $url."resume/templates" ?>" class="btn btn-danger">&lt;&lt;BACK</a>
        </div>
        
         <div class="col-md-11 col-sm-11 col-xs-11 text-right">
              <a onclick="mysum()" class="btn btn-danger ">NEXT&gt;&gt;</a> 
        </div>
      </div>
    </div>
    <!-- basic end-->

      <!-- Hobby -->
        <div id="myhobby">   
        <div class="row">       
            <div class="col-sm-12 ">
                 <h1 class="text-center text-danger">Hobby</h1>
                 <p class="text-center">Write your any 4 hobbies.</p>
                <br><br>
            </div>
            
            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                    <span>Hobby 1:</span><br>
                    <input name="h1" placeholder="eg. &nbsp;Dancing"  type="text" class="form-control" />
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                    <span>Hobby 2:</span><br>
                    <input name="h2" placeholder="eg. &nbsp;Watching Movie"  type="text" class="form-control" />
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                    <span>Hobby 3:</span><br>
                    <input name="h3" placeholder="eg. &nbsp;Photography"  type="text" class="form-control" />
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                    <span>Hobby 4:</span><br>
                    <input name="h4" placeholder="eg. &nbsp;Coding"  type="text" class="form-control" />
                </div>
            </div>
        </div>
      
      <div class="row">
        <div class="col-md-1 col-sm-1 col-xs-1 ">
              <a onclick="mysum()" class="btn btn-danger">&lt;&lt;BACK</a>
        </div>
        
         <div class="col-md-11 col-sm-11 col-xs-11 text-right">
              <a onclick="foreducation()" class="btn btn-danger ">NEXT&gt;&gt;</a> 
        </div>
      </div>
    </div>
    <!-- Social End -->

        <!-- Education Information -->
        <div id="education">
          <div class="row">
            <div class="col-sm-12 ">
                
                <h1 class="text-center text-danger">Education</h1>
                <p class="text-center">Add information about your educational background.</p>
                <br><br>
            </div>
            

            <div class="col-lg-6 col-sm-6 inpbox">
                <div class="form-group">
                  <span>Year</span><br>
                    <input name="edudate1" placeholder="eg.&nbsp; 2012-2016"  type="text" class="form-control" />
                </div>
                <div class="form-group">
                  <span>Heading</span><br>
                    <input name="eduhead1" placeholder="eg.&nbsp; School"  type="text" class="form-control" />
                </div>
                <div class="form-group">
                  <span>Description</span><br>
                   <textarea name="edudesc1" placeholder="eg.&nbsp; I am completing my schooling in xyz."   class="form-control" ></textarea>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 inpbox">
                <div class="form-group">
                  <span>Year</span><br>
                    <input name="edudate2" placeholder="eg.&nbsp; 2016-2020"  type="text" class="form-control" />
                </div>
                <div class="form-group">
                  <span>Heading</span><br>
                    <input name="eduhead2" placeholder="eg.&nbsp; BE"  type="text" class="form-control" />
                </div>
                <div class="form-group">
                  <span>Description</span><br>
                  <textarea name="edudesc2" placeholder="eg.&nbsp; I am completing my BE in xyz."   class="form-control"></textarea>
                </div>
            </div>
           
        </div>
        <br>
        <div class="row">
        <div class="col-md-1 col-sm-1 col-xs-1">
              <a onclick="hobby()" class="btn btn-danger">&lt;&lt;BACK</a>
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
                
                <h1 class="text-center text-danger">Skills</h1>
                <p class="text-center">Highlight of your top 5 skills.</p>
                <br><br>
            </div>
            

            <div class="col-lg-6 col-sm-6 inpbox">
                <div class="form-group">
                  <span>Skill 1</span><br>
                    <input name="skill1" placeholder="eg.&nbsp; HTML" type="text" class="form-control" /><br>
                    <span>Skill Percentage</span><br>
                    <input name="skill1pr" placeholder="eg.&nbsp; 90" type="Number" class="form-control" />
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 inpbox">
                <div class="form-group">
                  <span>Skill 2</span><br>
                    <input name="skill2" placeholder="eg.&nbsp; CSS" type="text" class="form-control" /><br>
                    <span>Skill Percentage</span><br>
                    <input name="skill2pr" placeholder="eg.&nbsp; 90" type="Number" class="form-control" />
                </div>
            </div>
            <div class="col-lg-12 col-sm-12"><br></div>
            <div class="col-lg-6 col-sm-6 inpbox">
                <div class="form-group">
                  <span>Skill 3</span><br>
                    <input name="skill3" placeholder="eg.&nbsp; Javascript" type="text" class="form-control" /><br>
                    <span>Skill Percentage</span><br>
                    <input name="skill3pr" placeholder="eg.&nbsp; 85" type="Number" class="form-control" />
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 inpbox">
                <div class="form-group">
                  <span>Skill 4</span><br>
                    <input name="skill4" placeholder="eg.&nbsp; PHP" type="text" class="form-control" /><br>
                    <span>Skill Percentage</span><br>
                    <input name="skill4pr" placeholder="eg.&nbsp; 80" type="Number" class="form-control" />
                </div>
            </div>
            <div class="col-lg-12 col-sm-12"><br></div>
            <div class="col-lg-6 col-sm-6 inpbox">
                <div class="form-group">
                  <span>Skill 5</span><br>
                    <input name="skill5" placeholder="eg.&nbsp; Python" type="text" class="form-control" /><br>
                    <span>Skill Percentage</span><br>
                    <input name="skill5pr" placeholder="eg.&nbsp; 70" type="Number" class="form-control" />
                </div>
            </div>
            
        </div>
        <br>
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
            

            <div class="col-lg-6 col-sm-6 inpbox">
                <div class="form-group">
                  <span>Year</span><br>
                    <input name="exdate1" placeholder="eg.&nbsp; 2018-2019"  type="text" class="form-control" />
                </div>
                <div class="form-group">
                  <span>Job Title</span><br>
                    <input name="exjobt1" placeholder="eg.&nbsp; Vocational Tranning"  type="text" class="form-control" />
                </div>
                <div class="form-group">
                  <span>Job Description</span><br>
                  <textarea name="exdesc1" placeholder="eg.&nbsp; I am completing 30 days Vocational Training at Rays Technology Raipur in android app development.In this training i can developed a Wallpaper app." class="form-control" ></textarea>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 inpbox">
                <div class="form-group">
                  <span>Year</span><br>
                    <input name="exdate2" placeholder="eg.&nbsp; 2019"  type="text" class="form-control" />
                </div>
                <div class="form-group">
                  <span>Job Title</span><br>
                    <input name="exjobt2" placeholder="eg.&nbsp; Internship"  type="text" class="form-control" />
                </div>
                <div class="form-group">
                  <span>Job Description</span><br>
                  <textarea name="exdesc2" placeholder="eg.&nbsp; I am completing my summer Internship at Rays Technology Raipur in Python with Tkinter.In this training i can developed a Text_Editor."  class="form-control"></textarea>
                </div>
            </div>

            <div class="col-lg-12 col-sm-12"><br></div>


            <div class="col-lg-6 col-sm-6 inpbox">
                <div class="form-group">
                  <span>Year</span><br>
                    <input name="exdate3" placeholder="eg.&nbsp; 2019-2020"  type="text" class="form-control" />
                </div>
                <div class="form-group">
                  <span>Job Title</span><br>
                    <input name="exjobt3" placeholder="eg.&nbsp; Internship"  type="text" class="form-control" />
                </div>
                <div class="form-group">
                  <span>Job Description</span><br>
                  <textarea name="exdesc3" placeholder="eg.&nbsp; I am completing my summer Internship at Effcon in Android App Development.In this training i can developed a Calculator app." class="form-control" ></textarea>
                </div>
            </div>
         
        </div>
        


    <div class="text-center" >
    <br>
      <input type="submit" name="sub" class="btn btn-info btn-lg tbold" value="Preview">
      <br><br>
      <p><font color="red">Note:</font> if you have any problem for submission please fill out the required field.</p>
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

<?php include '../../footer.php'; ?>

<!-- Javascript --->
<script type="text/javascript">

    var b = document.getElementById("basic");
    var e = document.getElementById("education");
    var s = document.getElementById("skill");
    var ex = document.getElementById("experience");
    var d = document.getElementById("download");
    var mys = document.getElementById("mysum");
    var myho = document.getElementById("myhobby");

  function forbasic() {

    b.style.display = "block";
    mys.style.display = "none";
    e.style.display = "none";
    s.style.display = "none";
    ex.style.display = "none";
    d.style.display = "none";
    myho.style.display = "none";
    
  }

    function foreducation() {

    e.style.display = "block";
    myho.style.display = "none";
    mys.style.display = "none";
    b.style.display = "none";
    s.style.display = "none";
    ex.style.display = "none";
    d.style.display = "none";

  }


  function forskill() {

    s.style.display = "block";
    e.style.display = "none";
    b.style.display = "none";
    ex.style.display = "none";
    d.style.display = "none";
    mys.style.display = "none";
    myho.style.display = "none";
  
  }


  function forexperience() {

    ex.style.display = "block";
    e.style.display = "none";
    s.style.display = "none";
    b.style.display = "none";
    d.style.display = "none";
    mys.style.display = "none";
    myho.style.display = "none";

  }

  function mysum() {

    mys.style.display = "block";
    myho.style.display = "none";
    e.style.display = "none";
    s.style.display = "none";
    b.style.display = "none";
    d.style.display = "none";
    ex.style.display = "none";
  }

  function hobby() {

    myho.style.display = "block";
    mys.style.display = "none";
    e.style.display = "none";
    s.style.display = "none";
    b.style.display = "none";
    d.style.display = "none";
    ex.style.display = "none";
      }

</script>

</body>
</html>