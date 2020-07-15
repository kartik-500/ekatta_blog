<?php 
include 'connection.php';
?>
<html lang="en">
  <head>
    <title>E-Katta</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts1/icomoon/style.css">

    <link rel="stylesheet" href="css1/bootstrap.min.css">
    <link rel="stylesheet" href="css1/magnific-popup.css">
    <link rel="stylesheet" href="css1/jquery-ui.css">
    <link rel="stylesheet" href="css1/owl.carousel.min.css">
    <link rel="stylesheet" href="css1/owl.theme.default.min.css">

    <link rel="stylesheet" href="css1/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts1/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css1/aos.css">
    <link rel="stylesheet" href="css1/jquery.scrollbar.css">
    <link rel="stylesheet" href="css1/fancybox.min.css">
    <link rel="stylesheet" href="css1/swiper.min.css">

    <link rel="stylesheet" href="css1/style.css">
</head>

<body>
    <!--::header part start::-->
     <header class="main_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand main_logo" href="index.php"> <img src="img/logo.png" alt="logo"> </a>
                        <a class="navbar-brand single_page_logo" href="index.php"> <img src="img/footer_logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="features.php">features</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="cources.php">cources</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="blog.php">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="photogallery.php">Photo Gallery</a>
                                </li>
                                <!-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Blog
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="blog.html"> blog</a>
                                        <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                    </div>
                                </li> -->
                                <!-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                        <a class="dropdown-item" href="elements.html">Elements</a>
                                    </div>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <!-- <a href="#" class="d-none d-sm-block btn_1 home_page_btn">sing up</a> -->
                       
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!--::Header part end::-->
        <section class="breadcrumb breadcrumb_bg" style="background-image: url(img/215268.jpg); background-size: cover;background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Photo Gallery</h2>
                            <h5>home <span></span> Photo Gallery</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<br>
  <main class="main-content">
    <div class="container-fluid photos">
      <div class="row align-items-stretch">


<?php
$query='SELECT * FROM `gallery` WHERE 1 ORDER BY galleryId DESC';
$res=mysqli_query($db,$query);
//taking out all enteries from db
  $a=0;
  if(mysqli_num_rows($res)>0)
  {
        while($a!=mysqli_num_rows($res))//showing result sequentially
    {
        $row=mysqli_fetch_row($res);
        $img=$row[1];
        $caption=$row[2];
      $i=1;
?>
        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up">
          
          <a href="<?php echo"$img"?>" class="d-block photo-item" data-fancybox="gallery">
            <!-- <img src="images1/img_1.jpg" alt="Image" class="img-fluid"> -->
            <?php echo'<img src="'.$img.'" class="img-fluid" alt="'.$caption.'" />  ' ?>
            <div class="photo-text-more">
              <span class="icon icon-search"></span>
            </div>
          </a>
        </div>
        <?php
    $a++;
    $i++;
    }}
    ?>
      </div>
    </div>
  </main>

</div> <!-- .site-wrap -->
 <!--::footer_part start::-->
      <footer class="footer_part">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-4 col-lg-4">
                    <div class="single_footer_part">
                        <a href="index.php" class="footer_logo_iner"> <img src="img/footer_logo.png" alt="#"> </a>
                        <p>Our vision is to be the best and well known company for product base as well as service base company in the world of Software Company.</p>
                    </div>
                </div>
                
                <div class="col-sm-4 col-md-4 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Quick Links</h4>
                        <ul class="list-unstyled">
                            <li><a href="features.php">Feature</a></li>
                            <li><a href="cources.php">Cources</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="contact.php">Contact</a></li> 
                        </ul>
                    </div>
                </div>
                
               
                <div class="col-sm-4 col-md-4 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Locations</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Pune</a></li>
                            <li><a href="">Aurangabad</a></li>
                            <li><a href="">Jalna</a></li>
                            <li><a href="">Parbhani</a></li>
                            <li><a href="">Beed</a></li>  
                        </ul>
                    </div>
                </div>
                 <div class="col-sm-4 col-md-3 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Other Services</h4>
                        <ul class="list-unstyled">
                            <li><a href="http://www.ekatta.in">Web Design and development</a></li>
                            <li><a href="http://www.ekatta.in">Software Development</a></li>
                            <li><a href="http://www.ekatta.in">Mobile App Development</a></li>
                            <li><a href="http://www.ekatta.in">Digital Marketing</a></li>
                            <li><a href="http://www.ekatta.in">Graphics Design</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-8">
                    <div class="copyright_text">
                        <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer_icon social_icon">
                        <ul class="list-unstyled">
                            <li><a href="#" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a></li>
                            <li><a href="#" class="single_social_icon"><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  <!--::footer_part end::-->

  <!-- jquery plugins here-->
  <script src="js/jquery-1.12.1.min.js"></script>
  <!-- popper js -->
  <script src="js/popper.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- easing js -->
  <script src="js/jquery.magnific-popup.js"></script>
  <!-- swiper js -->
  <script src="js/swiper.min.js"></script>
  <!-- swiper js -->
  <script src="js/masonry.pkgd.js"></script>
  <!-- particles js -->
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <!-- slick js -->
  <script src="js/slick.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/contact.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.form.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/mail-script.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
</body>

</html>