<?php 
define('DB_HOST', 'localhost');
define('DB_NAME', 'medicals_family');
define('DB_USERNAME','medicals_family');
define('DB_PASSWORD','niet.4997');
$con = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
//if( mysqli_connect_error()) echo "Failed to connect to MySQL: " . mysqli_connect_error();

if($_POST['submit']=="Submit")
{
  $name = $_POST['name'];
  $age = $_POST['age'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $qualification = $_POST['qualification'];
  $applying = $_POST['applying'];
  $current = $_POST['current'];
  $other = $_POST['other'];
  $date = $_POST['date'];
  $imgfile=$_FILES["pres"]["name"];
// get the image extension
$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
// allowed extensions
$allowed_extensions = array(".jpg","jpeg",".png",".doc",".pdf");
// Validation for allowed extensions .in_array() function searches an array for a specific value.
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png / doc/ pdf format allowed'); window.location.href='job-opportunities.php';</script>";
}

else if (($_FILES["pres"]["size"] > 5000000)) 
{
echo "<script>alert('File Size Exceeds 5MB'); window.location.href='job-opportunities.php';</script>";
}   
else
{
//rename the image file
$imgnewfile=md5($imgfile).$extension;
// Code for move image into directory
move_uploaded_file($_FILES["pres"]["tmp_name"],"resume/".$imgnewfile);
// Query for insertion data into database
  //$date=date('Y-m-d H:i;s');             
  $query=mysqli_query($con,"insert into resume(name,age,email,mobile,qualification,applying,current,other,pres,date) values('$name','$age','$email','$mobile','$qualification','$applying','$current','$other','$imgnewfile','$date')");
  if($query)
  {
         print("<script language='javascript'>alert('Resume uploaded successfully. Our Team will call you shortly'); window.location.href='job-opportunities.php';</script>"); 
		
		}
		else
		{
          print("<script language='javascript'> alert('Error'); window.location.href='job-opportunities.php';</script>");

		}		
                 						

}
} 
?>
<?php 
//include 'config/config.php';
include 'header.php';
include 'sidebar.php';?>
<!-- Start of slider area -->
<div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                    <img src="jobbanner.jpeg" style="width:100%">
                    </div>
                    </div>
                    </div>
 <!--<section class="breadcrumbs-area bg-3 ptb-110 bg-opacity bg-relative">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="breadcrumbs">
                            <h2 class="page-title" style="text-transform: uppercase;">Job Opportunities</h2>
                        </div> 
                        <img src="jobbanner.jpeg" style="width:100%">
                    </div>
                </div>
            </div>
        </section>-->
        <!-- Start page content -->
        <section class="courses-details pt-30">
            <div class="container">
                <div class="row">
                 

                   <div class="col-md-3 col-sm-3"> </div>
                    <div class="col-md-6 col-sm-6">
                      <div class="sidebar-menu">
          <div id="myformdata">
           
          <div class="blog_single_post_head_title" align="center">
            <h3>Vacancy Form</h3>
            
            </div>
        
    <div class="feedback_query" >
                <div>
                                      
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" name="name" id="your_name" maxlength="50"  value="" class="form-control required requiredField your_name" placeholder="Your Name *" required/>
                                <span class="errorName error"></span>
                        </div>
                         <div class="form-group">
                            <input type="number" name="age" id="age" maxlength="50"  value="" class="form-control required requiredField your_name" placeholder="Age *" required/>
                                <span class="errorName error"></span>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="your_email" maxlength="100" value="" class="form-control required requiredField your_email" placeholder="Your E-mail *" required/>
                                <span class="error errorEmail"></span>
                        </div>
                        <div class="form-group">
                            <input type="text" name="mobile" id="your_mobile" maxlength="10" value="" class="form-control required requiredField your_mobile" placeholder="Your 10 Digit Mobile Number *"/>
                                <span class="errorMobile error"></span>
                        </div>
                        <div class="form-group">
                            <input type="text" name="qualification" id="qualification" maxlength="100" value="" class="form-control required requiredField  subject" placeholder="Qualification *" required/>
                                <span class="error errorEmail"></span>
                        </div>
                         <div class="form-group">
                            <input type="text" name="applying" id="applying" maxlength="100" value="" class="form-control required requiredField  subject" placeholder="Applying For *" required/>
                                <span class="error errorEmail"></span>
                        </div>
                         <div class="form-group">
                            <input type="text" name="current" id="current" maxlength="100" value="" class="form-control required requiredField  subject" placeholder="Current Job Details"/>
                                <span class="error errorEmail"></span>
                        </div>
                        <div class="form-group">
                            <input type="text" name="other" id="other"  value="" class="form-control required requiredField  subject" placeholder="Any Other Details"/>
                                <span class="error errorEmail"></span>
                        </div>
                        <div class="form-group">
                          <input type="file" class="form-control"  data-bv-field="number" name="pres" id="pres" required>
                          <input type="hidden" name="date" value="<?php echo  date('Y-m-d'); ?>">
              </div>
              <ul>
              <li><strong>* Document should be in .doc, .pdf, .jpeg, .jpg, .png format </strong> </li>
              <li><strong>* Document size should be less than 5MB.</strong></li>
              </ul>
                        <div class="form-group">
                        <br>
                            <input type="submit" name="submit"  class="btn-primary1" value="Submit" id="btn-primary"  style="background:#FF9900">
                        </div>
                        
                    </form>
                </div>
                <h3 style="color:#FF9900"><center>For more details contact:</center></h3>
                <p><b>Dr. Archita Kansal Tiwari</b><br>
MD Pathology<br>
Assistant Medical Superintendent<br>
HR & Projections<br>
<a style="color:black" href="mail to:csshpromotion@gmail.com">Email: csshpromotion@gmail.com</a></p>
            </div>
            </div></div></div>
                   <div class="col-md-3 col-sm-3"></div>
     <!--<div class="col-md-5 col-sm-8">
                        <div class="course-left-sidebar">
 
        <img src="WhatsApp Image 2023-06-08 at 2.45.24 PM.jpeg" style="width:100%">

</div></div>-->
  
                     </div></div>                       </div>
                                            
        </section>
                    <?php


include 'footer.php';
?> 
<style>
.tabs ul li a{font-weight: 600; color:#32626d;}
</style>
