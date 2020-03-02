<?php session_start();
include 'dbconnection1.php';
?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from designarc.biz/demos/hilltown/theme/event-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Dec 2019 05:39:05 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
      <link rel="icon" href="img/logo.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Hostel Management</title>


        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/stroke-icon/style.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="vendors/animate-css/animate.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/magnify-popup/magnific-popup.css" rel="stylesheet">
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <link href="vendors/bootstrap-selector/bootstrap-select.css" rel="stylesheet">
        <link href="vendors/lightbox/simpleLightbox.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
    
        <style type="text/css">
            .resort_title1 h2 {
  font-size: 27px;
  font-weight: bold;
  font-family: "Montserrat", sans-serif;
  letter-spacing: .96px;
  text-transform: uppercase;
  color: #242424;
  margin-top: 20px;
  padding-bottom: 10px;
}

.resort_title1 h2 span {
  color: #ffb606;

  padding-left: 20px;
}
            
        .h_middle_text2 {
                 
                font-family: "Montserrat", sans-serif;
                 font-size: 25px;
                font-weight: bold;
                margin-top: 15px;
                /*letter-spacing: .96px;*/
                text-transform: uppercase;
                 padding-bottom: 15px;
                 position: relative;
            }

            .h_middle_text2 h3{
                 color: #ffb606;
                letter-spacing: 3.3px;
            }

            .h_middle_text2 h5{
                color: #ffb606;
            }
            #H{
                font-size: 35px;

            }
            .event_details_area{
                background:#E3E4FA;
            }

            .s_comment_area {
                margin-top:45px;
            }

            .s_comment_area h3 {
                font-size: 25px;
                text-transform: uppercase;
                font-family: "Montserrat", sans-serif;
                font-weight: bold;
                letter-spacing: .66px;
                color: #242424;
                padding-bottom: 25px;
            }

            .s_comment_area .s_comment_inner {
               	width: 100%;
                border: 2px solid #eeeeee;
                padding: 50px 50px;
                margin-right: 30px;
            }
            
            .s_comment_area .s_comment_inner .contact_us_form .form-group input .inputfile{
                position: absolute;
                padding:15px
                cursor: pointer;
                background: #E3E4FA;
                border-color: black;
                border-radius: 10px;
                border-width: 2px;
                font-size: 16px;
                color: black;
                font-family: "Open Sans", sans-serif;
                letter-spacing: .42px;
            }

            .s_comment_area .s_comment_inner .contact_us_form .form-group .inputfile:focus{
                border: 1px solid white;
            }
            .s_comment_area .s_comment_inner .contact_us_form .form-group select{
                background: #E3E4FA;
                font-size: 16px;
                border: 2px solid #242424;
                border-radius: 10px;
                color: black;
                font-family: "Open Sans", sans-serif;
                letter-spacing: .42px;
                padding:15px;
                text-align: left;
                width: 100%;
                height:56px;
            }
            .s_comment_area .s_comment_inner .contact_us_form .form-group select:focus {
                border: 1px solid white;
            }
            .status_area{
            	background: white;
            	padding: 0px;
            	margin: 20px;
            }
            .status_area .heading h2{
           		background: white;
            	text-align: left;
            	font-style: italic;
            	font-size: 30px;
            	padding: 0px 80px;
            	letter-spacing: .42px;
            	font-family: "Open Sans",sans-serif;
            	margin: 50px #E3E4FA;

            }
            .s_comment_area .s_comment_inner .contact_us_form .form-group input {
                background: #E3E4FA;
                font-size: 16px;
                border: 2px solid #242424;
                border-radius: 10px;
                color: black;
                font-family: "Open Sans", sans-serif;
                letter-spacing: .42px;
            }

            .s_comment_area .s_comment_inner .contact_us_form .form-group input.placeholder {
                font-size: 16px;
                color: black;
                font-family: "Open Sans", sans-serif;
                letter-spacing: .42px;
            }

            .s_comment_area .s_comment_inner .contact_us_form .form-group input:-moz-placeholder {
                font-size: 16px;
                color: black;
                font-family: "Open Sans", sans-serif;
                letter-spacing: .42px;
            }

            .s_comment_area .s_comment_inner .contact_us_form .form-group input::-moz-placeholder {
                font-size: 16px;
                color: black;
                font-family: "Open Sans", sans-serif;
                letter-spacing: .42px;
            }

.s_comment_area .s_comment_inner .contact_us_form .form-group input::-webkit-input-placeholder {
  font-size: 16px;
  color: black;
  font-family: "Open Sans", sans-serif;
  letter-spacing: .42px;
}

.s_comment_area .s_comment_inner .contact_us_form .form-group input:focus {
  border: 1px solid white;
}

.s_comment_area .s_comment_inner .contact_us_form .form-group textarea {
  background: #E3E4FA;
  border-color: black;
  border-radius: 10px;
  border-width: 2px;
  font-size: 16px;
  color: black;
  font-family: "Open Sans", sans-serif;
  letter-spacing: .42px;
}

.s_comment_area .s_comment_inner .contact_us_form .form-group textarea.placeholder {
  font-size: 16px;
  color: black;
  font-family: "Open Sans", sans-serif;
  letter-spacing: .42px;
}

.s_comment_area .s_comment_inner .contact_us_form .form-group textarea:-moz-placeholder {
  font-size: 16px;
  color: black;
  font-family: "Open Sans", sans-serif;
  letter-spacing: .42px;
}

.s_comment_area .s_comment_inner .contact_us_form .form-group textarea::-moz-placeholder {
  font-size: 16px;
  color: black;
  font-family: "Open Sans", sans-serif;
  letter-spacing: .42px;
}

.s_comment_area .s_comment_inner .contact_us_form .form-group textarea::-webkit-input-placeholder {
  font-size: 16px;
  color: black;
  font-family: "Open Sans", sans-serif;
  letter-spacing: .42px;
}

.s_comment_area .s_comment_inner .contact_us_form .form-group textarea:focus {
  border: 1px solid white;
}

.s_comment_area .s_comment_inner .contact_us_form .form-group:last-child {
  margin-top: 40px;
}
.event_detials_inner .s_comment_area {
  margin-top: 0px;
  margin-bottom: 0px;
}
.event_details_area {
  padding: 60px 60px;
}

    </style>    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <!--================Header Area =================-->
        <?php include 'header.php'; ?>
        <!--================Header Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_content">
                    <h3>COMPLAINT</h3>
                    <ul>
                        <li class="active"><a href="home.php">Home</a></li>
                        <li><a href="complaint01.php">Complaint</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Event Details Area =================-->
        <section class="event_details_area">
            <div class="container" align="center">
                <div class="row">
                    <div class="col-md-16">
                        <div class="event_detials_inner">
                            <div class="s_comment_area">
                            <div class="main_big_title">
                    <h2>complaint&nbsp<span>form</span></h2>
                </div>
                                <div class="s_comment_inner">
                                    <form class="row contact_us_form" id="contactForm" validate="validate" method="POST" enctype="multipart/form-data" action="complaint01.php">
                                        <?php 
                                        $email=$_SESSION['email'];
                                        $query="select * from admission where email_id='$email'";
                                        $run=mysqli_query($connection1,$query);
                                        $result=mysqli_fetch_array($run,MYSQLI_ASSOC);
                                        ?>
                                        <div class="form-group col-md-12" >
                                            <input type="text" class="form-control" id="name" name="name" style="text-transform: none" value="<?php echo $result['name']?>" required="required" readonly="readonly">
                                        </div>
                                        <?php 
                                        $query1="select * from admission_form where email='$email'";
                                        $run1=mysqli_query($connection1,$query1);
                                        $result1=mysqli_fetch_array($run1);
                                        ?>
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control" id="contact" name="contact" style="text-transform: none" value="<?php echo $result1['phone_number']?>" required="required" readonly>
                                        </div>
                                        <div class="form-group col-md-8">
                                            <input type="email" class="form-control" id="email" name="email" style="text-transform: none" value="<?php echo $email ?>" required="required" readonly>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control" id="branch" name="branch" style="text-transform: none" value="<?php echo $result['branch'] ?>" required="required" readonly>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control" id="sem" name="sem" style="text-transform: none" value="<?php echo $result['sem'] ?>" required="required" readonly>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control" id="room" name="room" style="text-transform: none" value="<?php echo $result['room_no'] ?>" required="required" readonly>
                                        </div>
                                        <div class="form-group col-md-8">
                                            <select type="text" id="category" name="category" style="text-transform: none" required="required">
                                                <option value="" disabled selected>Select Category Of Your Complaint</option>
                                                <option value="Water related complaint">Water related complaint</option>
                                                <option value="Electricity related complaint">Electricity related complaint</option>
                                                <option value="Cleanliness related complaint">Cleanliness related complaint</option>
                                                <option value="Complaint related to mess(food)">Complaint related to mess(food)</option>
                                                <option value="Complaint related to accomodation">Complaint related to accomodation</option>
                                                <option value="Complaint related to illegal hostelites">Complaint related to illegal hostelites</option>
                                                <option value="Complaint related to internet connectivity">Complaint related to internet connectivity</option>
                                                <option value="Complaint of missing/stolen things">Complaint of missing/stolen things</option>
                                                <option value="Other complaints">Other complaints</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                        	<!--<label for="file">Upload any image/video for reference and proof</label>-->
                                            <input class="inputfile form-control" type="file" accept="video/*,image/*" rows="1" name="proof" id="proof" multiple capture style="padding: 15px;height: 56px;">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <textarea class="form-control" name="description" id="description" rows="1" placeholder="Write the description about your complaint/problem" style="text-transform: none" required="required"></textarea>
                                        </div>
                                        <div>
                                        	<label>NOTE: &nbsp 1)Upload any image for reference and proof in the given field.</label>&nbsp &nbsp
                                        	<label>2)Strict actions will be taken if your complaint is detected as fake.</label>
                                        </div>
                                        <button type="submit" id="submit" class="btn btn-default" style="background:#E3E4FA;font-size: 16px;border: 2px solid #242424;border-radius: 10px;color: black;padding: 10px;margin: 20px;width: 100px;">Submit</button>
                                        <input type="hidden" name="submit" value="submit">
                                        <button type="reset" id="reset" class="btn btn-default" style="background: #E3E4FA;font-size: 16px;border:2px solid #242424;border-radius: 10px;color: black;padding: 10px;margin: 20px;width: 100px;">Reset</button>   

                                    <?php 
                                    error_reporting(E_ERROR  | E_PARSE);
                        $submit=$_POST["submit"];
                        if($submit=='submit')
                       { 	
                        $name=$_POST["name"];
                        $email=$_POST["email"];
                        $contact=$_POST["contact"];
                        $branch=$_POST["branch"];
                        $sem=$_POST["sem"];
                        $category=$_POST["category"];
                        $roomno=$_POST["room"];
                        $desc=$_POST["description"];
                        
                        $query="select max(cid) from complaint";
                        $run=mysqli_query($connection1,$query);
                        $row=mysqli_fetch_array($run);
                        $maxcid=$row[0];
                        if($maxcid==" ")
                            $cid="CID1";
                        else{
                        $cid=substr($maxcid,3);
                        $cid=intval($cid);
                        $cid="CID".($cid + 1);
                       }
                        
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["proof"]["name"]);
$uploadOk = 1;
/*list($width, $height, $type, $attr) = getimagesize($_FILES['proof']['name']);
echo $width;
echo $height;*/
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["proof"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        //echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    //echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["proof"]["size"] < 5000000) {
    //echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
   // echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["proof"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["proof"]["name"]). " has been uploaded.";
    } else {
        //echo "Sorry, there was an error uploading your file.";
    }
}
					$proof=$_FILES['proof']['name'];
					$status="Pending";
 					$update = "insert into complaint (cid,name,email,contact,branch,sem,roomno,category,description,proof,status) values ('$cid','$name','$email','$contact','$branch','$sem','$roomno','$category','$desc','$proof','$status')";
                    $execute=mysqli_query($connection1,$update);
                        
                    if(!$execute){
                           $error= mysqli_error($connection1);
                           echo $error;}

}
?>

                        </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section style="background: #E3E4FA;width: 100%;margin-bottom: 20px;height: 100px;">
        	<div align="center" style="background: #E3E4FA;width: 100%;"><center>
        	<a href="complaint02.php"><button type="view" id="view" class="btn btn-default"  style="background:#E3E4FA;font-size: 20px;border: 2px solid #242424;border-radius: 10px;color: black;padding: 15px;margin: 30px;width: 300px;">View previous complaints</button></a></center>
    		</div>
    	</section>
        <!--================End Event Details Area =================-->
        
                <!--================Footer Area =================-->
 <?php include 'footer_student.php'; ?>
        <!--================End Footer Area =================-->

        
        <!--================Search Box Area =================-->
        <div class="search_area zoom-anim-dialog mfp-hide" id="test-search">
            <div class="search_box_inner">
                <h3>Search</h3>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="icon icon-Search"></i></button>
                    </span>
                </div>
            </div>
        </div>
        <!--================End Search Box Area =================-->
        
        
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.2.4.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        
        <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/counterup/waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/bootstrap-selector/bootstrap-select.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        
        <!-- instafeed-->
        <script type="text/javascript" src="vendors/instafeed/instafeed.min.js"></script>
        <script type="text/javascript" src="vendors/instafeed/script.js"></script>
        
        <script src="js/theme.js"></script>
    </body>

<!-- Mirrored from designarc.biz/demos/hilltown/theme/event-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Dec 2019 05:39:15 GMT -->
</html>
