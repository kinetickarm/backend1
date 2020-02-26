<?php
include 'dbconnection1.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from designarc.biz/demos/hilltown/theme/activities.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2019 15:45:13 GMT -->
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

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
     <style >
         .button{
  background-color:black;
  border: none;
  color: white;
  padding: 15px 25px;
  text-align: center;
  font-size: 16px;
  cursor: pointer;
  -webkit-transition-duration: 0.5s;
  -o-transition-duration: 0.5s;
  transition-duration: 0.5s;
}

 .button:hover{
  background-color: #039287;
  color: white;
}



.activities_area .activities_item_inner .activities_item_row .activities_content p {
  font-family: "Open Sans", sans-serif;
  font-size: 17px;
  line-height: 26px;
  letter-spacing: .225px;
  color: #000000;
}


.activities_title .resort_title p{
  font-size: 22px;
  font-family: "Open Sans", sans-serif;
  line-height: 26px;
  color: #000000;
  letter-spacing: .225px;
  padding-top: 30px;
}


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

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.desc {
  padding: 15px;
  text-align: center;
}

#application{
  background-color: #039287; /* Green */
  border: none;
  font-family: "Montserrat", sans-serif;
  color: white;
  padding: 3px 6px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 3px;

             }

             #application:hover{
                background-color: white;
                border:1px solid #039287;
                color: #039287;
                font-family: "Montserrat", sans-serif;
             }

     </style>

        
    </head>
    <body>

        <!--================Header Area =================-->
<?php include 'header.php'; ?>
        <!--================Header Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_content">
                    <h3>Fees</h3>
                    <ul>
                        <li class="active"><a href="home.php" style="color: #039287">Home</a></li>
                        <li><a href="fees.php">Fees</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Activities Area =================-->
        <section class="activities_title">
            <div class="container">
                <div class="resort_title">
                    <h2><span style="color: #039287">Tutorial</span> for Fees payment</h2>
                    <br>
                    <h4>Follow the given demonstration and further proceed. </h4>
                     
                    <br><br>
                    <p>Go through the given tutorial and then press click Here to redirect to <b style="color:#039287"> SBI fees payment</b> link. </p>
                    <br>
                   <a href="https://www.onlinesbi.com/sbicollect/icollecthome.htm" target="_blank"><button class="button">Click Here</button></a>

                    <!-- <button onclick="location.href=
                    'https://www.onlinesbi.com/sbicollect/icollecthome.htm';">Click Here</button> -->
                </div>
            </div>
        </section>
        <!--================Activities Area =================-->
        
        <!--================Activities Area =================-->
        <section class="activities_area">
            <div class="activities_item_inner">
                <div class="container">
                    <div class="row activities_item_row">
                        <div class="col-md-8" class="dropdown">
                            <a href="activities.html" class="activities_img">
                                <img src="img/activities/step1.png" alt="Oops!!Sorry">
                            </a>
                        </div>
                        <div class="col-md-6" >
                            <div class="activities_content">
                                <h4>Step: <span>1</span></h4>
                                <p><b>- You will see this page after you commence the process.</b></p>
                                <p><b>- Select <b style="color:#039287">'Gujarat'</b> for state of corporate/institution and select <b style="color:#039287">'Educational Institutions'</b> for type of corporate /institutions.</b> </p>
                                <p><b>- simply press <b style="color:#039287">'Go'</b></b></p>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="activities_item_inner">
                <div class="container">
                    <div class="row activities_item_row">
                       <div class="col-md-6">
                            <div class="activities_content left_activities">
                                <h4>STEP: <span>2</span></h4>
                                <p><b>- As you enter the new page Select <b style="color:#039287">'Vishwakarma government engineering college'</b> for educational institutions name.</b></p>
                            
                                <p><b>- simply press <b style="color:#039287">'Submit'</b></b></p>

                                
                            </div>
                        </div>
                        <div class="col-md-8">
                            <a href="activities.html" class="activities_img">
                                <img src="img/activities/step2.png" alt="Oops!!Sorry">
                            </a>
                        </div>
                    </div>
                </div>
            </div>




            <div class="activities_item_inner">
                <div class="container">
                    <div class="row activities_item_row">
                       <div class="col-md-8">
                            <a href="activities.html" class="activities_img">
                                <img src="img/activities/step3.png" alt="Oops!!Sorry">
                            </a>
                        </div>
                       <div class="col-md-6">
                            <div class="activities_content">
                                <h4>STEP: <span>3</span></h4>
                                <p><b>- Now you have accessed to the college confirmation page as you see the name and logo of the college. </b></p>
                            
                                <p><b>- Select <b style="color:#039287">'Hostel fee'</b> for select payment category. </b></p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="activities_item_inner">
                <div class="container">
                    <div class="row activities_item_row">
                       <div class="col-md-6">
                            <div class="activities_content left_activities">
                                <h4>STEP: <span>4</span></h4>
                               <p><b>- You would get a page containing and asking for some of your personal details </b></p>
                            
                                <p><b>- Kindly fill all the <b style="color:#039287">mandatory details. </b> </b></p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <a href="activities.html" class="activities_img">
                                <img src="img/activities/step4.png" alt="Oops!!Sorry">
                            </a>
                        </div>
                    </div>
                </div>
            </div>



            <div class="activities_item_inner">
                <div class="container">
                    <div class="row activities_item_row">
                       <div class="col-md-8">
                            <a href="activities.html" class="activities_img">
                                <img src="img/activities/step5.png" alt="Oops!!Sorry">
                            </a>
                        </div>
                       <div class="col-md-6">
                            <div class="activities_content">
                                <h4>STEP: <span>5</span></h4>
                                <p><b>- To view your <b style="color:#039287">E-receipt</b> given information must be filled</b></p>
                                <p><b>- Make sure no inconsistency occurs</b> </p>
                                <p><b>- Simply press <b style="color:#039287">'Submit'</b></b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
            error_reporting(E_ALL ^ E_NOTICE); 

function upload_image($file_name,$connection){
$target_dir = "documents/";
$target_file = $target_dir.basename($_FILES[$file_name]["name"]);//base name gives file name with extension
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));//path info function gives info about path and pathinfo_extension gives only extension of file
echo $imageFileType;
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES[$file_name]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
       echo "<script>alert('file is not a image');</script>";
        $uploadOk = 0;
    }
    echo "<br>";
}
// Check if file already exists
/*if (file_exists($target_file)) {
    echo "Sorry, file already exists";
    $uploadOk = 1;
    //unlink delete selected file:here if file exist thn unlink delete that file and then we can upload again
    /*if (unlink($target_file)) {
        echo "and now we deleted";
        # code...
    }
    else{
        echo "can't deleted";
    }
    echo ".that so try again!<br>";*/

// Check file size
/*if ($_FILES[$file_name]["size"] > 50000000){//size is in byte:500000=500kb 
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
    echo "<br>";
}*/
// Allow certain file formats
if(!($imageFileType == "jpg" or $imageFileType == "png" or $imageFileType == "jpeg"
or $imageFileType == "gif" )) {
    if(!($imageFileType == ''))
    echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed')</script>";
    $uploadOk = 0;
    echo "<br>";
}
return $uploadOk;
}
// Check if $uploadOk is set to 0 by an error
/*if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES[$file_name]["tmp_name"], $target_file)) {


    $image=$_FILES[$file_name]['name'];
    $insert_image = "insert into images ($image_column1,$image_column2) values('$image')";
    $run = mysqli_query($connection,$insert_image);
    if($run){
        echo "<br>image inserted in database<br>";
    }
    else
        echo "<br>image can't inserted in database<br>";

    
       
    } */
   

if(upload_image('reciept',$connection1)){
    $target_dir = "documents/";
    $target_file1 = $target_dir.basename($_FILES['reciept']["name"]);
   
    if (move_uploaded_file($_FILES['reciept']["tmp_name"], $target_file1)) {


    $reciept=$_FILES['reciept']['name'];
    
    $email = $_SESSION["email"];
    if(mysqli_num_rows(mysqli_query($connection1,"select email_id from admission where email_id = '$email'")) == 1)
         if($row = mysqli_fetch_array(mysqli_query($connection1,"select id from admission where email_id='$email'"),MYSQLI_ASSOC)) $id= $row['id'];
    
    $insert_image = "insert into feereciept (id,reciept) values('$id','$reciept')";
    $run = mysqli_query($connection1,$insert_image);
    mysqli_query($connection1,"update admission set fees='1' where id='$id'");
    if($run){
        echo "<br><script>alert('image inserted in database');</script><br>";
    }
    else{
        echo "<br>image can't inserted in database<br>";
    }

}
}
            ?>




            <div class="activities_item_inner">
                <div class="container">
                    <div class="row activities_item_row">
                       <div >
                            <div class="activities_content left_activities">
                                <!-- <h4>visit to <span>places</span></h4>
                                <p>Equia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam. quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea volup.</p> -->
                                
                                 <div style="color: red">
                                    <h3 >*After the completion of process as shown in above tutorial, you must upload E receipt here for further procedure.
                                    </h3>
                                </div>
                                <br>
                                <?php  
                                if($detail=mysqli_fetch_array(mysqli_query($connection1,"select * from rounds order by round desc"),MYSQLI_ASSOC)){
                //echo "runn";
            $round=$detail['round'];
            $sdate_application=$detail['sdate_application'];
            $edate_application=$detail['edate_application'];
            $sdate_fees=$detail['sdate_fees'];
            $edate_fees=$detail['edate_fees'];
            $edate_round=$detail['edate_round'];
            $decription=$detail['decription'];
                                /*echo "$_SESSION['student_sdate_fees']"."$_SESSION['student_edate_fees']";*/
                                if (!(date("Y-m-d")>=$sdate_fees and date("Y-m-d")<=$edate_fees)) {
                                     echo "<h4 style='color:red; font-size:20px;'>You can not upload fees reciept during this time. please be update with round shedule and upload fees reciept in right duration</h4><br>";
                                     }

                                else{ ?>
                                 
                                <form action="" method="post" enctype="multipart/form-data">
                                     <input type="file" name="reciept"><br><br>
                                       <button id="application" type='submit'>upload</button><?php }
                                       } ?>
                                </form>
                                <br>
                               
                            </div>
                        </div>
                       <!--  <div class="col-md-6">
                            <a href="activities.html" class="activities_img">
                                <img src="img/activities/step6.png" alt="Oops!!Sorry">
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>


        <!--================End Activities Area =================-->
        
        <!--================Footer Area =================-->
 <?php include 'footer_student.php'; ?>
        <!--================End Search Box Area =================-->
        
        
        
        
        
        <!--================End Footer Area =================-->
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

<!-- Mirrored from designarc.biz/demos/hilltown/theme/activities.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2019 15:45:30 GMT -->
</html>