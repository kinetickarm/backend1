<?php session_start(); ?>
<?php include 'dbconnection1.php'; ?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from designarc.biz/demos/hilltown/theme/room-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2019 17:36:39 GMT -->
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
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

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

            table,th,td{
                padding: 5px;
            }

            .submit{
  background-color: #039287; /* Green */
  border: none;
  font-family: "Montserrat", sans-serif;
  color: black;
  padding: 8px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
            }
            .submit:hover{
                background-color: white;
                border:1px solid #039287;
                color: #039287;
                font-family: "Montserrat", sans-serif;

            }
            .Note span{
                font-weight: bold;
                letter-spacing: .6; 


            }
            .Note{
                letter-spacing: .6;
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
                    <h3>Upload Documents</h3>
                    <ul>
                        <li class="active"><a href="home.php">Home</a></li>
                        <li><a href="upload_documents.php">Admission</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Room List Area =================-->
       
        

<?php 
error_reporting(E_ALL ^ E_NOTICE); 

function upload_image($file_name,$connection){
$target_dir = "documents/";
$target_file = $target_dir.basename($_FILES[$file_name]["name"]);//base name gives file name with extension
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));//path info function gives info about path and pathinfo_extension gives only extension of file
//echo $imageFileType;
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES[$file_name]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
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
if ($_FILES[$file_name]["size"] > 50000000){//size is in byte:500000=500kb 
  echo "<script>alert('Sorry, your file is too large.');</script>";
    
    $uploadOk = 0;
    echo "<br>";
}
// Allow certain file formats
if(!($imageFileType == "jpg" or $imageFileType == "png" or $imageFileType == "jpeg"
or $imageFileType == "gif" )) {
  if (!($imageFileType ==""))
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
   

if(upload_image('photo',$connection1) and upload_image('aadhar_card',$connection1) and upload_image('marksheet',$connection1) and upload_image('feereciept',$connection1)){
    $target_dir = "documents/";
    $target_file1 = $target_dir.basename($_FILES['photo']["name"]);
    $target_file2 = $target_dir.basename($_FILES['aadhar_card']["name"]);
    $target_file3 = $target_dir.basename($_FILES['marksheet']["name"]);
    $target_file4 = $target_dir.basename($_FILES['feereciept']["name"]);
    if (move_uploaded_file($_FILES['photo']["tmp_name"], $target_file1) and move_uploaded_file($_FILES['aadhar_card']["tmp_name"], $target_file2) and move_uploaded_file($_FILES['marksheet']["tmp_name"], $target_file3) and move_uploaded_file($_FILES['feereciept']["tmp_name"], $target_file4)) {


    $photo=$_FILES['photo']['name'];
    $aadhar_card=$_FILES['aadhar_card']['name'];
    $marksheet=$_FILES['marksheet']['name'];
    $feereciept=$_FILES['feereciept']['name'];
    $email = $_SESSION["email"];
    if(mysqli_num_rows(mysqli_query($connection1,"select email_id from admission where email_id = '$email'")) == 1)
         if($row = mysqli_fetch_array(mysqli_query($connection1,"select id from admission where email_id='$email'"),MYSQLI_ASSOC)) $id= $row['id'];
    
    $insert_image = "insert into documents(id,photo,aadhar_card,marksheet,feereciept) values('$id','$photo','$aadhar_card','$marksheet','$feereciept')";
    $run = mysqli_query($connection1,$insert_image);
    if($run){
        echo "<br><script>alert('image inserted in database');</script><br>";
    }
    else{
        echo "<script>alert('image can't inserted in database plaese follow rules for upload documents and try agian');</script?<br>";
    }

}
}
?>



        <section class="room_list_area">
            <div class="container">
                <div class="main_big_title">
                    <h2>Upload&nbsp<span>Documents</span></h2>
                </div>
                    
               <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">

<table align="center" style="color: black;">
      <tr>
<th>Sr No.</th>
<th>Document name</th>
<th>Choose file</th>
</tr>
<tr>
<td>1</td>
          <td id="photo"> Passportsize photo</td>
<td><input type="file" id="photo_upload" name="photo" multiple required /></td>
</tr>

<tr>
<td>2</td>
        <td id="aadhar">Aadhar card</td>
<td><input type="file" id="aadhar_upload" name="aadhar_card" multiple required /></td>
</tr>

<tr>
      <td>3</td>
<td id="markshet">Previous year marksheet</td>
<td><input type="file" id="marksheet_upload" name="marksheet" multiple required /></td>
</tr>

<tr>
<td>4</td>
<td id="feereciept">College fee reciept or colllege ID  card</td>
<td><input type="file" id="feereciept_upload" name="feereciept" multiple required /></td>
</tr>



</table>

<div>                   <div class="container-fluid" style="color: black;">
                        <br>
                        <div class="row">
                        <div class="col-sm-3"></div>
                         <div class="col-sm-9">
                             <div class="Note"><br>
                        <h4>Conditions:</h4><br>
                        <h5><span>1)Passport phto:</span>You have to upload recent passport size photo, no selfies are allowed</h5>
                        <br>
                        <h5><span>2)Aadhar Card:</span>Aadhar card must be real copy & upload both side of aadharcard(Xerox not allowed)</h5><br>
                        <h5><span>3)Marksheet:</span>If you are freshers in college then you have to  upload 12th marksheet(Real) or else you hve to upload previous sem marksheet verified by your department.</h5>  <br>
                        <h5><span>4)fee reciept/ID card:</span>You have to upload SBI Fees reciept here or Your college ID card.</h5> 
                        
                         </div>
                         <br>
                         <br><h5 style="color: red;" >*uploaded Documents must be in  JPEG/JPG Format & size less than  or equal to 500 KB</h5>
                         <script>
 function disableSubmit() {
  document.getElementById("submit").disabled = true;
 }

  function activateButton(element) {

      if(element.checked) {
        document.getElementById("submit").disabled = false;
       }
       else  {
        document.getElementById("submit").disabled = true;
        
      }

  }
</script>

                         <br><input type="checkbox" name="terms" id="terms" onchange="activateButton(this)">  I have read all above mentioned conditions  & I will follow it. 
<br>
                         </div>
                        </div>
                    </div>
                        
                    </div>
                    <br>
                    <div align="center">
    <input class="submit" type="submit" name="UPLOAD">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
</div>
</form>
            </div>
        </section>
        <!--================End Room List Area =================-->
        
        <!--================Footer Area =================-->
        <?php include 'footer_student.php' ;?>
        <!--================End Footer Area =================-->
        
        
        
        
        
        
        
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
        
        
        <!-- instafeed-->
        <script type="text/javascript" src="vendors/instafeed/instafeed.min.js"></script>
        <script type="text/javascript" src="vendors/instafeed/script.js"></script>
        
        <script src="js/theme.js"></script>
    </body>

<!-- Mirrored from designarc.biz/demos/hilltown/theme/room-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2019 17:36:50 GMT -->
</html>








 <!-- <div class="row room_list_inner"> --><!-- 
                    <div class="room_list_item">
                        <div class="col-md-4">
                            <a href="room-details.html" class="room_img">
                                <img src="img/room/room-list/room-l-1.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="room_list_l_text">
                                        <a href="room-details.html"><h4>Budget room</h4></a>
                                        <ul>
                                            <li><a href="#">10x15</a></li>
                                            <li><a href="#">Mountain view</a></li>
                                            <li><a href="#">2 Balcony</a></li>
                                        </ul>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="room_price_box">
                                        <h5>$170</h5>
                                        <h6>per Night</h6>
                                        <a class="book_now_btn" href="room-details.html">View details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="room_list_item">
                        <div class="col-md-4">
                            <a href="room-details.html" class="room_img">
                                <img src="img/room/room-list/room-l-2.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="room_list_l_text">
                                        <a href="room-details.html"><h4>Budget room</h4></a>
                                        <ul>
                                            <li><a href="#">10x15</a></li>
                                            <li><a href="#">Mountain view</a></li>
                                            <li><a href="#">2 Balcony</a></li>
                                        </ul>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="room_price_box">
                                        <h5>$170</h5>
                                        <h6>per Night</h6>
                                        <a class="book_now_btn" href="room-details.html">View details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="room_list_item">
                        <div class="col-md-4">
                            <a href="room-details.html" class="room_img">
                                <img src="img/room/room-list/room-l-3.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="room_list_l_text">
                                        <a href="room-details.html"><h4>Budget room</h4></a>
                                        <ul>
                                            <li><a href="#">10x15</a></li>
                                            <li><a href="#">Mountain view</a></li>
                                            <li><a href="#">2 Balcony</a></li>
                                        </ul>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="room_price_box">
                                        <h5>$170</h5>
                                        <h6>per Night</h6>
                                        <a class="book_now_btn" href="room-details.html">View details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="room_list_item">
                        <div class="col-md-4">
                            <a href="room-details.html" class="room_img">
                                <img src="img/room/room-list/room-l-4.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="room_list_l_text">
                                        <a href="room-details.html"><h4>Budget room</h4></a>
                                        <ul>
                                            <li><a href="#">10x15</a></li>
                                            <li><a href="#">Mountain view</a></li>
                                            <li><a href="#">2 Balcony</a></li>
                                        </ul>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="room_price_box">
                                        <h5>$170</h5>
                                        <h6>per Night</h6>
                                        <a class="book_now_btn" href="room-details.html">View details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="room_list_item">
                        <div class="col-md-4">
                            <a href="room-details.html" class="room_img">
                                <img src="img/room/room-list/room-l-5.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="room_list_l_text">
                                        <a href="room-details.html"><h4>Budget room</h4></a>
                                        <ul>
                                            <li><a href="#">10x15</a></li>
                                            <li><a href="#">Mountain view</a></li>
                                            <li><a href="#">2 Balcony</a></li>
                                        </ul>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="room_price_box">
                                        <h5>$170</h5>
                                        <h6>per Night</h6>
                                        <a class="book_now_btn" href="room-details.html">View details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <nav aria-label="Page navigation" class="room_pagination">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <i class="fa fa-angle-left" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </nav> -->