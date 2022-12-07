<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
    <div class="container topnav">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
             <a href="<?php echo 'https://'.$domain ?>" class="logolink">
              <img src="/img/icon-cv.svg" class="logo">&nbsp;
              <span class="h4">Easy Resume </span>
              <span class="build h4">Build </span>  
             </a>

        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="<?php echo $url ?>" id="home"><i class="fa fa-home isize"></i></a>
                </li>
                <li>
                    <a href="<?php echo $url.'about-us/' ?>" id="about" class="fsize">About Us</a>
                </li>
                <li>
                    <a href="<?php echo $url.'contact-us/' ?>" class="fsize" id="contact">Contact Us</a>
                </li>
                <li>
                    <a href="<?php echo $url.'privacy-policy/' ?>" class="fsize" id="privacy">Privacy Policy </a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>