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
$db=mysqli_connect('localhost','root','','ekatta');
$query='SELECT * FROM `blog` WHERE 1 ORDER BY id DESC';
$res=mysqli_query($db,$query);
//taking out all enteries from db
  $a=0;
  if(mysqli_num_rows($res)>0)
  {
        while($a!=mysqli_num_rows($res))//showing result sequentially
    {
        $row=mysqli_fetch_row($res);
      $i=1;
?>
        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up">
          
          <a href="<?php echo'data:image/jpeg;base64,'.base64_encode($row[4])?>" class="d-block photo-item" data-fancybox="gallery">
            <!-- <img src="images1/img_1.jpg" alt="Image" class="img-fluid"> -->
            <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[4] ).'" class="img-fluid" />  ' ?>
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

  <script src="js1/jquery-3.3.1.min.js"></script>
  <script src="js1/jquery-migrate-3.0.1.min.js"></script>
  <script src="js1/jquery-ui.js"></script>
  <script src="js1/popper.min.js"></script>
  <script src="js1/bootstrap.min.js"></script>
  <script src="js1/owl.carousel.min.js"></script>
  <!-- <script src="js/jquery.stellar.min.js"></script> -->
  <script src="js1/jquery.countdown.min.js"></script>
  <script src="js1/jquery.magnific-popup.min.js"></script>
  <script src="js1/bootstrap-datepicker.min.js"></script>
  <script src="js1/aos.js"></script>

  <script src="js1/jquery.fancybox.min.js"></script>
  <script src="js1/swiper.min.js"></script>
  <script src="js1/jquery.scrollbar.js"></script>
  <script src="js1/main.js"></script>

  
    
  </body>
</html>