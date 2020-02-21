<?php
include 'dbconnection01.php';
?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from designarc.biz/demos/hilltown/theme/event.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Dec 2019 05:38:26 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
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
        	.form-control textarea
        	{
        		color: black;
        	}
        	.form-control textarea.placeholder{
        		color: black;
        	}
        	.form-control textarea:-moz-placeholder{
        		color: black;
        	}
        	.form-control textarea::-moz-placeholder{
        		color: black;
        	}
        	.form-control textarea::-webkit-input-placeholder{
        		color: black;
        	}
        </style>
    </head>
    <body>

        <!--================Header Area =================-->
        <header class="main_header_area">
            <div class="header_top">
                <div class="container">
                    <div class="header_top_inner">
                        <div class="pull-left">
                            <a href="#"><i class="fa fa-phone"></i>+ (1800) 456 7890</a>
                            <a href="#"><i class="fa fa-envelope-o"></i>info@hilltownresort.com</a>
                        </div>
                        <div class="pull-right">
                            <ul class="header_social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>            </div>
            <div class="header_menu">
                <nav class="navbar navbar-default">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">
                                <img src="img/logo.png" alt="">
                                <img src="img/logo-sticky.png" alt="">
                            </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
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
                                <li class="submenu dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Rooms <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="room.html">Rooms Grid Style</a></li>
                                        <li><a href="room-list.html">Rooms List Style</a></li>
                                        <li><a href="room-details.html">Single Room</a></li>
                                    </ul>
                                </li>
                                <li class="submenu dropdown active">
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
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        </header>
        <!--================Header Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_content">
                    <h3>NOTICE</h3>
                    <ul>
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="event.html">View Notices</a></li>
                    </ul>
                </div>
            </div>
        </section>

<?php 
            error_reporting(E_ERROR | E_WARNING | E_PARSE);
            $submit=$_POST['submit'];
            if($submit!=='submit'){                
                $error=mysqli_error($connection);
                echo $error;}
            if($submit=='submit'){

            $subject=$_POST['sub'];
            $sdate=$_POST['sdate'];
            $edate=$_POST['edate'];
            $notice=$_POST['notice'];
            $status=1;
            $query="insert into notice (subject,sdate,edate,notice,status) values ('$subject','$sdate','$edate','$notice','$status')";
            $run=mysqli_query($connection,$query);
            if(!$run){
                           $error= mysqli_error($connection);
                           echo $error;}
            }
?>
           <?php 
                        if($_POST['remove']=="remove")
                        {
                            $status=0;
                            $sub=$_POST['sub'];
                            $not=$_POST['not'];
                            $nid=$_POST['nid'];
                            $query="update notice set status='$status' where subject='$sub' and notice='$not' and nid='$nid'";
                            $run=mysqli_query($connection,$query);
                            if(!$run)
                            {  
                                $error=mysqli_error($connection);
                                echo "$error";
                            }
                        }
            ?>

        <!--================End Banner Area =================-->
        <section style="width: 100%;height: 800px;background: #f7f7f7;padding: 50px;">
        	<h2 style="color: black;text-align: center;padding: 30px;padding-bottom: 40px;font-size: 30px;font-weight: bold;">VIEW &nbspNOTICES</h2>
        	<div class="container" style="width: 70%;background: white;height: 85%;margin: all;padding: 20px;" >
                <div class="container" style="width: 80%;background: #E3E4FA;height: 95%;padding-bottom: 30px;margin:auto;margin-top: 15px;overflow-y: scroll;">  
                <?php 
                    $query="select subject,notice,sdate,edate,status,nid from notice";
                    $run=mysqli_query($connection,$query);
                    if(!$run)
                    {
                        $error=mysqli_error($connection);
                        echo "$error";
                    }
                    while($result=mysqli_fetch_array($run,MYSQLI_NUM)){
                        if($result[4]=='1' && $result[2]<=date("Y-m-d") && $result[3]>=date("Y-m-d")){ 
                ?>
                <div><form method="post" enctype="multipart/form-data">
                    <p style="background: none;border: none;font-size: 15px;padding: 15px;margin: 15px;color: black;"><span style="font-weight: bold;padding-bottom: 0px;"><?php echo "$result[0]".":"?></span><?php echo "$result[1]"?></p>
                    <pre style="background: none;border: none;font-size: 15px;padding: 15px;margin: 15px;padding-top: 0px;color: grey;"><span style="font-weight: bold;">Expires on:</span><?php echo "$result[3]"?>
                    <button type="submit" class="btn btn-default btn-sm" name="remove"><span class="glyphicon glyphicon-remove"></span></button>
                    <input type="hidden" name="remove" value="remove">
                    <input type="hidden" name="sub" value="<?php echo $result[0]; ?>">
                    <input type="hidden" name="not" value="<?php echo $result[1]; ?>">    
                    <input type="hidden" name="nid" value="<?php echo $result[5]; ?>">
                </form>    
                </div>
                <hr style="border-color: black;">
                <? }}
                ?>
                </div>
            </div>
        </section>

        <!--================Footer Area =================-->
       <?php include 'footer_admin.php'; ?>
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
        
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        
        <!-- instafeed-->
        <script type="text/javascript" src="vendors/instafeed/instafeed.min.js"></script>
        <script type="text/javascript" src="vendors/instafeed/script.js"></script>
        
        <script src="js/theme.js"></script>
    </body>

<!-- Mirrored from designarc.biz/demos/hilltown/theme/event.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Dec 2019 05:38:43 GMT -->
</html>