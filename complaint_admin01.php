<?php 
include 'dbconnection1.php';
?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from designarc.biz/demos/hilltown/theme/event.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Dec 2019 05:38:26 GMT -->
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

         <?php include 'header_admin.php'; ?>
        <!--================Header Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_content">
                    <h3>COMPLAINTS</h3>
                    <ul>
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="event.html">New Complaints</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        <?php 
            $query="select count(cid) from complaint where decision=0";
            $run=mysqli_query($connection1,$query);
            $result=mysqli_fetch_array($run,MYSQLI_NUM);
            $var=$result[0];
        ?>
        <section style="width: 100%;height: 100%;background: #f7f7f7;">
        	<details>
        		<summary class="btn" style="border: none;outline: none; width: 500px;padding-bottom: 10px;padding-top: 30px; padding-left: 0px;list-style: none;">
                        <span style="font-size: 30px;padding-top: 30px;font-weight: bolder;">New Complaints
                        <span class="badge"><?php echo "$var" ?></span></span>
                </summary>
                <div style="padding: 30px;" >
                    <table border="1" class="table text-align table-responsive table-hover" style="width: 80%;text-align: center;padding: 40px;border-radius: 10px;border-color: black;color: black;height: 80px;overflow-y: scroll;" align="center">
                        <thead style="padding: 20px;background: white;font-size: 20px;border-radius: 10px;">
                            <tr style="border:4px;border-color: black;border-radius: 10px;font-weight: bold;">
                                <td>CID</td>
                                <td>Complainant</td>
                                <td>Complaint category</td>
                                <td>View</td>
                            </tr>
                        </thead>

                        <?php
                        $query="select * from complaint where decision=0";
                        $run=mysqli_query($connection1,$query);
                        
                        while ($result=mysqli_fetch_array($run,MYSQLI_NUM)) {
                            
                        ?>  <tr><form method="POST" action="complaint_admin02.php">
                            <td><input name="cid" value="<?php echo "$result[1]"; ?>" id="cid" style="border: none;background: #f7f7f7;text-align: center;width: 40px;"></input></td>
                            <td><?php echo "$result[2]"; ?></td>
                            <td><?php echo "$result[8]"; ?></td>
                            <td><button type="submit" class="btn btn-primary" name="view">View</button></td>
                            </form></tr>
                        <?php }?>

                    </table>
                </div>
            </details> 
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