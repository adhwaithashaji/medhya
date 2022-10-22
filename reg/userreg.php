<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Medhya User Registration</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i&subset=cyrillic" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }

        .labelName {
            font-size: 90%;
            margin-bottom: 5px;
            color: #000;
        }

       
    </style>


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="index.html">Medhya</a></h1>

            </div>

            <nav id="navbar" class="navbar">
                <ul>

                    <li class="dropdown"><a href="#"><span>Registration</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">User</a></li>
                            <li><a href="reg/reg2.html">Textiles</a></li>
                            <li><a href="reg/reg3.html">Organisation</a></li>
                            <li><a href="reg/reg4.html">Tailors</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link " href="login.php">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->


    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>User Registration</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>User Registration</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs Section -->

        <section class="inner-page">
            <div class="container">

                <div class="container-fluid h-custom">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-md-4">
                            <img src="assets\img/h1_hero1.png" height="550px" width="350px" alt="Sample image">
                        </div>
                        <div class="col-md-8">
                            <form>

                                <div class="row pt-3">
                                    <div class="form-group col-md-6">
                                        <label for="firstname" class="labelName">First Name</label>
                                        <input type="text" class="form-control" id="" name="fname" placeholder="Enter Name" required pattern="[A-Za-z0-9\s@#$%&*!_]{1,30}" title="use valid name ">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lastname" class="labelName">Last Name</label>
                                        <input type="text" class="form-control" id="" name="sname"  placeholder="Enter Name" required pattern="[A-Za-z0-9\s@#$%&*!_]{1,30}" title="use valid name">                                    </div>
                                </div>

                                <div class="row pt-3">
                                    <div class="form-group col-md-6">
                                        <label for="inputAddress" class="labelName">Email</label>
                                        <input type="email" class="form-control" id="" name="email" placeholder="Enter Email" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lastname" class="labelName">Phone</label>
                                        <input type="text" class="form-control" id="phoneno" name="phoneno" minlength="10" maxlength="10" placeholder="Enter Phone No" required pattern="[0-9]{10}" >
                                    </div>
                                </div>



                                <div class="row pt-3">
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4" class="labelName">Date of Birth</label>
                                        <input type="date" class="form-control" id="" name="dob" placeholder="dd-mm-yyyy" value="" min="1920-01-01" max="">
                                    </div>
                                    
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4" class="labelName">User Type</label>
                                        <select name="usertype" id="" class="form-select">
                                            <option disabled selected> -- Select Usertype --</option>
                                            <option>Customer</option>
                                            <option>Tailor</option> 
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4" class="labelName">Gender</label>
                                        <div class="mt-2">
                                            <label class="radio-container m-r-45 col-md-5">
                                                <input class="form-check-input" type="radio" checked="checked" name="gender" value="M">
                                                <span class="checkmark">Male</span>
                                            </label>
                                            <label class="radio-container col-md-5">
                                                <input class="form-check-input" type="radio" name="gender" value="F">
                                                <span class="checkmark">Female</span>
                                            </label>
                                        </div>
                                    </div>

                                </div>


                                <div class="row pt-3">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4" class="labelName">District</label>
                                        <select name="" id="distid" class="form-select">
                                            <option>--Select District</option>
                                            <option>ernakulam</option>
                                            <option>thiruvanthapuram</option>
                                            <option>kollam</option>
                                            <option>alappuzha</option>
                                            <option>idukki</option> 
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="labelName">City</label>
                                        <select name="" id="" class="form-select">
                                            <option>-- Select City --</option>
                                            <option>kothamangalam</option>
                                            <option>ollampara</option>
                                            <option>kuthiravattam</option>
                                            <option>paikullam</option>
                                        </select>
                                    </div>
                                    

                                </div>

                                <div class="row pt-3">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4" class="labelName">Address</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Address">
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="labelName">Pincode</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Pincode">

                                    </div>

                                </div>

                                <div class="row pt-3">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4" class="labelName">Password</label>
                                        <input type="password" class="form-control" id="inputEmail4" placeholder="Password">
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4" class="labelName">Confirm Password</label>
                                        <input type="password" class="form-control" id="inputEmail4" placeholder="Re enter your Password">

                                    </div>

                                </div>


                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary mt-3">Register</button>

                                    </div>

                                </div>









                            </form>


                        </div>
                    </div>
                </div>





            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Lonely</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-lonely/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>