<?php
include('config.php');

if($_SERVER['REQUEST_METHOD']=='POST')
  {
               
                   date_default_timezone_set('Asia/Kolkata');
                   $date_t = date('Y-m-d H:i:s'); 
				   
                                           $x = (mt_rand());
                                      	    function getRandomString($length = 6) {
                                            $validCharacters = "abcdefghijklmnopqrstuxyvwzABCDEFGHIJKLMNOPQRSTUXYVWZ";
                                            $validCharNumber = strlen($validCharacters);
                                            $result = "";
                                            for ($i = 0; $i < $length; $i++) {
                                                $index = mt_rand(0, $validCharNumber - 1);
                                                $result .= $validCharacters[$index];
                                            }
                                            return $result;
                                        }
                                        $ddlsession = getRandomString().$x;
									 
                  // $ddlsession     = $_POST['ddlsession'];
                 echo   $txtname        = mysqli_real_escape_string($con,$_POST['txtname']);
				   $expname = explode("<",$txtname);
				    $test = $expname[1];
				   
				   if($test!='')
				   {
				     print("<script language='javascript'> window.location.href='donate.php';</script>");   
				   }
				   else
				   {
                   $txtdob         = mysqli_real_escape_string($con,$_POST['txtdob']);
                   $ddlsex         = mysqli_real_escape_string($con,$_POST['ddlsex']);
                   $txtnation      = mysqli_real_escape_string($con,$_POST['txtnation']);
				   $ddlprog      = mysqli_real_escape_string($con,$_POST['ddlprog']);
                   $ddlcourse      = mysqli_real_escape_string($con,$_POST['ddlcourse']);
                   $ddlspec        = mysqli_real_escape_string($con,$_POST['ddlspec']);
                  // $ddlcategory    = $_POST['ddlcategory'];
                   $txtfathername  = mysqli_real_escape_string($con,$_POST['txtfathername']);
                   $txtmother      = mysqli_real_escape_string($con,$_POST['txtmother']);
                   $txtincome      = mysqli_real_escape_string($con,$_POST['txtincome']);
                   $txtaddress     = mysqli_real_escape_string($con,$_POST['txtaddress']);
                   $ddlcountry     = mysqli_real_escape_string($con,$_POST['ddlcountry']);
                   $ddlstate       = mysqli_real_escape_string($con,$_POST['ddlstate']);
                   $ddlcity        = mysqli_real_escape_string($con,$_POST['ddlcity']);
                   $txttelephone   = mysqli_real_escape_string($con,$_POST['txttelephone']);
                   $txtmobile      = mysqli_real_escape_string($con,$_POST['txtmobile']);
                   $txtemail       = mysqli_real_escape_string($con,$_POST['txtemail']);
                	$amount = mysqli_real_escape_string($con,$_POST['amount']);
                	$reach = mysqli_real_escape_string($con,$_POST['reach']);
					
      $tarun = "INSERT INTO form1
(`ddlsession`,`txtname`,`ddlsex`,`ddlprogram`,`ddlcourse`,`ddlspec`,`txtfathername`,`txtaddress`,`ddlcountry`,`ddlstate`,`ddlcity`,`txtmobile`,`txtemail`,`remarks`,`dd_no`,`amount`,`bihar_status`,`entrydate`)
VALUES ('$ddlsession','$txtname','$ddlsex','$ddlprog','$ddlcourse','$ddlspec','$txtfathername','$txtaddress','$ddlcountry','$ddlstate','$ddlcity','$txtmobile','$txtemail','$reach','$otp','$amount','$biharstatus','$date_t')";



    $result = mysqli_query($con,$tarun);
           if($result) 
              {   
                 print("<script language='javascript'>  window.location.href='Kit/payu/pay.php?t_ses=$ddlsession';</script>");
              }
            else 
              {
                   print("<script language='javascript'>alert('Error');  window.location.href='donate.php?errorf=errorf';</script>");
              }

        	         
        }
		}
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Donate Now - Subharti Alumni</title>
    <meta name="description" content="Donate Now - Subharti Alumni">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://subharti.org/images/logo/Subharti Favicon.png" type="image/x-icon">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/flaticon-skillgro.css">
    <link rel="stylesheet" href="assets/css/flaticon-skillgro-new.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/default-icons.css">
    <link rel="stylesheet" href="assets/css/select2.min.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/plyr.css">
    <link rel="stylesheet" href="assets/css/spacing.css">
    <link rel="stylesheet" href="assets/css/tg-cursor.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

    <!--Preloader-->
    <div id="preloader">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class="loader-icon"><img src="img/SVSUwithNaacBlue_Logo (1).png" alt="Preloader"></div>
            </div>
        </div>
    </div>
    <!--Preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="tg-flaticon-arrowhead-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    <?php  include('common/header.php') ?>
    <!-- header-area-end -->



    <!-- main-area -->
    <main class="main-area fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h3 class="title">Donate Now</h3>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="<?php  $url ?>/index.php">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span property="itemListElement" typeof="ListItem">Donate Now</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb__shape-wrap">
                <img src="assets/img/others/breadcrumb_shape01.svg" alt="img" class="alltuchtopdown">
                <img src="assets/img/others/breadcrumb_shape02.svg" alt="img" data-aos="fade-right" data-aos-delay="300">
                <img src="assets/img/others/breadcrumb_shape03.svg" alt="img" data-aos="fade-up" data-aos-delay="400">
                <img src="assets/img/others/breadcrumb_shape04.svg" alt="img" data-aos="fade-down-left" data-aos-delay="400">
                <img src="assets/img/others/breadcrumb_shape05.svg" alt="img" data-aos="fade-left" data-aos-delay="400">
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- singUp-area -->
        <section class="singUp-area section-py-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="singUp-wrap">
                            <h2 class="title">Donate Now</h2>
                            <!--<p>Just fill in some of your details and be a proud member of Subharti Alumni Network !!!</p>-->
                            <!--<div class="account__social">
                                <a href="#" class="account__social-btn">
                                    <img src="assets/img/icons/google.svg" alt="img">
                                    Continue with google
                                </a>
                            </div>
                            <div class="account__divider">
                                <span>or</span>
                            </div>-->
                            <form action="#" class="account__form" method="post">
                                <div class="row gutter-20">
                                    <div class="col-md-12">
                                        <div class="form-grp">
                                            <label for="fast-name">Full Name <span style="color:#FF3300">*</span></label>
                                            <input type="text" id="fast-name" name="txtname"  data-validation="required"  required="required" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <label for="last-name">Email <span style="color:#FF3300">*</span></label>
                                            <input type="email" name="txtemail"  required="required"  placeholder="Email Address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <label for="fast-name">Mobile Number <span style="color:#FF3300">*</span></label>
                                            <script>
								  function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
								  </script>
                                            <input placeholder="10 Digit Mobile Number" maxlength="10" name="txtmobile" id="mobile" type="text" required="required" onKeyPress="return isNumber(event)">
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="form-grp">
                                    <label for="password">Address <span style="color:#FF3300">*</span></label>
                                    <input type="text" id="address"  name="txtaddress"  data-validation="required"  required="required" placeholder="Address">
                                </div>
                                
                                    
                                        <div class="form-grp">
                                            <label for="fast-name">College <span style="color:#FF3300">*</span></label>
                                            <select id="course" name="ddlprog" data-validation="required" required="required" placeholder="Course" data-validation-error-msg="Please enter College" style="    width: 100%;
    padding: 14px 20px;
    font-size: 16px;
    color: var(--tg-heading-color);
    border: 1px solid #E1E1E1;
    background: var(--tg-common-color-white);
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -o-border-radius: 5px;
    -ms-border-radius: 5px;
    border-radius: 5px;
    line-height: 1;
    -webkit-transition: all 0.3s ease-out 0s;
    -moz-transition: all 0.3s ease-out 0s;
    -ms-transition: all 0.3s ease-out 0s;
    -o-transition: all 0.3s ease-out 0s;
    transition: all 0.3s ease-out 0s;"> 
                    <option value="">--Select College--</option>
                <option value="Faculty of Medicine">Faculty of Medicine</option>
                <option value="Faculty of Dental Sciences">Faculty of Dental Sciences</option>
                <option value="Faculty of Nursing">Faculty of Nursing</option>
                <option value="Faculty of Physiotherapy & Allied Health Sciences">Faculty of Physiotherapy & Allied Health Sciences</option>
                <option value="Faculty of AYUSH">Faculty of AYUSH</option>
                <option value="Faculty of Pharmacy">Faculty of Pharmacy</option>
                <option value="Faculty of Law">Faculty of Law</option>
                <option value="Faculty of Engineering & Technology">Faculty of Engineering & Technology</option>
                <option value="Faculty of Science">Faculty of Science</option>
                <option value="Department of Education">Department of Education</option>
                <option value="Department of Physical Education">Department of Physical Education</option>
                <option value="Subharti College of Management & Commerce">Subharti College of Management & Commerce</option>
                <option value="Subharti College of Hotel Management">Subharti College of Hotel Management</option>
                <option value="Faculty of Fine Arts">Faculty of Fine Arts</option>
                <option value="Department of Journalism & Mass Comm">Department of Journalism & Mass Comm</option>
                <option value="Department of Languages">Department of Languages</option>
                <option value="Department of Library & Information Science">Department of Library & Information Science</option>
                <option value="Department of Home Science">Department of Home Science</option>
                <option value="Department of Liberal Arts & Humanities">Department of Liberal Arts & Humanities</option>
                <option value="School of Buddhist Studies">School of Buddhist Studies</option>
                <option value="Subharti Polytechnic College">Subharti Polytechnic College</option>
                </select>
                                        </div>
                                  
                                    
                                
                                    

                                    
                                
                                     
                                <div class="form-grp">
                                            <label for="last-name">Amount</label>
                                            <input type="text" id="amount"  placeholder="Amount"  name="amount" id="amount" onKeyPress="return isNumber(event)">
                                        </div>
                                <!--<button type="submit" class="btn btn-two arrow-btn" name="submit">Register <img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></button>-->
                                <input type="submit" name="submit" value="Donate Now" class="btn btn-two arrow-btn">
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- singUp-area-end -->

    </main>
    <!-- main-area-end -->

    <!-- footer-area -->
    <?php  include('common/footer.php') ?>
    <!-- footer-area-end -->


    <!-- JS here -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.odometer.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/tween-max.min.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/jquery.marquee.min.js"></script>
    <script src="assets/js/tg-cursor.min.js"></script>
    <script src="assets/js/vivus.min.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/svg-inject.min.js"></script>
    <script src="assets/js/jquery.circleType.js"></script>
    <script src="assets/js/jquery.lettering.min.js"></script>
    <script src="assets/js/plyr.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        SVGInject(document.querySelectorAll("img.injectable"));
    </script>
</body>

</html>