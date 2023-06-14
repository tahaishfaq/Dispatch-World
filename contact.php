<?php
    if(!empty($_POST["send"])){
        $userName = $_POST["userName"];
        $userEmail = $_POST["userEmail"];
        $userSubject = $_POST["userSubject"];
        $userMsg = $_POST["userMsg"];
        $toEmail = "israasim40@gmail.com";

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
    <title>Contact</title>
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
                <span class="ms-4 text-white"><i class="fa fa-phone-alt icons me-2"></i>+(307)-218-7863</span>
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
                    <a href="index.php" class="nav-item nav-link ">Home</a>
                    <a href="about.php" class="nav-item nav-link ">About</a>
                    <a href="service.php" class="nav-item nav-link active">Services</a> 
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


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">Contact</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="icons" href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded icons fw-semi-bold py-1 px-3">Contact</p>
                    <h1 class="display-5 mb-4">If You Have Any Query, Please Contact Us</h1>
                    
                    <form method="post" name="emailContact">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="userName" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control"  name="userEmail" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="mobile" placeholder="Your Mobile">
                                    <label for="mobile">Your Phone No</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="userSubject" id="subject" placeholder="Subject">
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
                            <div class="col-12">
                                <button class="btn i-bg text-white py-3 px-5" type="submit" name="send" value="Submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                    <div class="position-relative rounded overflow-hidden h-100">
                        <iframe class="position-relative w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2831.8358584271664!2d-106.94326898507627!3d44.7841515865826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5335f15aeba699df%3A0xaf48867d41560521!2s1309%20Coffeen%20Ave%2C%20Sheridan%2C%20WY%2082801%2C%20USA!5e0!3m2!1sen!2s!4v1671750291829!5m2!1sen!2s" 
                            frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-4">Our Office</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>1309 Coffeen Avenue STE 6944</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+(307) 218 7863</p>
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