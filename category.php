<?php 
include 'connection.php';
@$categoryId=$_GET['categoryId'];
$query2= 'select categoryName from category where categoryId='.$categoryId;
        $result2 = mysqli_query($db,$query2);
        $row2 = mysqli_fetch_array($result2);
?>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
                                    <a class="nav-link dropdown-toggle" href="blog.php" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Blog
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="blog.php"> blog</a>
                                        <a class="dropdown-item" href="single-blog.php">Single blog</a>
                                    </div>
                                </li> -->
                                <!-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.php" id="navbarDropdown1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                        <a class="dropdown-item" href="elements.php">Elements</a>
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

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg" style="background-image: url(img/215268.jpg); background-size: cover;background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Digital Katta</h2>
                            <h5>home <span></span> blog</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================Blog Area =================-->
    <section class="blog_area section_padding">
        <div class="container">
            <h2 style="font-size: 50px;
                       padding-left: 28%"><?= $row2[0]?></h2>
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <?php 
                        $a=0;
                            $query="SELECT * FROM `blog` WHERE categoryId= '".$categoryId."' ORDER BY categoryId DESC";
                            $res=mysqli_query($db,$query);
  if(mysqli_num_rows($res)>0)
  {
        while($a!=mysqli_num_rows($res))//showing result sequentially
    {
        $row=mysqli_fetch_row($res);
        @$id=$row[0];
      @$author_name=$row[2];
      @$blog_title=$row[3];   
      @$description=$row[4]; 
      @$date=$row[7];
      @$blogImage = $row[5];
      $d=date_create($date);
      $d1=date_format($d,"d M");
      $dat=substr($d1, 0, 2);
      $mon=substr($d1, 3, 5);
      ?>

                        <article class="blog_item">
                            <div class="blog_item_img">
                                <?php echo'<img src="'.$blogImage.'" class="card-img rounded-0" height="375" width="750" style="object-fit: cover;"/>' ?>
                                <a href="#" class="blog_item_date">
                                    <h3><?= $dat?></h3>
                                    <p><?= $mon?></p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="single-blog.php?blogid=<?= $id?>">
                                    <h2><?php echo $blog_title; ?></h2>
                                </a>
                                <p><?= substr($description, 0, 200);?></p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="far fa-user"></i>  <?php echo $author_name; ?></a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
                                </ul>
                            </div>
                        </article>
<?php
$a++;
    }
  }
?></div></div>





                                        <style type="text/css">
                    .profile-img{
                        margin: 0 auto;
                        display: block;
                    }
                </style>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="profile">
                            <img class="profile-img"src="img/author/author_3.png" width="50%">
                            <div class="single_sidebar_widget text-center">
                                <h3>Nitin Jarhad</h3>
                                <h5>Digital Marketing Specialist</h5>
                                <p>from <a href="http://ekatta.in">E-Katta innovators LLp,</a> Aurangabad, India. He is also Speaker and Trainer in the field of Digital Marketing. He trains students, professionals and business men on Digital Marketing.</p>
                            </div>
                        </aside>
                        <aside class="single_sidebar_widget search_widget">
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='Search Keyword'
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Search Keyword'">
                                        <div class="input-group-append">
                                            <button class="btn" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1"
                                    type="submit">Search</button>
                            </form>
                        </aside>
                        <aside class="single_sidebar_widget">
                            <h4 class="widget_title">Achivments</h4>
                            <embed src="img/achivments/Advanced Google Analytics.pdf#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="100%" height="220px" />
                        </aside>
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Category</h4>
                            <ul class="list cat-list">
                                <li>
<?php
$uery = 'select count(*) as cntUse from category where 1' ;
$result1 = mysqli_query($db,$uery);
        $row1 = mysqli_fetch_array($result1);
        $count1 = $row1['cntUse'];
        $a=1;
while ($a<=$count1) {
$sql_query = 'select count(*) as cntUser from blog where categoryId='.$a ;
$query2= 'select * from category where categoryId='.$a;
        $result = mysqli_query($db,$sql_query);
        $result2 = mysqli_query($db,$query2);
        $row = mysqli_fetch_array($result);
        $row2 = mysqli_fetch_array($result2);
        ?>
                                        <a href="category.php?categoryId=<?= $row2[0]?>" class="d-flex">
                                        <p><?= $row2[1]?></p>
                                        <p> (<?= $row['cntUser']?>)</p>
                                    </a>
                                </li>
                                <li>
<?php 
$a++;
}
?>
                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>
<?php 
$query2="SELECT * FROM (
    SELECT * FROM blog ORDER BY blogid DESC LIMIT 4
) sub
ORDER BY blogid DESC";    
$res2=mysqli_query($db,$query2);                
$a=1;
  if(mysqli_num_rows($res2)>0)
  {
        while($row=mysqli_fetch_row($res2))//showing result sequentially
    {
        @$blogid=$row[0];
      @$author_name=$row[2];
      @$blog_title=$row[3];   
      @$description=$row[4]; 
      @$date=$row[7];
       @$blogImage = $row[5];
      $d=date_create($date);
      $d1=date_format($d,"F d,Y" );
      $i=1;
?>


                            <div class="media post_item">
                                <?php echo'<img src="'.$blogImage.'" height="100" width="100" style="object-fit: cover;"/>  ' ?>
                                <div class="media-body">
                                    <a href="single-blog.php?blogid=<?= $blogid?>">
                                        <h3><?= $blog_title?></h3>
                                    </a>
                                    <p><?= $d1?></p>
                                </div>
                            </div>



            <?php
    $a++;
    $i++;
    }
  }
    ?>
                        </aside>
                        


                        <aside class="single_sidebar_widget instagram_feeds">
                            <h4 class="widget_title">Instagram Feeds</h4>
                            <ul class="instagram_row flex-wrap">
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="img/post/post_5.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="img/post/post_6.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="img/post/post_7.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="img/post/post_8.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="img/post/post_9.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="img/post/post_10.png" alt="">
                                    </a>
                                </li>
                            </ul>
                        </aside>


                        <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>

                            <form action="#">
                                <div class="form-group">
                                    <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1"
                                    type="submit">Subscribe</button>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

    <!--::footer_part start::-->
        <footer class="footer_part">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-4 col-lg-4">
                    <div class="single_footer_part">
                        <a href="index.php" class="footer_logo_iner"> <img src="img/footer_logo.png" alt="#"> </a>
                        <p>Our vision is to be the best and well known company for product base as well as service base company in the world of Software Company.
                        </p>
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