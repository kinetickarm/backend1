<?php include 'dbconnection1.php';?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from designarc.biz/demos/hilltown/theme/room-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2019 17:36:39 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/vgeclogo.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>HillTown Resort</title>

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
        </style>
    </head>
    <body>

        <!--================Header Area =================-->
        <header class="main_header_area" style="background-color: black;">
            <div class="header_top">
                <div class="container">
                    <div class="header_top_inner">
                        <div class="pull-left">
                            <a href="#" style="margin-right: 720px;"><i class="fa fa-phone" ></i>+ (1800) 456 7890</a>
                            <!-- <a href="#"><i class="fa fa-envelope-o"></i>hostelmanagement01@gmail.com</a> -->
                            
                        </div>
                        <!-- <div class="pull-right">
                            
                                
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="header_menu">
                <nav class="navbar navbar-default">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                               <span style="background-color: #039287;" class="icon-bar"></span>
                                <span style="background-color: #039287;" class="icon-bar"></span>
                                <span style="background-color: #039287;" class="icon-bar"></span>
                            </button>
                           <div>
                                <a class="navbar-brand" href="#">
                                <img src="img/logo.png" alt="">
                                <img src="img/logo-sticky.png" alt="">
                            </a>
                           
                            <div class="resort_title1 ">
                                <h2><span style="color: #039287">HOSTEL <span style="color: #039287">MANAGEMENT</span></span></h2>
                            </div>
                             </div>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="home.html">HOME</a></li>
                               <!--  <li class="dropdown submenu active">
                                    <a href="index-4.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">HOME <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.html">Home Page 1</a></li>
                                        <li><a href="index-2.html">Home Page 2</a></li>
                                        <li><a href="index-3.html">Home Page 3</a></li>
                                        <li><a href="index-4.html">Home Page 4</a></li>
                                    </ul>
                                </li> -->
                                <li class="submenu dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ADMISSION <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="Admission_application.html">APPLICATION</a></li>
                                        <li><a href="upload_documents.html">UPLOAD DOCUMENTS</a></li>
                                        <li><a href="Admission_status.html">ADMISSION STATUS</a></li>
                                    </ul>
                                </li>
                                <li><a href="fees.html">FEES</a></li>
                                <!-- <li class="submenu dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">FEES <i class="fa fa-chevron-down" aria-hidden="true"></i></a> -->
                                   <!--  <ul class="dropdown-menu">
                                        <li><a href="aminities.html">Aminities</a></li>
                                        <li><a href="search.html">Search</a></li>
                                        <li class="dropdown submenu">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="event.html">-  Event List</a></li>
                                                <li><a href="event-two-column.html">-  Event Grid</a></li>
                                                <li><a href="event-details.html">-  Event Single</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown submenu">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="gallery-two-column.html">-  Gallery 2 Column</a></li>
                                                <li><a href="gallery-three-column.html">-  Gallery 3 Column</a></li>
                                                <li><a href="cobage-gallery.html">-  Gallery Cobage</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="restaurant.html">Our Reataurant</a></li>
                                        <li><a href="spa.html">Spa & Relax</a></li>
                                        <li><a href="activities.html">Activities</a></li>
                                        <li><a href="comming-soon.html">Coming Soon page</a></li>
                                        <li><a href="404.html">404 Error</a></li>
                                    </ul> -->
                                </li>
                                <li class="submenu dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Complaint <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="complaint01.html">COMPLAINT FORM</a></li>
                                        <li><a href="complaint02.html">COMPLAINT STATUS</a></li>
                                        
                                    </ul>
                                </li>
                                <!-- <li class="submenu dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Complaint <i class="fa fa-chevron-down" aria-hidden="true"></i></a> -->
                                    <!-- <ul class="dropdown-menu">
                                        <li><a href="blog-left-sidebar.html">Blog with leftside bar</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog with rightside bar</a></li>
                                        <li><a href="blog.html">Blog without side bar</a></li>
                                        <li><a href="blog-details.html">Blog details</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="notice.html">NOTICE</a></li>
                                <li><a href="help.html">HELP</a></li>
                                <!-- <a href=""><i class="fa fa-user-circle-o" style="font-size: 40px; color:black ;margin-top: 50px;"></i></a> -->
                                <li><a href="profile.html">PROFILE</a></li>

                                <ul class="nav navbar-nav navbar-right">
                                <!-- <li class="search_dropdown">
                                    <a class="popup-with-zoom-anim" href="#test-search"><i class="icon icon-Search"></i></a>
                                </li> -->
                                <li class="book_btn">
                                    <a class="book_now_btn" href="#">LOGIN</a>
                                </li>
                            </ul>

                                <!-- <li><a class="popup-with-zoom-anim" href="#test-search"><i class="icon icon-Search"></i></a></li> -->
                            </ul>
                        </div><!-- /.navbar-collapse -->
                  
<!--                         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="dropdown submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.html">Home Page 1</a></li>
                                        <li><a href="index-2.html">Home Page 2</a></li>
                                        <li><a href="index-3.html">Home Page 3</a></li>
                                        <li><a href="index-4.html">Home Page 4</a></li>
                                    </ul>
                                </li>
                                <li class="submenu dropdown active">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Rooms <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="room.html">Rooms Grid Style</a></li>
                                        <li><a href="room-list.html">Rooms List Style</a></li>
                                        <li><a href="room-details.html">Single Room</a></li>
                                    </ul>
                                </li>
                                <li class="submenu dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">pages <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="aminities.html">Aminities</a></li>
                                        <li><a href="search.html">Search</a></li>
                                        <li class="dropdown submenu">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="event.html">-  Event List</a></li>
                                                <li><a href="event-two-column.html">-  Event Grid</a></li>
                                                <li><a href="event-details.html">-  Event Single</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown submenu">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="gallery-two-column.html">-  Gallery 2 Column</a></li>
                                                <li><a href="gallery-three-column.html">-  Gallery 3 Column</a></li>
                                                <li><a href="cobage-gallery.html">-  Gallery Cobage</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="restaurant.html">Our Reataurant</a></li>
                                        <li><a href="spa.html">Spa & Relax</a></li>
                                        <li><a href="activities.html">Activities</a></li>
                                        <li><a href="comming-soon.html">Coming Soon page</a></li>
                                        <li><a href="404.html">404 Error</a></li>
                                    </ul>
                                </li>
                                <li class="submenu dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-left-sidebar.html">Blog with leftside bar</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog with rightside bar</a></li>
                                        <li><a href="blog.html">Blog without side bar</a></li>
                                        <li><a href="blog-details.html">Blog details</a></li>
                                    </ul>
                                </li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="search_dropdown">
                                    <a class="popup-with-zoom-anim" href="#test-search"><i class="icon icon-Search"></i></a>
                                </li>
                                <li class="book_btn">
                                    <a class="book_now_btn" href="#">Book now</a>
                                </li>
                            </ul>
                        </div> /.navbar-collapse --> 
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        </header>
        <!--================Header Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_content">
                    <h3>Upload Documents</h3>
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

                    <table id="search_area" align="left" style="text-align: left;">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
                        <tr>
                          <td>
                            <?php $id = $_POST['id']; ?>
                            <h3> APPLICATION ID:<span> <?php echo $id; ?></span></h3>
                          </td>
                        </tr> 
                        <tr>
                            <td style="text-align: left; padding-bottom: 10px;">
                               <h3 style="margin-bottom: 5px;">Hostel:</h3> 
                               <label class="radio-inline">
                                
                               <input type="radio" name="radio1" value="1" >
                               <span class="checkmark"></span><span style="margin-left: 10px;">1</span>
                               </label> 
                               <label class="radio-inline">
                               <input type="radio" name="radio1" value="2">
                               <span class="checkmark"></span><span style="margin-left: 10px;">2</span>
                               </label> 
                            </td>
                        </tr>
                
                
                        <br><br>
                        <tr>
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
                        </tr>
                        
                        <tr>
                          <br>
                          <td><button type="submit">CLICK HERE</button></td><br>
                          <input type="hidden" name="id" value="<?php echo $id; ?>">
                        </tr>
                        </form>
                        </table>
                    </div>


                        
                        <?php
                        error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
                        $hostel = $_POST['radio1'];
                        $floor = $_POST['radio2'];
                        echo $hostel;
                        echo $floor;
                        //$query  = "select * from intake where hostel='$hostel' and floor = '$floor'";
                        if($hostel and $floor){
                          $query = "select * from intake where hostel='$hostel' and floor = '$floor'";
                        }
                        elseif($hostel or $floor){
                          $query = "select * from intake where hostel='$hostel' or floor = '$floor'";
                        }
                        else {
                          $query  = "select * from intake";
                        }
                        
                        
                        $query_run = mysqli_query($connection1,$query);

                        ?>
                        <br><br><br><br><br><br><br>
                        <h3>Select Room:</h3><br>
                        <div style="overflow-y: scroll; height: 400px;">
                        <table align="Left" id="application">
                        <tr>
                        <th>Hostel</th>  
                        <th>Floor</th>
                        <th>Room No.</th>
                        <th>Left</th>
                        <th>Select</th>
                        
                        </tr>
                        <?php while ($result = mysqli_fetch_array($query_run,MYSQLI_ASSOC)) {
                          # code...
                         ?>
                        <tr>
                          <td><?php echo $result['hostel'] ?></td>
                          <td><?php echo $result['floor'] ?></td>
                        	<td><?php echo $result['room_no']; ?></td>
                            <td><?php echo $result['seat_left']; ?></td>

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
                                  <input type="hidden" name="left" value="<?php echo $result['seat_left']; ?>">
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
         <?php include 'footer_admin.php'; ?>
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