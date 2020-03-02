<?php 
include 'dbconnection1.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from designarc.biz/demos/hilltown/theme/room-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2019 17:36:50 GMT -->
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

            table,th,td{
                padding: 5px;
                
            }

            .footer button, #documents button{
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

            
    </style>
    </head>
    <body>

        <!--================Header Area =================-->
            <?php include 'header_admin.php' ?>
        <!--end header area-->
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_content">
                    <h3>COMPLAINT</h3>
                    <ul>
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="search.html">New Complaints</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Search Room Area =================-->
        <section class="room_details_area">
            <div class="container">
                <div class="main_big_title">
                    <h2>Complaint&nbsp<span>Application</span></h2>
                    <br><br>
                    <div class="row">
                    <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                    <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8" style="background-color: ; border:1px solid grey; border-radius: 3px;">
                    	<h3 style="text-decoration: underline;padding-top: 20px;">Complaint Form</h3><br>
                        
                        <?php
                            $cid=$_POST["cid"];
                            echo "$cid".$cid;
                            $query="select * from complaint where cid='$cid'";
                            $execute=mysqli_query($connection1,$query);
                            while ($result=mysqli_fetch_array($execute,MYSQLI_ASSOC)) {
                                $name=$result['name'];
                                $email=$result['email'];
                                $contact=$result['contact'];
                                $sem=$result['sem'];
                                $branch=$result['branch'];
                                $roomno=$result['roomno'];
                                $category=$result['category'];
                                $desc=$result['description'];
                            }
                        ?>
                        <table style="width: 100%; font-size: 18px;">
                    		<tr>
                            <th style="text-align: left;">Complaint ID:<input name="cid" value="<?php echo "$cid";?>" style="border: none;background: transparent;text-align: center;width:60px;"></input></th>
                            </tr>
                    	</table><br>
                    	<table style="text-align: left;">
                    		<tr>
                    			<td ><span style="font-weight: bold;">Name:</span><span><?php echo $name; ?></span></td>
                    			<td style="width:20%;"></td> 
                    			<td><span style="font-weight: bold;text-align-last:right;">Branch:</span><span><?php echo $branch; ?></span></td>
                      		</tr>
                    		<tr>
                    			<td><span style="font-weight: bold;">Contact No:</span><span><?php echo $contact; ?></span></td>
                    			<td style="width: 20%;"></td>
                    			<td><span style="font-weight: bold;text-align-last: right;">Semester:</span><span><?php echo $sem; ?></span></td>
                    		</tr>
                    		<tr>
                    			<td><span style="font-weight: bold;">Email address:</span><span><?php echo $email; ?></span></td>
                    			<td style="width: 20%;"></td>
                    			<td><span style="font-weight: bold;text-align-last: right;">Room No.:</span><span><?php echo $roomno; ?></span></td>
                    		</tr>
                    	</table>
                    	<hr>
                    	<table>
                    		<tr>
                    			<td style="text-align:left; "><span style="font-weight: bold;">Category of complaint:</span><span><?php echo $category; ?></span></td>
                    		</tr>
                    		<tr><form action="proof01.php" method="post">
                    			<td style="text-align: left;"><span style="font-weight: bold;">Image/video of complaint(for reference):</span><span><button type="submit" name="proof">Click here</button>
                                <input type="hidden" name="cid" value="<?php echo $cid ?>"></span></td>
                    		</form>
                            </tr>
                    		<tr>
                    			<td style="text-align: left;"><span style="font-weight: bold;">Description:</span><span><?php echo $desc; ?></span></td>
                    		</tr>	
                    	</table>

                    </div>
                    <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                    
                    </div>
                    <div class="row">
                    	<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                    	<div class="col-sm-8 col-md-8 col-lg-8 col-xl-8">
                    		<br>
                    		<div style="text-align: left;" class="footer">
                            
                    	    
                            <form method="post" action="complaint_admin03.php">   
                            <h4 style="text-align: left; font-family: 'Montserrat', sans-serif;">If you found above complaint fake or invalid,reject the complaint and specify the reason here:</h4>
                            <input type="text" name="text" style="background: transparent; border:none; border-bottom: 1px solid black; width: 100%;">
                            <br><br>
                    		
                            <button type="submit" style="background-color: red;">REJECT</button>
                            <input type="hidden" name="pcid" value="<?php echo "$cid";?>">
                            <input type="hidden" name="status" value="Rejected"></form><hr>

                            <form method="post" action="complaint_admin03.php">                     		
                            <h4 style="float: left;font-family: sans-serif;">Write some details about action taken or solved complaint after solving the issue and click on solved button to submit:</h4>
                    		<input type="text" name="text" style="background: transparent; border:none; border-bottom: 1px solid black; width: 100%;">
                    		<br><br>
                            
                    		<button type="submit" style="background-color: green; color: white;">SOLVED</button>
                            <input type="hidden" name="pcid" value="<?php echo "$cid";?>">
                            <input type="hidden" name="status" value="Solved"></form>


                        </div>
                    	</div>
                    	<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                    </div>   
                </div>
            </div>
        </section>
        
        <!--================End Search Room Area =================-->
        
        <!--================Footer Area =================-->
         <footer class="footer_area">
            <div class="footer_widget_area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-xs-6">
                            <aside class="f_widget about_widget">
                                <!-- <div class="h_middle_text2">
                             <a href="#"><img src="img/logo.png" alt=""></a> 
                            < <h1><span id="H">H</span>OSTEL</h1> <h3> MANAGEMEN<span id="T">T</span></h3>
                        </div> --> 
                        <div>
                                <a class="navbar-brand1" href="#" style="height: 85px;
    line-height: 50px;
    padding: 0px 0px 0px 10px;">
                                <img src="img/logo.png" alt="" style="display: inline-block;;
    height: 48px;
    margin-top: 27px; ">
                            
                            </a>
                        
                           
                            <div class="resort_title1 ">
                                
                            
                            
                                <h2><span style="color: #039287">HOSTEL <span style="color: #039287">MANAGEMENT</span></span></h2>
                            </div>
                        </div>
                                <div class="ab_wd_list">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="media-body">
                                            <h4 style="color: white;">VGEC Hostel, Chandkheda <br /> 382424,Gandhinagar</h4>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-envelope-o"></i>
                                        </div>
                                        <div class="media-body">
                                           <a href="#"> <h4 style="color: white; font-size: 10px; ">hostelmanagement01@gmail.com</h4></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="book_now_area">
                                    <a class="book_now_btn" href="#">Login</a>
                                </div>
                            </aside>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <aside class="f_widget link_widget">
                                <div class="f_title">
                                    <h3>Useful Links</h3>
                                </div>
                                <ul>
                                    <li><a href="#">- Sign up</a></li>
                                    <li><a href="#">- Admission process</a></li>
                                    <li><a href="#">-  Gallery</a></li>
                                    <li><a href="help.html">-  Faq’s </a></li>
                                    <li><a href="https://www.vgecg.ac.in/" target="_blank" >-  visit our college web</a></li>
                                </ul>
                            </aside>
                        </div>
                        <!-- <div class="col-md-2 col-xs-6">
                            <aside class="f_widget link_widget">
                                <div class="f_title">
                                    <h3>our services</h3>
                                </div>
                                <ul>
                                    <li><a href="#">-  Food & Drinks</a></li>
                                    <li><a href="#">-  Rooms</a></li>
                                    <li><a href="#">-  Amenities</a></li>
                                    <li><a href="#">-  Spa & Gym</a></li>
                                    <li><a href="#">-  Hill Tours</a></li>
                                </ul>
                            </aside>
                        </div> -->
                        <div class="col-md-4 col-xs-6">
                                

                                <div class="f_title">
                                     <h3 style="margin-right:10px; ">Location</h3>
                                    
                                
                                   
                                </div> 
                                
                            <!-- <aside class="f_widget instagram_widget">
                                <div class="f_title">
                                    <h3>Instagram</h3>
                                </div>
                                <ul class="instagram_list" id="instafeed"></ul>
                            </aside> -->
                             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3669.717209126576!2d72.59106171444378!3d23.10744571895034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e83ca44f7d0dd%3A0xbbfdcfcf4fb6ccf0!2sVGEC%20Boys%20Hostel-1!5e0!3m2!1sen!2sin!4v1577121123820!5m2!1sen!2sin" width="100%" height="80%"  style=" border:5; border-radius: 7px; opacity: .7;" allowfullscreen=""></iframe>


                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_copyright_area">
                <div class="container">
                    <div class="pull-left">
                        <h4>Copyright © Hostel Management  <script>document.write(new Date().getFullYear());</script>. All rights reserved. </h4>
                    </div>
                    <div class="pull-right">
                        <h4>Created by: <a href="#">CE Dept.</a></h4>
                    </div>
                </div>
            </div>
        </footer>
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

<!-- Mirrored from designarc.biz/demos/hilltown/theme/room-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2019 17:36:52 GMT -->
</html>





<!-- <section class="room_details_area">
            <div class="container"> -->
                <!-- <div class="row room_details_inner">
                    <div class="col-md-8">
                        <div class="room_details_content">
                            <div class="room_d_main_text">
                                <div class="room_details_img owl-carousel">
                                    <div class="item">
                                        <img src="img/room/room-details.jpg" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="img/room/room-details.jpg" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="img/room/room-details.jpg" alt="">
                                    </div>
                                </div>
                                <a href="#"><h4>Budget <span>rooms</span></h4></a>
                                <h5>$170 <span>/ Night</span></h5>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>
                            </div>
                            <div class="room_service_list">
                                <h3 class="room_d_title">Room services</h3>
                                <div class="row room_service_list_inner">
                                    <div class="col-sm-5 col-md-offset-right-1">
                                        <div class="resot_list">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Breakfast Included</a></li>
                                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Free wifi</a></li>
                                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Double Bed</a></li>
                                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>120 sq mt.</a></li>
                                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>8 persons</a></li>
                                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Free internet</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 col-md-offset-right-1">
                                        <div class="resot_list">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>private balcony</a></li>
                                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>good room service</a></li>
                                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>flat screen tv</a></li>
                                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>fully AC</a></li>
                                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>mountain view</a></li>
                                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>free pick & drop facilies</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="room_details_clients">
                                <h3 class="room_d_title">customer Reviews</h3>
                                <div class="clients_slider owl-carousel">
                                    <div class="item">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="img/clients/client-1.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                                                <a href="#"><h4>- Michale John</h4></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="img/clients/client-1.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                                                <a href="#"><h4>- Michale John</h4></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="img/clients/client-1.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                                                <a href="#"><h4>- Michale John</h4></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="room_details_comment">
                                <h4>Add review</h4>
                                <form class="contact_us_form row" action="http://designarc.biz/demos/hilltown/theme/contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                    <div class="form-group col-md-12">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name*">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email*">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <h5>Your Rating</h5>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <textarea class="form-control" name="message" id="message" rows="1" placeholder="review"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <button type="submit" value="submit" class="btn submit_btn form-control">submit now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="search_right_sidebar">
                            <div class="book_room_area">
                                <div class="book_room_box">
                                    <div class="book_table_item">
                                        <h3>check availability</h3>
                                    </div>
                                    <div class="book_table_item">
                                        <div class="input-append date form_datetime">
                                            <input size="16" type="text" value="" readonly placeholder="Arrival Date">
                                            <span class="add-on"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                    <div class="book_table_item">
                                        <div class="input-append date form_datetime">
                                            <input size="16" type="text" value="" readonly placeholder="Departure Date">
                                            <span class="add-on"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                    <div class="book_table_item">
                                        <select class="selectpicker">
                                            <option>Adults</option>
                                            <option>Adults</option>
                                            <option>Adults</option>
                                        </select>
                                    </div>
                                    <div class="book_table_item">
                                        <select class="selectpicker">
                                            <option>Children</option>
                                            <option>Children</option>
                                            <option>Children</option>
                                        </select>
                                    </div>
                                    <div class="book_table_item">
                                        <a class="book_now_btn" href="#">Reserve now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="book_now_button">
                                <a class="book_now_btn_black" href="#">Book now</a>
                            </div>
                            <div class="your_book_box">
                                <h4>Your book</h4>
                                <h5>your cart is empty</h5>
                            </div>
                        </div>
                    </div>
                </div> -->
            