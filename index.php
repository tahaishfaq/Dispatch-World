<?php
    if(!empty($_POST["send"])){
        $userName = $_POST["userName"];
        $userEmail = $_POST["userEmail"];
        $userSubject = $_POST["userSubject"];
        $userMsg = $_POST["userMsg"];
        $toEmail = "info@thedispatchworld.com";

        $mailHeaders = "Name: " . $userName . 
        "\r\n Email: " . $userEmail . 
        "\r\n Subject: " . $userSubject . 
        "\r\n Message: " . $userMsg . "\r\n";
        
        if($userEmail!=null){
        mail($toEmail, $userSubject, $mailHeaders);
        }

    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dispatch World</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border icons" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <!-- <small class="text-white"><i class="fa fa-map-marker-alt icons me-2"></i>123 Street, New York, USA</small> -->
                <!-- <small class="ms-4 text-white"><i class="fa fa-clock icons me-2"></i>9.00 am - 9.00 pm</small> -->
            </div>
            <div class="col-lg-6 px-5 text-end">
                <span class="text-white"><i class="fa fa-envelope icons me-2"></i>info@thedispatchworld.com</span>
                <span class="ms-4 text-white"><i class="fa fa-phone-alt icons me-2"></i>(307) 218 7863</span>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="display-7 icons m-0">Dispatch World</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span ><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="30" height="30"
                    viewBox="0,0,256,256"
                    style="fill:#e93a05cf;">
                    <g fill="#e93a05cf" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(8.53333,8.53333)"><path d="M3,7c-0.36064,-0.0051 -0.69608,0.18438 -0.87789,0.49587c-0.18181,0.3115 -0.18181,0.69676 0,1.00825c0.18181,0.3115 0.51725,0.50097 0.87789,0.49587h24c0.36064,0.0051 0.69608,-0.18438 0.87789,-0.49587c0.18181,-0.3115 0.18181,-0.69676 0,-1.00825c-0.18181,-0.3115 -0.51725,-0.50097 -0.87789,-0.49587zM3,14c-0.36064,-0.0051 -0.69608,0.18438 -0.87789,0.49587c-0.18181,0.3115 -0.18181,0.69676 0,1.00825c0.18181,0.3115 0.51725,0.50097 0.87789,0.49587h24c0.36064,0.0051 0.69608,-0.18438 0.87789,-0.49587c0.18181,-0.3115 0.18181,-0.69676 0,-1.00825c-0.18181,-0.3115 -0.51725,-0.50097 -0.87789,-0.49587zM3,21c-0.36064,-0.0051 -0.69608,0.18438 -0.87789,0.49587c-0.18181,0.3115 -0.18181,0.69676 0,1.00825c0.18181,0.3115 0.51725,0.50097 0.87789,0.49587h24c0.36064,0.0051 0.69608,-0.18438 0.87789,-0.49587c0.18181,-0.3115 0.18181,-0.69676 0,-1.00825c-0.18181,-0.3115 -0.51725,-0.50097 -0.87789,-0.49587z"></path></g></g>
                    </svg></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link active ">Home</a>
                    <a href="about.php" class="nav-item nav-link ">About</a>
                    <a href="service.php" class="nav-item nav-link">Services</a> 
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                        <small class="fab fa-facebook-f icons"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                        <small class="fab fa-twitter icons"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                        <small class="fab fa-linkedin-in icons"></small>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0  wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/car.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8">
                                    <h1 class="display-1 mb-4 animated icons slideInDown">Dispatch World
                                    </h1>
                                    <h3
                                        class="  icons fw-semi-bold py-1 px-3 mb-4 animated slideInDown">Keep the Freight Moving</h3>
                                    <a href="#services" class="btn btn-discovery py-3 px-5 animated slideInDown">Discover More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img class="w-100" src="img/header2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8">
                                    <h1 class="display-1 mb-4 animated icons slideInDown wow fadeInUp" data-wow-delay="0.1s">Dispatch World
                                    </h1>
                                    <h3
                                        class="  icons fw-semi-bold py-1 px-3 mb-4 animated slideInDown wow fadeInUp" data-wow-delay="0.2s">
                                        Keep on Trucking</h3>
                                    <a href="" class="btn btn-discovery py-3 px-5 animated slideInDown wow fadeInUp" data-wow-delay="0.3s">Discover More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 align-items-end mb-4">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" src="img/about us.jpg">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <p class="d-inline-block border rounded icons fw-semi-bold py-1 px-3">Why Us</p>
                    <h1 class="display-4 mb-4">We Help Our Clients To Grow Their Business</h1>
                    
                    <p class="mb-4">We develop the best lanes that suits your schedule, whether you want to be home every night or once every 2 weeks.</p>
                    <br/>
                    <p class="mb-4">We work according to your schedule, whether you prefer to be at your home every night or once a week.We find the fright for you that pays you the best according to the area you prefer to go. Not only that, we do all the paperwork for you so you can focus on driving and we can focus on keeping you busy to make money. </p>
                    <br/>
                    <p class="mb-4">We find freight for all type of vehicles whether It's a Semi truck, box truck, or hotshot. Also, we provide 24/7 assistance with a dedicated dispatcher for each carrier. It does not mater that where you are and what you want to haul, we got you covered. So, don't delay and choose dispatch world today. </p>
                    
                </div>
            </div>
            <div class="border rounded p-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="h-100">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle i-bg">
                                    <i class="fa fa-times text-white"></i>
                                </div>
                                <div class="ps-3">
                                    <h4>No Hidden Cost</h4>
                                    <span>We will not charge any hidden cost</span>
                                </div>
                                <div class="border-end d-none d-lg-block"></div>
                            </div>
                            <div class="border-bottom mt-4 d-block d-lg-none"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="h-100">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle i-bg">
                                    <i class="fa fa-users text-white"></i>
                                </div>
                                <div class="ps-3">
                                    <h4>Dedicated Team</h4>
                                    <span>We have very dedicated team</span>
                                </div>
                                <div class="border-end d-none d-lg-block"></div>
                            </div>
                            <div class="border-bottom mt-4 d-block d-lg-none"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="h-100">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle i-bg">
                                    <i class="fa fa-phone text-white"></i>
                                </div>
                                <div class="ps-3">
                                    <h4>24/7 Available</h4>
                                    <span>Our team will be available 24/7</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Facts Start -->
    <div class="container-fluid facts py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-sm-6 col-lg-4 text-center wow fadeIn" data-wow-delay="0.1s">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAAHRUlEQVR4nO2be4hVVRTGr8/MR2FPFSkf5bMIs6xMQ8qsUKlkbMJGC0sTyhrLlAkJqzFHTaOH4YhZ2GBmmopmmSj0gCI1IyvL0iztZWFajlaav1jO2sNqzzn3nHvvzJ07MB/sP+66+7HWd/bZa+2190kkkgBoCDwAfAUco+7gmOpcKDYk0gXwEnUfL6Rr/FWmk++BZ4CSOlJE1z1G/37pEFBiOuicqGMAzjP6T0+ng1JtXJ6ooxDd1YbSdBqX1hNQgfoZkKijqH8FqF8DyvU1rl8EE7XpBYDGwFlAJy29gN5auqrsXOCUTMeqtRlAxb6hB3An8CywFtgOHCA1HAX2AduA1cBzGtNfDZyWcwRQEXHNAX4gO/hMx7uyVgkAGgCPAX8HKPkv8B2wEVgEPAVMAe4FxmopAMaY35OAYuB54FXgfWCv9hWGrcDgmiKgvyo2OuT/xz1lPgYe1k1U85QHDNejKXARMAp4GvjcG/e4EBvSdrTa0D+VAQcCDwKTgfuBiwPqnAQcVgW+SWu3lQGAjsATwBHV4Q/RKaBeb7Vhsto0MFmnDYAlAdNMGC7y6soq7nB7opagr5BDL++/ItXdh9jYIKizmyMyLB1N3TzzX98s2Rukc1+jR543Q5JlsG4K6my6qSCL23CgLGQAWbAc2mTRZl/nNkaPSSEPqExtEZvC8wNUuBaHE4sGMMHICgI8xKHA6ZRFAH+qLvOMTDyMwwSzqDvMyZSA9Sr7NFHL0IBJ8HY2CdilshWJWgawUnXZmRUCqIjrJVwVzE7UMozeolOTbBDQ2cjuybrFVfWW6NKhUzYIGGRk12fd4qp632D0uTYTAmaYChM1IpxvZLdovXFG1iX7JlfRu4vRZ5zK8o1svtoiNjnMCOroVsIhEdX5Wm+mkcsOcIOcvgBTNTIbrAGKbI3bASdnYFxz7aOH9jlYx5iqY270dqEztV3XkCjQIT9osEbiSkIaVDIGLCM9/A7s17JbVm2v7Db/S910sMzoOSukzjqxNYzxRjp9punJ0KPANV4d2YK647KlwCfAQbKPAzr2UtVFsNXTdaDaUKI25YcaH7KTkhBymCd3xi7y5C2A7sAADUXv0vdOBp6r0eMCVdiVdVqsbIHWnav5gYnaV572LWO08MaWnIPgoCcfpjb0TlRHQgQ40zyBqYkcgT5lhzNqLCMEXJYL22AfwB1Grz7VTcA/wELgDfP+EyfLAlwi0aI3xVMps+NMX8/Hb1VdF6ruaRNQFrEItY1on29C5kwgfQyPGEtcZTKUpWr83Z4fPWTc1Q7gyYj24k1+07Z/AVuAzSmWLdpW8GvY6i1nCUAHYDnws+q4y6TsUFvGxDX+QpPpFZ98m9tkpEBgNzP4yFTaev1IItShm8pOB+7TaS76+dirZEhCdLw5lxCbLogz6Ctm6vVJU3FxoRnvF6St6WeQHpK4WREH+9XNOixOxJi6h7XyEs/HP6QLY1ARN3R2DRPgnz/Ik31NQ/NCvc02W0+kXLbYR3nSW2NAe1O50MjXxGBbjsEa1yABDpuAIXJeELGHKND1ykf7ZAN2NxXHqqyJybAeMfG6K7JAOvSsZgKKvac3KpUcpCZvirwMcUGqBDQ3suKANnbv3bu6CABuNMdiPwYd0KTQ1yATFEkStUdNE9DLyIakofCp6tLck0/beG9f4AjdFuhWiSZgox4z2bIkgIBWZrAPA9pElVWmz1GZGh9y97FqKB9EgMp/IhpHvY2IC6UzwabqPHfQB+NmlgRLDeMSMNREdkEo9xOkQDN1UW7AdJDy6+Pp0FZPrCtJVHfucEUsAswNkNYhpXGMd7p1zCJ+3Pn5phkaL64ZDaBOkKDXcRymxSYgWzCHLsuqyXg0bK4kE/hC5e8kI6BUsynZLCPMJqxK5laTox+5/H9M49f4dwdMYPd1MgJqG4WebnKL7Bf97/sgEgKMXx1yccKl+w/lMgETAy5wSJ4QQ0LlNX7Zi3jXZ9YGGa91JVkiOJCMgGJzly9b5XITP1Q5vdGF2LrXEzMh4MmvitgrvKX1tufiIrjTPcGQ/2UmzPNI+NL8XhnlPfQMQrA+FwlYbDZeLZOQINfpfKyIYbzcOHMoykUCxBtEhsFKgvh3h9fjZK68cLhnMgLKA7a+2Sj2lGlnxLvsZsLymMa3M9v3zUEVcskLOEyJMKphVCQakO4L3qbzfwLeTZICKzVppx0R9dItktxEvcLQOAZGGG9vtlXeJ0p7DdBUteDlRA1Aj8OPmtcxL0PjnXvdY/OXOUuAjjHSKH5cd5etUmjfzpv2ggHJGnQwFR9JUq+lSU+nfuyUAjTjZLO8+/SJdopwdSVevtLhnKgF5VuteFhjZv+z1Fl6auMwoqaMN3pdqt8J+Niu8b7o+SLwpl7TD8OuyAQLFanoZHf0LTZk9HV26tfmx0cYmAxi03VxB+unubygjyEEkiKT2dCsxi2vqpsc3sjnM/IRxnuqi7yOYZejxYYPwr4w+Q+BOECP0PveiQAAAABJRU5ErkJggg==">
                    <h1 class="display-4 text-white" data-toggle="counter-up">20,000</h1>
                    <span class="fs-5 text-white">Loads Booked</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
                <div class="col-sm-6 col-lg-4 text-center wow fadeIn" data-wow-delay="0.3s">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAACeklEQVR4nO2ZTUhUURTHr6VB0KKgTFoIbfpYGJHYJiLKTS2iTRBCULtauFEXkQhOEYUIBUK5iTYGLiRokUhELWJalEGLBDfpwj5EKlAZF5r1i8vccObOeeN947yveD+YxcC75/z/cz/euWeUSvlPATIUk1FJgtRAxKQzEAXAYeAmMAb8sDax/j4K9AL7VJwATgLv8Mdz4EDUwjcBt4A/VMYy0Balgb4y4uaALPACeAsseTz3G7gQhfgzHoKeAEeE57cCl4FZYcw80Bi2gQ+CkBsO4xqBT8LYB+Eoz4s4KAh4D9Q4jm8xS6eQHLAtePV5AVcopd1njKdCjNbgVJcv1DSnfMa4JMToDk51cfI7QvITPmMcEmIMBKe6OHmnkPyqzxh7hBhDwakuffPajOsXm0oCQB3wXTBx1/UkihygA5mx2BVrZWbhpYeJX8AIcA7YouIKsAN4TXl+AoP6lIrlHiE/E7qoW2F9vgD3Ii+jJfS6B4YdjawCj4H9Km6Y873Ho9iT7gPtKq4Ae4HrwOQ6Rh7Fcn8UAhw1QvXykcioJAA0AR8FAyt6xlQSALYDE4KJ2yopAMcFA2/CSDxqLur/Pvc3EOurZeBzddXKSb9ZSac3EGvcirVcXbVuSXVPqL7CWDNWrNnqKy5N2i+s3Y4KTyObbDCqixMfK0mbvxs4H4FArUcl2xOs+jUBr4TkutfT7DC2AXgmjM/pMiTMvtCCIGLVdOYummd2A7t09QmcBx4Ci8h0hSK+wMRp86tVg8FQxVutEemN6krObzcjCBObTZMqK7QLvZgybfmdKk6YDXoWuCaI1v/ctOm9oZIAFippkBqImMTPQIpy4y8f/SvAXKT+awAAAABJRU5ErkJggg==">
                    <h1 class="display-4 text-white" data-toggle="counter-up">8,000</h1>
                    <span class="fs-5 text-white">Weekly Gross Revenue</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
                <div class="col-sm-6 col-lg-4 text-center wow fadeIn" data-wow-delay="0.5s">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAAE50lEQVR4nOWbaahVVRSAl6+nNtqkJSbNpWS+ZpIs/yRWZKBSUlnmQEWvokEqiKLBxyv7UVHinyzL8lEqFPlDKASxkQiCsqhEixfNZSiVZsMXi7M3Lrf3vnvPPeeeuy/n+/vuXmuvc9ZZ095PpEkAZwP3A7OBicDIBmRcBNwKjJN2AtgP2M7ebAXeAHqBS/V3A8g4C/jPrP0KWAxcDOwrMQMMBX6lNn8ArwFTgEGBjHOCBxA+yKeALokVYAxwH/AC8A7wY42H8ZG+9UDGJUAf8MsA694H5gCdEjvACGAqsBB4r8Ib/guYVWHdPsAE4DGgv8qD+AK4EuiQdgEY7bxEXdqzM/SEYE0HMAl40f22kidNknaCxDPeNUasrnPdEcADwG/BQ/gXWAQMkXYBONptXPk95dpDgB5gRwVvGCPtAvCz2fyhDaw/AVgbPISfgDMkdkjSnufPRoOZplNXPFlv0E9kgsQKiQtvNBteloPM84LUq4XZqRIbwHDgLbPRHXl9t8DJwHdG9mZgmMQCyVsK8/r8nHV0uYrTszRP+Vl6hQeBXWZjWhTdmUJGj4sVD9fx23mBnnOlFZBUdNodfh28df0+Z6aQcxTwj19b55qVRt86aUFzNAf4nL3RAujElPLuNus31LnmJOBvs+70hg1K+aa0UvuhguHfA9eFXWCdcrW58tyUYt1ys+7R1AbVqWQwMB1YY9zUosXOvcBBGXQsdbL608hxbbfnk0b1VxLc6aY3zw4wB9Dv/i7gwJz0TQaObGCdHdQcm2UTw4DLgecH6Ne1tn8TmKYBUCJAA6DZ38y0JeZ44HY31tLevRpfunngMRIZbkDjua3Wj49zObSvSiCzbHSzvtbk2DoBHjd7fiTM0eOAG1y03FLDYA1wbwP3AGOlTQCeNDb0+sDwDLCN2mhr+QpwDXCYtCHAKmPPAnHRtBqaq18Gup13DCpwo3OBJ4BROcvV+OS5zBcrPop/A7zkPoOWTFJcHaEe6Vmeo2wdmFhG+T8cnCkn5rfBw13atPTmKF/jlecziQngzAqBVz1hcI46PjSyeyQWgBnBiFszzIKcdZwSnEOMl1gA1puNaTya0uQCaL3EBEmrvNO1xrlXjxrfglZ4qsQGTewVgCXG+E+LTOctx6V5OyKfJ2UCWGGM1ywztEjlQ7Tl1GPuwpTuqf+CIPLPKFL5dGCTU6ybOL8w5bubOz0bLHYQSlLQ2LTmubCQDezeR3dQV3QVcby1zJzwenRE1t1U5ZVPm+xobkkRShcHhu9y3VzhbbMb4NgXMLwIpQ8Zpa/qHL7pSquX1ZZri1LcCVzVypGYc317Ivy6lAn2PP7SOwGjswrscIcJN+Yxz28mwBWB68/OmkNvMXlceU4ixV2W0nmlZ01WgddXyON9EiHuvEJvm3q2Zp4jAlcbgdvcKDnKKbDzVMusPL+puVkOMZsNcFrQ6eU2QI0e4AAdbBrjN0V1/6fZaFAOqs6oj+RyxbXYljukLADHB8d4a0sz4iIZsHxgjNc7gCOkLABPG+O17Z4sZYGk0bIslLIAjA3u9qyL5cpN09EmLMj3/aX57knq/FVBvp8oZYHkWh2NXIpse0huktvL1CukLAAjgW+N8R8D+0sZIJktbjDGb2+nW2iZAW42xuuJ0jQpEyQ3UT2LpGyQfALqBfOL+DfY/wFXW1qbCNHfLAAAAABJRU5ErkJggg==">
                    <h1 class="display-4 text-white" >$<span class="display-4 text-white" data-toggle="counter-up">2.5</span></h1>
                    <span class="fs-5 text-white">Per Mile</span> 
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
               
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Service Start -->
    <div class="container-xxl service py-5" id="services">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <!-- <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Our Services</p> -->
                <h1 class="display-5 mb-5">Our Services</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4 active"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <h5 class="m-0"><i class="fa fa-bars icons me-3"></i>
                                Finding Loads</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <h5 class="m-0"><i class="fa fa-bars icons me-3"></i>Billing and Paperwork</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <h5 class="m-0"><i class="fa fa-bars icons me-3"></i>Factoring and Invoicing</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-0"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <h5 class="m-0"><i class="fa fa-bars icons me-3"></i>24/7 Assistance</h5>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-7" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-auto" src="img/1.png"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <h3 class="mb-3">Finding Loads</h3>
                                    <p class="mb-3">Tell us how much money you want to make, how far you're willing to travel. We will find you loads based on your needs, whether you merely want to transport locally or across state lines. We have several of options that pay quickly, via factoring, or anyway you like.</p>
                                    <!-- <p><i class="fa fa-check icons me-3"></i>Dispatch Service</p> -->
                                    <!-- <p><i class="fa fa-check icons me-3"></i>Use a Load Board</p> -->
                                    <!-- <p><i class="fa fa-check icons me-3"></i>Government Authorized</p> -->
                                    <a href="" class="btn i-bg text-white py-3 px-4 mt-2">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-7" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-95" src="img/2.png"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <h3 class="mb-3">Billing And Paperwork</h3>
                                    <p class="mb-3">After you deliver the freight, you may email us all of your documentation (BOL, Invoice, and Factoring information) and we'll send it all to the broker or shipper on your behalf, saving you the trouble and time.</p>
                                    <!-- <p><i class="fa fa-check icons me-3"></i>Dispatch Service</p> -->
                                    <!-- <p><i class="fa fa-check icons me-3"></i>Use a Load Board</p> -->
                                    <!-- <p><i class="fa fa-check icons me-3"></i>Government Authorized</p> -->
                                    <a href="" class="btn i-bg text-white py-3 px-4 mt-2">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-7" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-95" src="img/3.png"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <h3 class="mb-3">Factoring And Invocing</h3>
                                    <p class="mb-3">Factoring is a business that aids truckers in obtaining funds before date. Our employees ensure that truckers receive their funds on schedule and factoring company regulations and reputation.</p>
                                    <!-- <p><i class="fa fa-check icons me-3"></i>Dispatch Service</p> -->
                                    <!-- <p><i class="fa fa-check icons me-3"></i>Use a Load Board</p> -->
                                    <!-- <p><i class="fa fa-check icons me-3"></i>Government Authorized</p> -->
                                    <a href="" class="btn i-bg text-white py-3 px-4 mt-2">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-7" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-90" src="img/4.png"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <h3 class="mb-3">24/7 Assistance</h3>
                                    <p class="mb-3">Our skilled dispatchers assure that drivers don't have to be face issues they encounter while doing their portion of the job on the road. They ensure the delivery processes are as efficient as possible.</p>
                                    <!-- <p><i class="fa fa-check icons me-3"></i>Dispatch Service</p> -->
                                    <!-- <p><i class="fa fa-check icons me-3"></i>Use a Load Board</p> -->
                                    <!-- <p><i class="fa fa-check icons me-3"></i>Government Authorized</p> -->
                                    <a href="" class="btn i-bg text-white py-3 px-4 mt-2">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Callback Start -->
    <div class="container-fluid callback my-5 pt-5">
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="bg-white border rounded p-4 p-sm-5 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                            <p class="d-inline-block border rounded icons fw-semi-bold py-1 px-3">Get In Touch
                            </p>
                            <h1 class="display-5 mb-5">Contact Us</h1>
                        </div>
                        <form method="post" name="emailContact">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="userName" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="mail" name="userEmail" placeholder="Your Email">
                                    <label for="mail">Your Email</label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="mobile" placeholder="Your Mobile">
                                    <label for="mobile">Your Phone No</label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" name="userSubject"  placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="userMsg" placeholder="Leave a message here" id="message"
                                        style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn i-bg text-white w-100 py-3" type="submit" name="send" value="Submit">Submit Now</button>
                            </div>
                        </div>
</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Callback End -->


    <!-- Projects Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded icons fw-semi-bold py-1 px-3">Our Projects</p>
                <h1 class="display-5 mb-5">Our Truck Dispatchers Specialize</h1>
            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.3s">
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="img/1.webp" alt="">
                        <a href=""><i class="fa fa-link fa-3x icons"></i></a>
                    </div>
                    <div class="project-title">
                        <h4 class="mb-0">Flatbed/Conestoga</h4>
                    </div>
                </div>
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="img/2.webp" alt="">
                        <a href=""><i class="fa fa-link fa-3x icons"></i></a>
                    </div>
                    <div class="project-title">
                        <h4 class="mb-0">Step Deck</h4>
                    </div>
                </div>
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="img/3.webp" alt="">
                        <a href=""><i class="fa fa-link fa-3x icons"></i></a>
                    </div>
                    <div class="project-title">
                        <h4 class="mb-0">Reefer</h4>
                    </div>
                </div>
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="img/4.webp" alt="">
                        <a href=""><i class="fa fa-link fa-3x icons"></i></a>
                    </div>
                    <div class="project-title">
                        <h4 class="mb-0">Dry Van</h4>
                    </div>
                </div>
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="img/5.webp" alt="">
                        <a href=""><i class="fa fa-link fa-3x icons"></i></a>
                    </div>
                    <div class="project-title">
                        <h4 class="mb-0">Hotshot</h4>
                    </div>
                </div>
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="img/6.webp" alt="">
                        <a href=""><i class="fa fa-link fa-3x icons"></i></a>
                    </div>
                    <div class="project-title">
                        <h4 class="mb-0">Boxtruck</h4>
                    </div>
                </div>
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="img/7.webp" alt="">
                        <a href=""><i class="fa fa-link fa-3x icons"></i></a>
                    </div>
                    <div class="project-title">
                        <h4 class="mb-0">Power Only</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->

    <!-- Working Start -->

    <div class="container-fluid facts py-5 mb-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-sm-6 col-lg-4 text-center wow fadeIn" data-wow-delay="0.1s">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAD+ElEQVR4nO2afWhXVRjHz3xNnSJiWWYiKJROkQSxyJL5V1KCunAWYsqUiKx/giT/kGH/pJRBoUy0fAHDoaDgG0PFl6GoIEKI9kZaFlimpltBWX7iWd+Lh9/uy2/33uUd7PPXzrlnz8u9z85znufMuW66KRvgUeAU8AewD3gJ6OO6GsBG2nMNWAMMcV0BYBDQCtwFpgBvAec8hw65IgI8BGwHfgO+AvbL4KMl66ZrvtUVEeAg4VwAFtsX0ro3NN/kigYw2Yv/McCSEId+B7bKMWOuKxrAWhn3ocYfE8+vQF9XJGw7lWHGRKAXcDXBkTWuaFiIyLizGr9IMlWuaHi701KNGxOcOOGKBjAc+Bv4Exiq3GFZPI7XXdEAlsm4HRrXJTjR5rArGt5W+oLGRxIc2eWKBvCUjLuqnWok8E+CI3Nc0QAaZNwqjd9NcOJGEXNHP+CmDBynuQnAOp21wlifh+IewALgGNACXNe2+XRKeS/LuNMhz/pL1/ESR57N6sRg4HDEW/oLqOmgvAfNAX8rtRwSVjQBjwOrVVxVZA2BZim9rsPccDm3QvO3zLgy5dkXDbgCVEpHEE4/Ax8AT6Q2OkLxNim4DDwW8rxJz5eVKe+oQnMnMFpzr0R87WZgoYVaVidmSuBt+8QRa+ZrzeEMeoKXEcXerCfSSxL0Zsw6qx2Mb1PqGaEjShwLsjgSFDZf2I4Vs85i3GhJqScpd7QAA9I6UQF8I0G1Zay3WD6eUteXCY5sSuWEhFd7f+CRXyMrloNIZloWBZslpD5Xy6OPKFF8lzp3KKyCMnNs7tbf0/OAd0SJoj6LgkkS8kOulrfXMy/BibtBnkmrYLkENeRqeXs9BxIcOZJVwe5yd6scyts4FmVVYnnDmJSb5dHlbRStwMCsSoLD29D/obyNYktWBRVeqZkumybrsK56EtV5FE90siNWAcZxOZck7PWUKhPWWQ+qXwdl91XdHcfKzE5Imd1LGOMjnk/wqrufgEc6ILumU3OHjzXK/PZlybNXtaP4vObKBHhHv3PSexk+qQ6eUcpmS+gl1Rp2TH8O2OMp/Ax4Tz+/3wHZVpcbn2hcBXzkbTB1eTpijbIzEZ/eKsXFWmclqPG5xrWqwX8Eno+QvSh4EV7x1uj1A7LljhCF1ljYoDuLW7qAXAkM89ZMlQFWT7yt+MYzqt0VspxF94T9vS68HR6fcQW4nEHhYbeuF9tGMDXkd4J7j2Nez+oX4Mn74kSJYRZO31tPSnOrZOCnMQVbwJXc2z45/6eC1dmo79UrpGmNSulRrsgAs4A7Mtg6hD1LDovngYddV4D/NoOvFT69NWdjY4brSgA9/WsAXeI0d2ZDoxtXIP4F8fBhsgUqOhsAAAAASUVORK5CYII=">
                <h5 class="display-5 mt-2 text-white" >Sign Aggrement</h5>
                    <span class="fs-5 text-white">SIGN A QUICK SERVICE AGREEMENT</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
                <div class="col-sm-6 col-lg-4 text-center wow fadeIn" data-wow-delay="0.3s">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEUElEQVR4nO2bW4hVVRjHl3kL06cipR6lyAeldESJVAxKkKGXXsOeCgsSrMRepEe1KJFKEaXoomUJXg5pUIT4GIT1UCKNhdKMPliYk5fq2C+++vb0zTpn7b3OmXNmrznuHxzOzFrfuv33Ouu2v+VcRUWFBVgB7AcGgT/1+yNguWsB4BVNP17UgSHga2Ab8DBwSysVngrsKihkp9hF5jdM+XwL9McKsCsy052R+W0B/iANdgPTi7q95RCwCLgN6AOOjIqFZS4hvLo9CrwBXPbCTwC3hjLYbxsfsLEifOgSwrbShN0JfOyJ8G4og0FjtChgIz0h42eXuAAaPkl/ipbHm2VQNwbTAoVMMzZ1lxB59VcRPjHxpxsGcgIKNinIMiBdCljiSqaoBwOzvTGhvxMCZPyt8+5kVxK6Tsk4HLB5y9js8SNHKCgoj+2uJGSR5tVFBuzF9ucArDLxpzohwFKg5oU96EpCF2mx/B5smMsvZJSdLDW96XFfl9tZtJLdESlAfdRgSZsCaJgsmJKZHoGHZJ0idfFmh4wrwMt+ohEKMm+wS3l6jIYmDWvFLjZ9slAJ8D/tCBUKTw3gXuB5+b5ZBTij1Ry4WQUYIS7CI2QXm75sShWA7p4RSr5bUxdgmO4ynLoAW7p4Rij5bk5agBSoBDDEKeMRsotNXzaVAIY4ZTxCdsEVVuMydAOwsQufDQ3L23EW4B5gvXznpM1E6hYDpQkQQyUA//aSTboe6PRnU17vS6IHpEAlgCFOGY9Yu1SpBDDEKeMRa9cM4AXgGq3xV+iVtre9Lnc7HIO+lW2XWRHb6+HUBVgPXG2jB7wTsb0udzs8UagEMMQp4xFrlyqVAAZfmasmbkZAvZnG5orrMQGGTNxdgcR3G5sh12MCnCzy8tD37hnfuB4T4H0TtzaQ+Fljs9f1mAAvmrgPAon3GpuXXI8J8ICJ+wWY4sVPBi4amz7XYwJMUp+ajNVefL+JO9+SH/5EEEAAXjPxR50BONZtf0A9NT6iU/Kv6vE1azwFmAvcMN6fCzR8gf6PxheevbVRsTnABRr5spO9LVcAQdxMjc0BDTtQ5IY6VmQnR5g1HSpjSqE3G/+5xGdPW76f8P7vG2MFngM+FYdKWVeYOHG8zlipFx4yfgx5sLdY/v0mz3N5hjWrlPm7NobCxaP0oPdk6zq4zjdhg2p7O3DJhK/zBuz5wdsfzcsXX8bPCy9ONOkFdOjpvxro3mf1aKvhPpKe9Wdc0wMVEewLDTuZNz6o66y8i3gS+N4TfmFRhWteRWvtnsvpz8girvW/BQR5xKST+0o/BOyy8kIbtx057jgbcxsfGAuaPv2YczlvCn1bw9Y1qdhX0r29tPOAnwKNfypnrMlms1F1A552LXbb68DrOTaF53LAYzLo6O2SkasqwDPAd7qwek8uOQXKmKH7EBlDPpP6APcV1P1NrbtMrcdl6Q7cEd34jIm64quocNH8AwZqPjNRon6CAAAAAElFTkSuQmCC">
                <h5 class="display-6 mt-2 text-white" >Send Us Your Documents</h5>
                    <span class="fs-5 text-white">MC AUTHORITY, W-9, AND INSURANCE</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
                <div class="col-sm-6 col-lg-4 text-center wow fadeIn" data-wow-delay="0.5s">
                    <img src="data:image/png;base64,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">
                    <h5 class="display-6 mt-2 text-white" >Start Hauling Loads</h5>
                    <span class="fs-5 text-white">WE BEGIN DISPATCHING IMMEDIATELY</span> 
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
               
            </div>
        </div>
    </div>

    <!-- Working End  -->

    <!-- Pricing Table-->
    <div class="container">
            <div class="row text-center align-items-end wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="bg-white p-5 rounded-lg shadow">
                    <h1 class="h6 text-uppercase font-weight-bold mb-4 wow fadeInUp text-danger" data-wow-delay="0.1s">Basic</h1>
                    <h2 class="h1 font-weight-bold wow fadeInUp text-danger" data-wow-delay="0.1s">$250<span class="text-small text-danger font-weight-normal ml-2 wow fadeInUp" data-wow-delay="0.1s">/ week</span></h2>
                    <h6 class="wow fadeInUp text-danger" data-wow-delay="0.1s">4% per laod</h6>
                    <!-- <div class="custom-separator my-4 mx-auto bg-primary"></div> -->

                    <ul class="list-unstyled my-5 text-small text-left wow fadeInUp" data-wow-delay="0.15s">
                        <li class="mb-3">
                            <i class="fa fa-check mr-2 icons"></i> Dispatching with in Business Hours</li>
                            <li class="mb-3">
                                <i class="fa fa-check mr-2 icons"></i> Finding & Assigning Loads</li>
                                <li class="mb-3">
                                    <i class="fa fa-check mr-2 icons"></i> Dedicated Personal Dispatcher</li>
                                    <li class="mb-3">
                                    <i class="fa fa-check mr-2 icons"></i> Detention & Lumper Fee</li>
                                    <li class="mb-3">
                                    <i class="fa fa-check mr-2 icons"></i>  Negotiating Best Pay Rates</li>
                        <li class="mb-3 text-muted">
                            <i class="fa fa-times mr-2"></i>
                            <del> 24/7 Dispatch</del>
                        </li>
                        <li class="mb-3 text-muted">
                            <i class="fa fa-times mr-2"></i>
                            <del> Factoring Invoices</del>
                        </li>
                        <li class="mb-3 text-muted">
                            <i class="fa fa-times mr-2"></i>
                            <del> Driver Assistance</del>
                        </li>
                        <li class="mb-3 text-muted">
                            <i class="fa fa-times mr-2"></i>
                            <del> Owner Operator Assistance</del>
                        </li>
                    </ul>
                    <a href="#" class="btn i-bg text-white btn-block p-3 shadow rounded-pill">Subscribe</a>
                    </div>
                    </div>
      <!-- END -->

      
      <!-- Pricing Table-->
      <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="bg-white p-5 rounded-lg shadow">
                    <h1 class="h6 text-uppercase font-weight-bold mb-4 wow fadeInUp text-success" data-wow-delay="0.1s">Pro</h1>
                    <h2 class="h1 font-weight-bold wow fadeInUp text-success" data-wow-delay="0.1s">$300<span class="text-small text-success font-weight-normal ml-2 wow fadeInUp" data-wow-delay="0.1s">/ week</span></h2>
                    <h6 class="wow fadeInUp text-success" data-wow-delay="0.1s">6% per laod</h6>
                    <!-- <div class="custom-separator my-4 mx-auto bg-primary"></div> -->

                    <ul class="list-unstyled my-5 text-small text-left wow fadeInUp" data-wow-delay="0.15s">
                    <li class="mb-3">
                            <i class="fa fa-check mr-2 icons"></i>  Dedicated Personal Dispatcher</li>
                        <li class="mb-3">
                            <i class="fa fa-check mr-2 icons"></i> 24/7 Dispatch</li>
                            <li class="mb-3">
                                <i class="fa fa-check mr-2 icons"></i> Finding & Assigning Loads</li>
                                <li class="mb-3">
                                    <i class="fa fa-check mr-2 icons"></i> Detention & Lumper Fee</li>
                                    <li class="mb-3">
                                    
                                    <i class="fa fa-check mr-2 icons"></i> Quick Pay Assistance</li>
                                    <li class="mb-3">
                                    <i class="fa fa-check mr-2 icons"></i> Carrier Packets</li>
                                    <li class="mb-3">
                                    <i class="fa fa-check mr-2 icons"></i> Factoring Invoices</li>


                        <li class="mb-3 text-muted">
                            <i class="fa fa-times mr-2"></i>
                            <del>Driver Assistance</del>
                        </li>
                        <li class="mb-3 text-muted">
                            <i class="fa fa-times mr-2"></i>
                            <del>Owner Operator Assistance</del>
                        </li>
                    </ul>
                    <a href="#" class="btn i-bg text-white btn-block p-3 shadow rounded-pill">Subscribe</a>
                    </div>
                    </div>

<!-- END -->


<!-- Pricing Table-->
<div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="bg-white p-5 rounded-lg shadow">
                    <h1 class="h6 text-uppercase font-weight-bold mb-4 wow fadeInUp text-warning" data-wow-delay="0.1s">Premium</h1>
                    <h2 class="h1 font-weight-bold wow fadeInUp text-warning" data-wow-delay="0.1s">$400<span class="text-small text-warning font-weight-normal ml-2 wow fadeInUp" data-wow-delay="0.1s">/ week</span></h2>
                    <h6 class="wow fadeInUp text-warning" data-wow-delay="0.1s">10% per laod</h6>
                    <!-- <div class="custom-separator my-4 mx-auto bg-primary"></div> -->

                    <ul class="list-unstyled my-5 text-small text-left wow fadeInUp" data-wow-delay="0.15s">
                        <li class="mb-3">
                            <i class="fa fa-check mr-2 icons"></i> 24/7 Dispatch</li>
                            <li class="mb-3">
                                <i class="fa fa-check mr-2 icons"></i> Box Truck</li>
                                <li class="mb-3">
                                    <i class="fa fa-check mr-2 icons"></i> Finding & Assigning Loads</li>
                                    <li class="mb-3">
                                    <i class="fa fa-check mr-2 icons"></i> Dedicated Personal Dispatcher</li>
                                    <li class="mb-3">
                                    <i class="fa fa-check mr-2 icons"></i> Detention & Lumper Fee</li>
                                    <li class="mb-3">
                                   
                                    <i class="fa fa-check mr-2 icons"></i> Negotiating Quick Pay Rates</li>
                                    <li class="mb-3">
                                    <i class="fa fa-check mr-2 icons"></i> Quick Pay Assistance</li>
                                    <li class="mb-3">
                                    <i class="fa fa-check mr-2 icons"></i> Carrier Packets</li>
                                    <li class="mb-3">
                                    <i class="fa fa-check mr-2 icons"></i> Factoring Invoices</li>
                                    
                                    
                                    
                        
                    </ul>
   
                    <a href="#" class="btn i-bg text-white btn-block p-3 shadow rounded-pill">Subscribe</a>
                    </div>
                    </div>
</div>
</div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded icons fw-semi-bold py-1 px-3">Testimonial</p>
                <h1 class="display-5 mb-5">What Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
                <div class="testimonial-item">
                    <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x icons"></i>
                        </div>
                        My dedicated dispatcher has always helped me work more efficiently. They also ensure to assign the best loads at high rates. I love working with Dispatch World. Highly recommended but dispatch world made my experience great. They are always available to help whenever needed. 
                    </div>
                    <img class="rounded-circle mb-3" src="img/testimonial-1.jpg" alt="">
                    <h4>Barbara Adams</h4>
                    <span>CEO</span>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x icons"></i>
                        </div>
                        I have been working with dispatch world for over 6 months and I'm not reluctant to say that they provide exceptional services. At first, I was afraid to choose my dispatch partner but dispatch world made my experience great. They are always available to help whenever needed. 
                    </div>
                    <img class="rounded-circle mb-3" src="img/testimonial-2.jpg" alt="">
                    <h4>Sam Connor</h4>
                    <span>Director</span>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x icons"></i>
                        </div>
                        Dispatch world provide great services with competitive rates. I love working with them given the fact that they are always willing to help and support. They have made my journey so easy that I never have to worry about loads. A thumbs up to the team at dispatch world. 
                    </div>
                    <img class="rounded-circle mb-3" src="img/testimonial-3.jpg" alt="">
                    <h4>Nigel Barnes</h4>
                    <span>Fleet Manager</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-4">Our Office</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>1309 Coffeen Avenue STE 6944 </br>Sheridan, Wyoming 82801</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(307) 218 7863</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@thedispatchworld.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light  rounded-circle me-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-4">Services</h4>
                    <a class="btn btn-link" href="service.php">Finding Loads</a>
                    <a class="btn btn-link" href="service.php">Billing and Paperwork</a>
                    <a class="btn btn-link" href="service.php">Factoring and Invocing</a>
                    <a class="btn btn-link" href="service.php">24/7 Assistance</a>
                    
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="about.php">About Us</a>
                    <a class="btn btn-link" href="contact.php">Contact Us</a>
                    <a class="btn btn-link" href="service.php">Our Services</a>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-8 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Dispatch World</a>, All Right Reserved.
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg i-bg text-white btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>