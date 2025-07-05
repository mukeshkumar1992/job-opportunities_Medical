<?php



error_reporting(4);



$mysql_db_hostname = "localhost";



$mysql_db_user = "subhalk8_newdb";



$mysql_db_password = "zQIJq8uk$,HW";



$mysql_db_database = "subhalk8_newdb"; 







$con = mysqli_connect($mysql_db_hostname, $mysql_db_user, $mysql_db_password,$mysql_db_database);



   



if(isset($_POST['submit']))



{

	$fname = $_POST['fname'];
	
	$lname = $_POST['lname'];
	
	$address2 = $_POST['address2'];
	
	$address1 = $_POST['address1'];

	$city = $_POST['city'];
	
	$state = $_POST['state'];
	
	$zip = $_POST['zip'];
	
	$email = $_POST['email'];

	$mobile = $_POST['mobile'];

	$courses = $_POST['courses'];

	$year = $_POST['year'];

	$date = $_POST['date'];

    



     $query  = "INSERT INTO `tbl_defence_register`(`fname`,`lname`,`address1`,`address2`,`city`,`state`,`zip`,`email`,`mobile`,`courses`,`year`,`date`) VALUES ('$fname','$lname','$address1','$address2','$city','$state','$zip','$email','$mobile','$courses','$year',NOW())";



    $query_run = mysqli_query($con,$query);



    if($query_run)

	{



?>

        <script>alert('Success: Your Form Submitted!');



        window.location.assign("https://subhartidefence.com/demo/registor.php");



        </script>



        <?php

	}

	

	else

	{

		?>



        <script>alert('Error');



        window.location.assign("https://subhartidefence.com/demo/registor.php");



        </script>



        <?php

	}

}

?>

<!DOCTYPE php>
<php class="no-js" lang="zxx">


<!-- Mirrored from codeskdhaka.com/php/armado-prev/armado/about.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Jun 2025 02:44:03 GMT --><head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Registration - Subharti Defence Academy</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/preloader.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="assets/css/backToTop.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/fontAwesome5Pro.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<style>


input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #323232;
  border-radius: 0;
  resize: vertical;
  background:rgba(18, 18, 18, 0.8);
  color: var(--clr-common-white);
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  color:var(--clr-theme-2);
}

input[type=submit] {
  background-color: var(--clr-theme-1);
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}


.col-25 {
  float: left;
  width: 100%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 100%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
<body>
    <!-- [if lte IE 9]>
    <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
    </p>
    <![endif] -->

    <div class="mouseCursor cursor-outer"></div>
    <div class="mouseCursor cursor-inner"><span>Drag</span></div>

    <!-- header area start  -->
    <?php include ('common/header.php')?>
    <!-- header area end  -->
    <!-- menu-bar  -->
    <?php include ('common/menu.php')?>
    <!-- menu-bar end  -->
    

    <!-- side toggle start -->
    <aside class="fix">
        <div class="side-info ">
            <div class="side-info-content">
                <div class="offset-widget offset-header mb-40">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <div class="offset-logo">
                                <a href="index.php">
                                    <img src="assets/img/logo/logo-white.png" alt="Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-3 text-end">
                            <button class="side-info-close">
                                <i class="fal fa-times"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu d-xl-none fix"></div>
                <div class="offset-widget offset_searchbar mb-30">
                    <form action="#" class="filter-search-input">
                        <input type="text" placeholder="Search keyword">
                        <button type="submit"><i class="fal fa-search"></i></button>
                    </form>
                </div>
                <div class="offset-widget offset-support mb-30">
                    <div class="meta-item header-meta-item">
                        <a href="tel:+919045954341">
                            <div class="meta-item-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                        </a>
                        <div class="meta-item-content">
                            <p><a href="tel:+919520897840">+919520897840</a></p>
                            <p><a href="tel:+919045954341">+919045954341</a></p>
                        </div>
                    </div>
                </div>
                <div class="offset-widget offset-social mb-0">
                    <div class="social-links">
                        <ul>
                            <li><a href="https://www.facebook.com/subhartidefence?mibextid=ZbWKwL" target="_blank"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/subhartidefence?t=8qmjbgx2aHP0Of_lhacEcw&amp;s=09" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li>
                                <a href="https://instagram.com/subharti_defence?igshid=YmMyMTA2M2Y=" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li><a href="https://www.youtube.com/watch?v=01Yp0Q8CCAw" target="_blank"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <div class="offcanvas-overlay"></div>
    <div class="offcanvas-overlay-white"></div>
    <!-- side toggle end -->

    <!-- Add your site or application content here -->
    <main>

        <!-- page title area start  -->
        <section class="page-title-area" data-background="assets/img/bg/page-title-bg.jpg">
            <div class="page-title-shape">
                <img class="shape-cube" src="assets/img/shape/cube-shape.png" alt="Subharti Defence Academy">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="page-title-wrapper">
                            <h1 class="page-title mb-10">Registration</h1>
                        </div>
                        <div class="breadcrumb-menu">
                            <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                <ul class="trail-items">
                                    <li class="trail-item trail-begin"><a href="index.php"><span>Home</span></a>
                                    </li>
                                    <li class="trail-item trail-end"><span>Registration</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end  -->

        <section class="element fix pt-130 pb-130 bg-white z-index-2">
            <div class="container">
                <div class="row">
                    
                    <div class="col-xl-12 mb-65">
                        <!--<div class="bd-section-title-wrapper">
                            <h3 class="bd-section-title mb-65">
                                Registration
                            </h3>
                        </div>-->
                        <div class="appointment-form-wrapper">
                            <div class="appointment-form-bg">
                                <img src="assets/img/bg/form-parallax.jpg" alt="Subharti Defence">
                            </div>
                            <div class="appointment-form">
                                <div class="bd-section-title-wrapper centered-title appointment-section-title-wrapper">
                                    <div class="bd-section-subtitle st-b">
                                        Not Just an Admission <span>A Commitment to the Nation!</span>
                                    </div>
                                    <h3 class="bd-section-title mb-50">REGSITER NOW!</h3>
                                </div>
                                <form action="registor.php" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="fname"  required="">
      </div>
    </div>
	
	<div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lname"  required="">
      </div>
    </div>
	
	<div class="row">
      <div class="col-25">
        <label for="address1">Address Line 1</label>
      </div>
      <div class="col-75">
        <input type="text" id="address1" name="address1"  required="">
      </div>
    </div>
	
	<div class="row">
      <div class="col-25">
        <label for="address1">Address Line 2</label>
      </div>
      <div class="col-75">
        <input type="text" id="address2" name="address2"  required="">
      </div>
    </div>
	
	<div class="row">
      <div class="col-25">
        <label for="city">City</label>
      </div>
      <div class="col-75">
        <input type="text" id="city" name="city"  required="">
      </div>
	  
	  <div class="col-25">
        <label for="State">State / Province</label>
      </div>
      <div class="col-75">
        <input type="text" id="state" name="state"  required="">
      </div>
	  
	  <div class="col-25">
        <label for="zip">Zip Code</label>
      </div>
      <div class="col-75">
        <input type="text" id="zip" name="zip"  required="">
      </div>
    </div>
	
    <div class="row">
      <div class="col-25">
        <label for="email">Email</label>
      </div>
      <div class="col-75">
        <input type="text" id="email" name="email"  required="">
      </div>
	  
	  
	
	<div class="row">
      <div class="col-25">
        <label for="mobile">Mobile</label>
      </div>
	  
      <div class="col-75">
        <input type="text" id="mobile" name="mobile"  required="">
      </div>
    </div>
	
    <div class="row">
      <div class="col-25">
        <label for="Courses">Courses</label>
      </div>
	  
      <div class="col-25">
        <select id="courses" name="courses" required="">
          <option>---Select Courses---</option>
		  <option value="NDA">NDA</option>
          <option value="CDS">CDS</option>
          <option value="AFCAT">AFCAT</option>
		  <option value="AGNIVEER">AGNIVEER</option>
		  <option value="RIMC">RIMC</option>
        </select>
      </div>
    </div>
	
    <!--<div class="row">
      <div class="col-25">
        <label for="subject">Subject</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject"  required=""></textarea>
      </div>
    </div>-->
	
	<div class="row">
      <div class="col-25">
        <label for="Courses">Years</label>
      </div>
	  
      <div class="col-75">
        <input type="text" id="year" name="year"  required="">
      </div>
    </div>
	
	<div class="row">
      <div class="col-25">
        <label for="checkbox">I have read and accepted the registration rules.</label>
      </div>
	  
      <div class="col-75">
        <input type="checkbox" id="years" name="years"  required="">
      </div>
    </div>
	
    <div class="appointment-btn mt-10">
             <!-- <a href="javascript:void(0)" class="border-btn" name="submit"><span>Request Now</span></a>-->
			 <input type="submit" class="border-btn" name="submit">
                                        </div>
  </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </section>

    </main>

    <!-- footer-area-start -->
        <?php  include("common/footer.php")?>
    <!-- footer-area-end -->

    <!-- preloader  -->
    
        <?php include("common/spinner.php")?>
    
    <!-- preloader end -->

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    <!-- JS here -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/waypoints.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/meanmenu.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/backToTop.js"></script>
    <script src="assets/js/nice-select.min.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.odometer.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/js_circle-progress.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from codeskdhaka.com/php/armado-prev/armado/about.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Jun 2025 02:44:03 GMT -->
</php>