<?php
                   include 'dbconnect.php';   

?>

<footer>
  <br><br>
    <!-- Pages --->
    <div class="container-fluid bg-primary">
        <br>
        <div class="row">
          <div class="col-md-4 col-sm-12 col-xs-12">
            <a href="<?php echo $url ?>" class="text-white h4"><?php echo $sitename; ?></a><br>
            <a href="<?php echo $url.'resume-formatting/' ?>" class="text-white h4">Resume Formatting</a><br>
            <a href="<?php echo $url.'resume/introduction' ?>" class="text-white h4">Resume Tamplates</a><br><br>
          </div>
          <div class="col-md-1 col-xs-12"></div>
          <div class="col-md-3 col-sm-12 col-xs-12">
            <a href="<?php echo $url ?>" class="text-white h4">Home</a><br>
            <a href="<?php echo $url.'about-us/' ?>" class="text-white h4">About Us</a><br>
            <a href="<?php echo $url.'contact-us/' ?>" class="text-white h4">Contact Us</a><br>
            <a href="<?php echo $url.'privacy-policy/' ?>" class="text-white h4">Privacy Policy</a><br><br>
          </div>
          <div class="col-md-1 col-xs-12"></div>
          <div class="col-md-3 col-sm-12 col-xs-12">
            <span class="h4"><?php echo $gmail; ?></span>
          </div>

        </div>      
    </div>
    <!----- Social Medial Links ----->
    <?php
       
       echo' 
         <div class="container-fluid bg-primary">
         <div class="text-center">
                    <h3 class="text-white">Follow On</h3>
                    <ul class="social-network social-circle">
                        <li>
                          <a href="'.$face.'" target="_blank" class="icoFacebook darkbg" title="'.$face.'"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                          <a href="'.$twitter.'" target="_blank" class="icoTwitter darkbg" title="'.$twitter.'"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                        <a href="'.$insta.'" target="_blank" class="icoInsta darkbg" title="'.$insta.'"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li>
                        <a href="'.$linkdin.'" target="_blank" class="icoLinkedin darkbg" title="'.$linkdin.'"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>       
        </div>
        <br>       
  </div>

    <!---- Copyright Section ----->

    <div class="container-fluid darkbg">
    <br>
    <div class=" footer-copyright text-center text-white">Copyright © 2019 - 2020 
       <a href="'.$url.'" >'.$sitename.'.</a> All Rights Reserved. Build Your Professional Resume Today Only On <a href="'.$url.'" >'.$sitename.'.</a>
    </div>
    <br>
    </div>';
  ?>

</footer>

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


