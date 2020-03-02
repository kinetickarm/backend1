<?php include 'dbconnection1.php';
session_start(); ?>
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

            #application tr:nth-child(even){background-color: #f2f2f2;}

            #application tr:hover {background-color: #ddd;}

                #application ,#application th,#application td{
                padding: 8px;
                font-size: 20px;
                border-collapse: none;
                border:1px solid grey;
                text-align: center;
                font-family: "Montserrat", sans-serif;

                
            }
            #search_area,#serach_area td{
                padding: 8px;
                font-size: 15px;
                border-collapse: none;
               
                text-align: center;
                font-family: "Montserrat", sans-serif;
            }

            #application td{
                font-size: 15px;
                color
            }

            #application th{
                background-color: #039287;
                color: white;
            }
            select{
                background-color: #e3e4fa;
            }
            .select-items div:hover, .same-as-selected {
            background-color: rgba(0, 0, 0, 0.1);
             }
             #application button{
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

             #application button:hover{
                background-color: white;
                border:1px solid #039287;
                color: #039287;
                font-family: "Montserrat", sans-serif;
             }

             .container2 {
  display: block;
  position: relative;
  /*padding-left: 35px;*/
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container2 input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container2:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container2 input:checked ~ .checkmark {
  background-color: #039287;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container2 input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container2 .checkmark:after {
    top: 9px;
    left: 9px;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: white;
}
#btn{
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

             #btn:hover{
                background-color: white;
                border:1px solid #039287;
                color: #039287;
                font-family: "Montserrat", sans-serif;
             }

        </style>
    </head>
    <body>

        <!--================Header Area =================-->
        <?php include 'header_admin.php'; ?>
        <!--================Header Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_content">
                    <h3>Room Allocation</h3>
                    <ul>
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="room-list.html">Admission</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Room List Area =================-->
       <section class="room_details_area" >
            
                <div class="main_big_title">
                    <h2>room&nbsp<span>allocation</span></h2>
                    
                       </div>
                    <div class="row" >
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2"></div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                       
                    <div class="container2">

                    <table id="search_area" align="left" style="text-align: left; color: black;">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
                        <tr>
                          <td>
                            <?php $id = $_POST['id']; 
                            $branch = $_POST['branch'];
                            $sem = $_POST['sem'];

                            
                            ?>
                            <h4 style="color: black;"> APPLICATION ID:<span style="color: black;"> <?php echo $id; ?></span></h4><br>
                            <h4 style="color: black;"> BRANCH:<span style="color: black;"> <?php echo $branch; ?></span></h4><br>
                            <h4 style="color: black;"> SEM:<span style="color: black;"> <?php echo $sem; ?></span></h4>
                            <br>
                            <?php $raw= mysqli_fetch_array(mysqli_query($connection1,"select * from branch_intake where branch = '$branch' and sem = '$sem'"),MYSQLI_ASSOC);?>
                             <h4 style="color: black;"> INTAKE LEFT:<span style="color: black;"> <?php echo $raw['intake']; ?></span></h4>
                            <br>
                          </td>
                        </tr> 
                        <tr>
                            <td style="text-align: left; padding-bottom: 10px;">
                               <h3 style="margin-bottom: 5px;"></h3> 
                               <label class="radio-inline">
                                
                               <input type="radio" name="radio1" value="All" >
                               <span class="checkmark"></span><span style="margin-left: 10px;">Show all rooms</span>
                               </label> 
                               <label class="radio-inline">
                               <input type="radio" name="radio1" value="Only Same branch & differnt sem in single room pattern">
                               <span class="checkmark"></span><span style="margin-left: 10px;">Show Only matched branch rooms</span>
                               </label> 
                            </td>
                        </tr>
                
                
                        <br><br>
                       <!--  <tr>
                            <td style="text-align: left; padding-bottom: 10px;">
                               <h3 style="margin-bottom: 5px;">Floor:</h3> 
                               <label class="radio-inline">
                               <input type="radio" name="radio2" value="1">
                               <span class="checkmark"></span><span style="margin-left: 10px;">1st</span>
                               </label> 
                               <label class="radio-inline">
                               <input type="radio" name="radio2" value="2">
                               <span class="checkmark"></span><span style="margin-left: 10px;">2nd</span>
                               </label> 
                                <label class="radio-inline">
                               <input type="radio" name="radio2" value="3" >
                               <span class="checkmark"></span><span style="margin-left: 10px;">3rd</span>
                               </label> 
                            </td>
                        </tr> -->
                        
                        <tr>
                          <br><br>
                          <td><button type="submit" id="btn">CLICK HERE</button></td><br><br> 
                          <input type="hidden" name="id" value="<?php echo $id; ?>">
                          <input type="hidden" name="branch_room" value="<?php echo $branch?>">
                          <!-- <input type="hidden" name="flag" value="flag_on"> -->
                          <input type="hidden" name="branch" value="<?php echo $branch; ?>">
                          <input type="hidden" name="sem" value="<?php echo $sem; ?>">

                        </tr>
                        </form>
                        </table>
                    </div>
                    <br><br>

                        
                        <?php
                        error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
                        $flag = $_POST['radio1'];
                        $floor = $_POST['radio2'];
                        $branch = $_POST['branch'];
                        $sem = $_POST['sem'];
                     
                        //$query  = "select * from intake where hostel='$hostel' and floor = '$floor'";

                        
                          //echo "flag posted";
                          //$flag = $_POST['flag'];
                       $query  = "select * from intake where order by seat_left";
                       // echo "<br><br>flag:".$flag;
                          if ($flag == "All") {
                            //echo "flag_on query run";
                            $query  = "select * from intake order by seat_left";
                          }
                          else if($flag="Only Same branch & differnt sem in single room pattern"){

                             if($hostel and $floor){
                          $query = "select * from intake where hostel='$hostel' and floor = '$floor' order by seat_left";
                        }
                        elseif($hostel or $floor){
                          $query = "select * from intake where hostel='$hostel' or floor = '$floor' order by seat_left";
                        }
                        else {
                         // echo "else box";
                         // echo $branch;
                          //echo $sem;

                          
                          $query  = "select * from intake where seat_left = 3 or (branch_1 = '$branch' and sem_1 != '$sem' and sem_3 != '$sem' and seat_left != 0) order by seat_left";

                        }

                          }
                        
                       
                        
                      $query_run = mysqli_query($connection1,$query);
                      $er = mysqli_error($connection1);
                      echo $er;

                        ?>
                        <br><br><br><br><br><br><br><br><br>
                        <h3><?php echo $flag." Rooms"; ?></h3><br>
                        <div style="overflow-y: scroll; height: 400px;">
                        <table align="Left" id="application">
                        <tr>
                       
                       <th></th>  <th></th> <th></th> <th></th> 
                         
                        
                        <th colspan="2">Student 1</th>
                        <th colspan="2">Student 2</th>
                        <th colspan="2">Student 3</th>

                        <th></th></tr>
                        <tr>
                          
                        </tr>
                        <th>Hostel</th>  
                        <th>Floor</th>
                        <th>Room No.</th>
                        <th>Left</th>

                        <th>Branch</th>
                        <th>Sem</th>
                        <th>Branch</th>
                        <th>Sem</th>
                        <th>Branch</th>
                        <th>Sem</th>
                        <th>Select</th>
                        </tr>
                        <?php while ($result = mysqli_fetch_array($query_run,MYSQLI_ASSOC)) {
                      
                        
                         ?>
                        <tr>
                          <td><?php echo $result['hostel'] ?></td>
                          <td><?php echo $result['floor'] ?></td>
                        	<td><?php echo $result['room_no']; ?></td>
                            <td><?php echo $result['seat_left']; ?></td>
                            <td><?php echo $result['branch_1']; ?></td>
                            <td><?php echo $result['sem_1']; ?></td>
                            <td><?php echo $result['branch_3']; ?></td>
                            <td><?php echo $result['sem_3']; ?></td>
                            <td><?php echo $result['branch_5']; ?></td>
                            <td><?php echo $result['sem_5']; ?></td>




                            <script >
                              function deactivate(){
                                
                                  
                                  alert('Room is full');
                              }
                            </script>

                            <td>
                              <?php if($result['seat_left'] <= 0){ ?>
                              <button type="" id="select" onclick="deactivate()">select</button>
                            <?php } 
                                    else{ ?>
                                      <form method="post" action="roomallocation_table_admin.php">
                                      <button type="submit" id="select">select</button>
                                    <?php }  
                                  ?>
                                  <input type="hidden" name="room_no" value="<?php echo $result['room_no']; ?>">
                                  <input type="hidden" name="id" value="<?php echo $id?>">
                                  <input type="hidden" name="action2" value="temp_allocated"> 
                                  <input type="hidden" name="branch_room" value="<?php echo $branch ?>">
                                  <input type="hidden" name="left" value="<?php echo $result['seat_left']; ?>">
                                   
                                  <input type="hidden" name="room_sem" value="<?php echo $sem; ?>">
                            </td></form>
                        </tr>
                         <?php } ?>
                    </table>
                    </div>
                    </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2"></div>
            </div>
            
        </section>
        <!--================End Room List Area =================-->
        
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