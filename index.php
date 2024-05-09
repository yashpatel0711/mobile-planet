<?php
if (isset($_GET['login_success']) && $_GET['login_success'] == 1) {
    echo "<script>alert('Logged in!')</script>";
    echo "<script>window.location.assign('index.php')</script>";
}
if (isset($_GET['logout_success']) && $_GET['logout_success'] == 1) {
    echo "<script>alert('Logged out!')</script>";
    echo "<script>window.location.assign('index.php')</script>";
}
session_start();
if (!empty($_SESSION['cart'])) {
    $printCount = count($_SESSION['cart']);
}
else {
    $printCount = 0;
}
if (!empty($_SESSION['user_users_id']) && !empty($_SESSION['user_users_username'])) {
    $printUsername = $_SESSION['user_users_username'];
}
else {
    $printUsername = "None"; 
}
?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>OCS - Home</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/userpage.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
         <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="#">Mobile  Planet</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span><i class="fas fa-bars mx-3
"></i></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
                            <?php
                            require_once('config.php');
                            $select = "SELECT * FROM category";
                            $query = mysqli_query($conn, $select);
                            while ($res = mysqli_fetch_assoc($query)) {
                            ?>
                                <a class="dropdown-item" href="shop.php?category=<?php echo $res['category_id'];?>">
                                    <?php echo $res['category_name'];?>
                                </a>
                            <?php
                            }
                            ?>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span class="badge badge-pill badge-secondary"><?php echo $printCount;?></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="uploads/default-image.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"><?php echo $printUsername;?></h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="account_users.php"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="login_users.php"><i class="fas fa-sign-in-alt mr-2"></i>Login</a>
                                <a class="dropdown-item" href="logout_users.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <!-- <div class="dashboard-wrapper"> -->
            <div class="container-fluid dashboard-content">    
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner rounded">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="uploads/17.jpg  " alt="First slide">
                                    <div class="carousel-caption d-md-block pb-5">
                                        <h3 class="text-white"></h3>
                                        <p></p>
                                        <a href="about.php" class="btn btn-rounded btn-outline-light">Read More</a>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="uploads/IA3Kxs.webp" alt="Second slide">
                                    <div class="carousel-caption d-md-block pb-5">
                                        <h3 class="text-white"></h3>
                                        <p></p>
                                        <a href="about.php" class="btn btn-rounded btn-outline-light">Read More</a>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="uploads/13.jpg" alt="Third slide">
                                    <div class="carousel-caption d-md-block pb-5">
                                        <h3 class="text-white"></h3>
                                        <p></p>
                                        <a href="about.php" class="btn btn-rounded btn-outline-light">Read More</a>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="uploads/15.jpg" alt="Fourth slide">
                                    <div class="carousel-caption d-md-block pb-5">
                                        <h3 class="text-white"></h3>
                                        <p></p>
                                        <a href="about.php" class="btn btn-rounded btn-outline-light">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                         <span class="sr-only">Previous</span>   </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                       <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                   <span class="sr-only">Next</span>  </a>
                        </div>
                    </div>
                </div>

                <div class="row m-5">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                        <h1>Our Features</h1>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="card text-center p-3">
                            <div class="card-body">
                                <h1 class="card-title"><i class="fas fa-thumbs-up"></i></h1>
                                <h3 class="card-title">Quality</h3>
                                <p class="card-text">Your satisfaction is our priority. From pre-purchase inquiries to post-purchase support, our customer service team is dedicated to providing exceptional service at every step.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="card text-center p-3">
                            <div class="card-body">
                                <h1 class="card-title"><i class="fas fa-mobile"></i></h1>
                                <h3 class="card-title">Innovation</h3>
                                <p class="card-text">Embracing change and staying ahead of the curve, we are driven by a passion for innovation that reflects in the products we offer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="card text-center p-3">
                            <div class="card-body">
                                <h1 class="card-title"><i class="fas fa-shipping-fast"></i></h1>
                                <h3 class="card-title">Fast services</h3>
                                <p class="card-text">We provide fast Services to our customers. We service in 1 hr from the time customer order the product.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mx-5">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                        <h1>Our Categories</h1>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="owl-carousel owl-theme">
                            <?php
                            require_once('config.php');
                            $select = "SELECT * FROM category";
                            $query = mysqli_query($conn, $select);
                            while ($res = mysqli_fetch_assoc($query)) {
                            ?>
                            <div class="item">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h3 class="card-title"><?php echo $res['category_name'];?></h3>
                                        <a href="shop.php?category=<?php echo $res['category_id'];?>"><img class="card-img" src="uploads/<?php echo $res['category_image'];?>"></a>
                                    </div>
                                    
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="row m-5 hero-image2 rounded">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-3 hero-text">
                        <h1 class="text-dark">Who We Are</h1>
                        <p class="text-dark px-5">Behind EasyDeal with Phones is a team of dedicated professionals who share a common vision – to provide you with the best-in-class products and services. Meet the faces behind the brand who work tirelessly to make your smartphone journey exceptional.</p>
                        <p class="text-dark px-5"></p>
                        <a href="about.php" class="btn btn-rounded btn-success">Read More</a>
                    </div>
                </div>

                <div class="row mx-5 hero-image rounded">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-3 hero-text">
                        <h1 class="text-white">Always happy to hear from you.</h1>
                        <a href="contact.php" class="btn btn-rounded btn-brand">Contact Us</a>
                    </div>
                </div>

            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            Copyright © 2023 Concept. All rights reserved. Dashboard by Mobile Planet Team</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        <!-- </div> -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/main-js.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                loop: true, margin: 10, dots: 0, autoplay: 4000, autoplayHoverPause: true, responsive:{
                    0:{items:1}, 600:{items:2}, 1000:{items:4}
                }
            })
        });
    </script>
</body>
 
</html>