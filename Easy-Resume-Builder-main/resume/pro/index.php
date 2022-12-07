<?php

if (isset($_POST['sub'])) {
  
// persional data

$name             = $_POST['name'];
$address          = $_POST['address'];
$contact          = $_POST['phone'];
$email            = $_POST['email'];

// about me and social media

$profession       = $_POST['profession'];
$portlink         = $_POST['site'];
$about            = $_POST['about'];

$facebook         = $_POST['fb'];
$instagram        = $_POST['insta'];
$twitter          = $_POST['tw'];
$Linkedin         = $_POST['link'];


// skills 

$skill1           = $_POST['skill1'];
$skill1pr         = $_POST['skill1pr'];

$skill2           = $_POST['skill2'];
$skill2pr         = $_POST['skill2pr'];

$skill3           = $_POST['skill3'];
$skill3pr         = $_POST['skill3pr'];

$skill4           = $_POST['skill4'];
$skill4pr         = $_POST['skill4pr'];

$skill5           = $_POST['skill5'];
$skill5pr         = $_POST['skill5pr'];


// experiences

$exdate1          = $_POST['exdate1'];
$exjobt1          = $_POST['exjobt1'];
$exdesc1          = $_POST['exdesc1'];

$exdate2          = $_POST['exdate2'];
$exjobt2          = $_POST['exjobt2'];
$exdesc2          = $_POST['exdesc2'];

$exdate3          = $_POST['exdate2'];
$exjobt3          = $_POST['exjobt3'];
$exdesc3          = $_POST['exdesc3'];

// education

$edudate1         = $_POST['edudate1'];
$edudesc1         = $_POST['edudesc1'];
$eduhead1         = $_POST['eduhead1'];

$edudate2         = $_POST['edudate2'];
$edudesc2         = $_POST['edudesc2'];
$eduhead2         = $_POST['eduhead2'];

// hobbies

$hobby1           = $_POST['h1'];
$hobby2           = $_POST['h2'];
$hobby3           = $_POST['h3'];
$hobby4           = $_POST['h4'];




//  Profile Picture 


if (isset($_FILES['pic'])) {

    $picname = 'pic';
    $f =$_FILES['pic']["name"];//name of file.
    $tmp=$_FILES['pic']['tmp_name'];//temparary location of file.
    $size=$_FILES['pic']['size'];//size of file.
    $type=$_FILES['pic']['type'];//type of file.
    $error=$_FILES['pic']['error'];//number of error in file.
    $extention=explode(".",$f);//explode("separeter","string"orvariable name);//it convert string to array.
    $ext=strtolower(end($extention));//end(variablr name); return end of string.
    $newfile ="pic.".$ext;//uniqid(); genrate id based on current time.
    $storage="./".$newfile;//storage location & namr of file.
    /*
    move_uploaded_file("temparory name of file","storage location of file ".name of file); 
    */
    if($size<=2000000){
    if($ext=='jpg'||$ext=='png'||$ext=='gif'||$ext=='jpeg'){
    move_uploaded_file($tmp,$storage);
    }    
    }

}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
      <title>Easy Resume Builder | <?php echo $domain; ?></title>
      <meta name="title" content="Easy Resume Builder | <?php echo $domain; ?>">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="language" content="English">
      <meta name="description" content="Impressive Resumes Made Easy! Get hired with the professional Perfect Resume that will make you stand out of the crowd! Start Now!">
      <meta name="keywords" content="<?php echo $keyword ?>">
      <meta name="robots" content="noindex, nofollow">
      <meta name="author" content="Vinod Kumar">
      <link rel="canonical" href="https://<?php echo $domain; ?>/resume/pro/" />
      <meta name="generator" content="HTML 5 and PHP 7.1" />
      <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
      <link rel="stylesheet" href="styles.css">
</head>
<body>
<br>
<div class="resume" id="rem">
   <div class="resume_left">
     <div class="resume_profile">
       <img src="<?php echo $storage ?>" alt="profile_pic">
     </div>
     <div class="resume_content">
       <div class="resume_item resume_info">
         <div class="title">
           <p class="bold"><?php echo $name; ?></p>
           <p class="regular"><?php echo $profession; ?></p>
         </div>
         <ul>
           <li>
             <div class="icon">
               <i class="fas fa-map-signs"></i>
             </div>
             <div class="data" style="word-wrap: break-word;">
               <?php echo $address; ?>
             </div>
           </li>
           <li >
             <div class="icon">
               <i class="fas fa-mobile-alt"></i>
             </div>
             <div class="data">
               <?php echo $contact; ?>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fas fa-envelope"></i>
             </div>
             <div class="data" style="text-align: justify-all;">
               <?php echo $email; ?>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-weebly"></i>
             </div>
             <div class="data">
               <?php echo $portlink; ?>
             </div>
           </li>
         </ul>
       </div>
       <div class="resume_item resume_skills">
         <div class="title">
           <p class="bold">skill's</p>
         </div>
         <ul>
           <li>
             <div class="skill_name">
               <?php echo $skill1; ?>
             </div>
             <div class="skill_progress">
               <span style="width: <?php echo $skill1pr; ?>%;"></span>
             </div>
             <div class="skill_per"><?php echo $skill1pr; ?></div>
           </li>
           <li>
             <div class="skill_name">
               <?php echo $skill2; ?>
             </div>
             <div class="skill_progress">
               <span style="width: <?php echo $skill2pr; ?>%;"></span>
             </div>
             <div class="skill_per"><?php echo $skill2pr; ?></div>
           </li>
           <li>
             <div class="skill_name">
               <?php echo $skill3; ?>
             </div>
             <div class="skill_progress">
               <span style="width: <?php echo $skill3pr; ?>%;"></span>
             </div>
             <div class="skill_per"><?php echo $skill3pr; ?></div>
           </li>
           <li>
             <div class="skill_name">
                <?php echo $skill4; ?>
             </div>
             <div class="skill_progress">
               <span style="width: <?php echo $skill4pr; ?>%;"></span>
             </div>
             <div class="skill_per"><?php echo $skill4pr; ?></div>
           </li>
           <li>
             <div class="skill_name">
               <?php echo $skill5; ?>
             </div>
             <div class="skill_progress">
               <span style="width: <?php echo $skill5pr; ?>%;"></span>
             </div>
             <div class="skill_per"><?php echo $skill5pr; ?></div>
           </li>
         </ul>
       </div>
       <div class="resume_item resume_social">
         <div class="title">
           <p class="bold">Social</p>
         </div>
         <ul>
           <li>
             <div class="icon">
               <i class="fab fa-facebook-square"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Facebook</p>
               <p><?php echo $facebook; ?></p>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-twitter-square"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Twitter</p>
               <p><?php echo $twitter; ?></p>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-instagram"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Instagram</p>
               <p><?php echo $instagram; ?></p>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-linkedin"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Linkedin</p>
               <p><?php echo $Linkedin; ?></p>
             </div>
           </li>
         </ul>
       </div>
     </div>
  </div>
  <div class="resume_right">
    <div class="resume_item resume_about">
        <div class="title">
           <p class="bold">About us</p>
         </div>
        <p style="text-align: justify;"><?php echo $about; ?></p>
    </div>
    <div class="resume_item resume_work">
        <div class="title">
           <p class="bold">Work Experience</p>
         </div>
        <ul>
            <li>
                <div class="date"><?php echo $exdate1; ?></div> 
                <div class="info">
                     <p class="semi-bold" ><?php echo $exjobt1; ?></p> 
                  <p style="text-align: justify;"><?php echo $exdesc1; ?></p>
                </div>
            </li>
            <li>
              <div class="date"><?php echo $exdate2; ?></div>
              <div class="info">
                     <p class="semi-bold"><?php echo $exjobt2; ?></p> 
                  <p style="text-align: justify;"><?php echo $exdesc2; ?></p>
                </div>
            </li>
            <li>
              <div class="date"><?php echo $exdate3; ?></div>
              <div class="info">
                     <p class="semi-bold"><?php echo $exjobt3; ?></p> 
                  <p style="text-align: justify;"><?php echo $exdesc3; ?></p>
                </div>
            </li>
        </ul>
    </div>
    <div class="resume_item resume_education">
      <div class="title">
           <p class="bold">Education</p>
         </div>
      <ul>
            <li>
                <div class="date"><?php echo $edudate1; ?></div> 
                <div class="info">
                     <p class="semi-bold"><?php echo $eduhead1; ?></p> 
                  <p style="text-align: justify;"><?php echo $edudesc1; ?></p>
                </div>
            </li>
            <li>
              <div class="date"><?php echo $edudate2; ?></div>
              <div class="info">
                     <p class="semi-bold"><?php echo $eduhead2; ?></p> 
                  <p style="text-align: justify;"><?php echo $edudesc2; ?></p>
                </div>
            </li>
        </ul>
    </div>
    <div class="resume_item resume_hobby">
      <div class="title">
           <p class="bold">Hobby</p>
         </div>
       <ul>
         <li><i><?php echo $hobby1; ?></i></li>
         <li><i><?php echo $hobby2; ?></i></li>
         <li><i><?php echo $hobby3; ?></i></li>
         <li><i><?php echo $hobby4; ?></i></li>
      </ul>
    </div>
  </div>
</div>

<br>
<br>


  <div style="text-align: center;" >
  <a onclick="myprint()" class="btn btn-suc"><i class="fa fa-print"></i> Print</a>&nbsp;&nbsp; 
  <a style="display: none;" onclick="mydownload()" class="btn btn-in"><i class="fa fa-download"></i>&nbsp;Downlaod</a>
  </div>

<br>
<br>

<script type="text/javascript">
  function myprint() {
    window.print();
  }

  function mydownload() {
    var srem = document.getElementById("rem");
    var source = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(srem);
    var filedownload = document.createElement("a");
    document.body.appendChild(filedownload);
    filedownload.href = source;
    filedownload.download = 'document.doc';
    filedownload.click();

  }
</script>
</body>
</html>
