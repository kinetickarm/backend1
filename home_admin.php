<?php session_start(); 
include 'dbconnection1.php';
//$email_id = $_POST['email_id'];
//$_SESSION["email_id"] = $email_id;
//echo "Email:".$_SESSION["email_id"];
?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from designarc.biz/demos/hilltown/theme/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2019 17:31:24 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/vgeclogo.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Hostel Management</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/stroke-icon/style.css" rel="stylesheet">
        <link href="vendors/flat-icon/flaticon.css" rel="stylesheet">
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

        <link rel="stylesheet"  href="css2/bootstrap.css">
        <link rel="stylesheet"  href="css2/bootstrap.min.css">
        <link rel="stylesheet"  href="css2/bootstrap-grid.css">
        <link rel="stylesheet"  href="css2/bootstrap-grid.min.css">
        <link rel="stylesheet"  href="css2/bootstrap-reboot.css">
        <link rel="stylesheet"  href="css2/bootstrap-reboot.min.css">

          <script
         src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        
          <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
          <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->
          <script type="text/javascript" src="js2/bootstrap.min.js"></script>
          <script type="text/javascript" src="js2/proper.min.js"></script>
         <!--  <script type="text/javascript" src="js2/jquery.min.js"></script> -->

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


            .media-body h2{
                font-size: 32px;
                text-transform: uppercase;
                font-family: "Montserrat", sans-serif;
                font-weight: bold;
                letter-spacing: .32px;
                color: white;
                padding-bottom: 8px;
                padding-top: 12px;
            }

             /* Make the image fully responsive */
            /*.carousel-inner img {
                 width: 100%;
                 height: 100%;
            }*/
            
               .main_big_title h4 {
  color: #039287;
  font-family: "Montserrat", sans-serif;
  font-size: 25px;
  font-weight: bold;
  letter-spacing: .96px;
  text-transform: uppercase;
  padding-bottom: 15px;
  position: relative;
}

.main_big_title h4 span {
  color: #242424;
}


.navbar-brand1{
    height: 85px;
    line-height: 50px;
    padding: 0px 0px 0px 10px;
}

.navbar-brand1 img{
    display: inline-block;;
    height: 48px;
    margin-top: 27px;
}

        </style>
    </head>
    <body>

        <!--================Header Area =================-->
     
        <?php include 'header_admin.php' ;?>
        <!--================Header Area =================-->
        
        <!--================Slider Area =================-->
        <section class="main_slider_area">
            <div id="main_slider4" class="rev_slider" data-version="5.3.1.6">
                <ul>
                    <li data-index="rs-1587" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="img/home-slider2/bg2.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="img/home-slider2/bg2.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>

                        <!-- LAYER NR. 1 -->
                        <div class="slider_text_box">
                            <div class="tp-caption tp-resizeme middle_f_text" 
                            id="slide-1586-layer-1" 
                            data-x="['center','center','center','center','center']" 
                            data-hoffset="['0','0','0','0']" 
                            data-y="['middle','middle','middle','middle']" 
                            data-voffset="['-50','-50','-50','-50','-50']" 
                            data-fontsize="['30','30','30','30','30']"
                            data-lineheight="['40','40','40','40','40']"
                            data-width="['400','400','400','400','none']"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['center','center','center','center']">WELCOME</div>
                            
                            <div class="tp-caption tp-resizeme middle_s_text" 
                                id="slide-1587-layer-2" 
                                data-x="['center','center','center','center','center']" 
                                data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" 
                                data-voffset="['10','10','10','10','0']"  
                                data-fontsize="['65','65','65','65','35']"
                                data-lineheight="['60','60','60','50']"
                                data-width="['550','550','550','550','400']"
                                data-height="none"
                                data-whitespace="normal"
                                data-type="text" 
                                data-responsive_offset="on"
                                data-transform_idle="o:1;"
                                data-textAlign="['center','center','center','center']"
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">VGEC HOSTEL
                            </div>
                            
                            <div class="tp-caption tp-resizeme middle_f_text" 
                                id="slide-1588-layer-3" 
                                data-x="['center','center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" 
                                data-voffset="['100','100','100','100','80']" 
                                data-fontsize="['14','14','14','14']"
                                data-lineheight="['46','46','46','46']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="text" 
                                data-responsive_offset="on" 
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"><h4>STUDENT SIDE</h4>
                               <!--   <a class="" href="#">STUDENT SIDE</a> -->
                            </div>
                        </div>
                    </li>
                    <li data-index="rs-1588" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="img/home-slider2/bg10.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="img/home-slider2/bg10.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="slider_text_box">
                            <div class="tp-caption tp-resizeme middle_f_text" 
                            id="slide-1589-layer-1" 
                            data-x="['center','center','center','center','center']" 
                            data-hoffset="['0','0','0','0']" 
                            data-y="['middle','middle','middle','middle']" 
                            data-voffset="['-50','-50','-50','-50','-50']" 
                            data-fontsize="['30','30','30','30','30']"
                            data-lineheight="['40','40','40','40','40']"
                            data-width="['400','400','400','400','none']"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['center','center','center','center']">WELCOME</div>
                            
                            <div class="tp-caption tp-resizeme middle_s_text" 
                                id="slide-1590-layer-2" 
                                data-x="['center','center','center','center','center']" 
                                data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" 
                                data-voffset="['10','10','10','10','0']"  
                                data-fontsize="['65','65','65','65','30']"
                                data-lineheight="['60','60','60','45']"
                                data-width="['700','700','700','700','350']"
                                data-height="none"
                                data-whitespace="normal"
                                data-type="text" 
                                data-responsive_offset="on"
                                data-transform_idle="o:1;"
                                data-textAlign="['center','center','center','center']"
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">VGEC HOSTEL
                            </div>
                            
                            <div class="tp-caption tp-resizeme middle_t_button" 
                                id="slide-1591-layer-3" 
                                data-x="['center','center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" 
                                data-voffset="['100','100','100','100','80']" 
                                data-fontsize="['14','14','14','14']"
                                data-lineheight="['46','46','46','46']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="text" 
                                data-responsive_offset="on" 
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"><h4>STUDENT SIDE</h4>
                               <!--  <a class="slider_btn" href="#">Reserve now</a> -->
                            </div>
                        </div>
                    </li>
                    <li data-index="rs-1589" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="img/home-slider2/bg9.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="img/home-slider2/bg9.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                        <!-- LAYER NR. 1 -->
                        <div class="slider_text_box">
                            <div class="tp-caption tp-resizeme middle_f_text" 
                            id="slide-1592-layer-1" 
                            data-x="['center','center','center','center','center']" 
                            data-hoffset="['0','0','0','0']" 
                            data-y="['middle','middle','middle','middle']" 
                            data-voffset="['-50','-50','-50','-50','-50']" 
                            data-fontsize="['30','30','30','30','30']"
                            data-lineheight="['40','40','40','40','40']"
                            data-width="['400','400','400','400','none']"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['center','center','center','center']">WELCOME</div>
                            
                            <div class="tp-caption tp-resizeme middle_s_text" 
                                id="slide-1593-layer-2" 
                                data-x="['center','center','center','center','center']" 
                                data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" 
                                data-voffset="['10','10','10','10','10']"  
                                data-fontsize="['65','65','65','65','30']"
                                data-lineheight="['60','60','60','45']"
                                data-width="['700','700','700','700','400']"
                                data-height="none"
                                data-whitespace="normal"
                                data-type="text" 
                                data-responsive_offset="on"
                                data-transform_idle="o:1;"
                                data-textAlign="['center','center','center','center']"
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">VGEC HOSTEL
                            </div>
                            
                            <div class="tp-caption tp-resizeme middle_t_button" 
                                id="slide-1594-layer-3" 
                                data-x="['center','center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" 
                                data-voffset="['100','100','100','100','80']" 
                                data-fontsize="['14','14','14','14']"
                                data-lineheight="['46','46','46','46']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="text" 
                                data-responsive_offset="on" 
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"><h4>STUDENT SIDE</h4>
                                <!-- <a class="slider_btn" href="#">Reserve now</a> -->
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!--================End Slider Area =================-->
        
        <!--================Introduction Box Area =================-->
        
        <!--================End Introduction Box Area =================-->

        <!--================End About us Area =================-->
        
        <!--================Facilities Area =================-->
        
        <!--================End Facilities Area =================-->
        
        <!--================Explor Room Area =================-->
        <!-- <section class="explor_room_area">
            <div class="container">
                <div class="explor_title row m0">
                    <div class="pull-left">
                        <div class="left_ex_title">
                            <h2>Explor Our <span>rooms</span></h2>
                            <p>choose room according to budget</p>
                        </div>
                    </div>
                    <div class="pull-right">
                        <a class="about_btn_b" href="#">view all rooms</a>
                    </div>
                </div>
                <div class="row explor_room_item_inner">
                    <div class="col-md-4 col-sm-6">
                        <div class="explor_item">
                            <div class="room_image">
                                <img src="img/room/room-1.jpg" alt="">
                            </div>
                            <div class="explor_text">
                                <a href="#"><h4>Budget room</h4></a>
                                <ul>
                                    <li><a href="#">10x15</a></li>
                                    <li><a href="#">Mountain view</a></li>
                                    <li><a href="#">2 Balcony</a></li>
                                </ul>
                                <div class="explor_footer">
                                    <div class="pull-left">
                                        <h3>$170 <span>/ Night</span></h3>
                                    </div>
                                    <div class="pull-right">
                                        <a class="book_now_btn" href="#">View details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="explor_item">
                            <div class="room_image">
                                <img src="img/room/room-2.jpg" alt="">
                            </div>
                            <div class="explor_text">
                                <a href="#"><h4>Budget room</h4></a>
                                <ul>
                                    <li><a href="#">10x15</a></li>
                                    <li><a href="#">Mountain view</a></li>
                                    <li><a href="#">2 Balcony</a></li>
                                </ul>
                                <div class="explor_footer">
                                    <div class="pull-left">
                                        <h3>$170 <span>/ Night</span></h3>
                                    </div>
                                    <div class="pull-right">
                                        <a class="book_now_btn" href="#">View details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="explor_item">
                            <div class="room_image">
                                <img src="img/room/room-3.jpg" alt="">
                            </div>
                            <div class="explor_text">
                                <a href="#"><h4>Budget room</h4></a>
                                <ul>
                                    <li><a href="#">10x15</a></li>
                                    <li><a href="#">Mountain view</a></li>
                                    <li><a href="#">2 Balcony</a></li>
                                </ul>
                                <div class="explor_footer">
                                    <div class="pull-left">
                                        <h3>$170 <span>/ Night</span></h3>
                                    </div>
                                    <div class="pull-right">
                                        <a class="book_now_btn" href="#">View details</a
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --> 
        <!--================End Explor Room Area =================-->
        
        <!--================Discount Area =================-->
       <!--  <section class="discount_area">
            <div class="container">
                <div class="row discount_inner">
                    <div class="col-md-4">
                        <div class="discount_img">
                            <img src="img/discount-person.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="discount_right_content">
                            <h5>Hot offer</h5>
                            <h4>Get 40% <span>discount</span> <br /> in summer vocations</h4>
                            <a class="book_now_btn" href="#">book now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--================End Discount Area =================-->
        
        <!--================Fun Fact Area =================-->
       <!--  <section class="fun_fact_area yellow_fun_fact">
            <div class="container">
                <div class="row">
                    <div class="fun_fact_box row m0">
                        <div class="col-md-3 col-sm-6">
                            <div class="media">
                                <div class="media-left" style="padding-right: 0px; margin-right: 0px;">
                                    <h3 class="counter" >2</h3><h3>HOSTELS</h3>
                                </div>
                                <div class="media-body">
                                    <h2></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="media">
                                <div class="media-left">
                                    <h3 class="counter">150</h3><h3>ROOMS</h3>
                                </div>
                                <div class="media-body">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="media">
                                <div class="media-left">
                                    <h3 class="counter">96</h3><h3>Bathrooms</h3>
                                </div>
                                <div class="media-body">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="media">
                                <div class="media-left">
                                    <h3 class="counter">4</h3><h3>Reading Rooms</h3>
                                </div>
                                <div class="media-body">
                                    <h2></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--================End Fun Fact Area =================-->
        
        <!--================Client Testimonial Area =================-->
       <!--  <section class="client_area client_three">
            <div class="container">
                <div class="clients_slider owl-carousel">
                    <div class="item">
                        <div class="media">
                            <div class="media-left">
                                <img src="img/clients/client-1.png" alt="">
                            </div>
                            <div class="media-body">
                                <p><i>“</i> Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit ametion consectetur elit. Vesti bulum nec odio ipsum. Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus suada faci lisis. </p>
                                <a href="#"><h4>- Michale John</h4></a>
                                <h5>Ceo of Minda</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="media">
                            <div class="media-left">
                                <img src="img/clients/client-1.png" alt="">
                            </div>
                            <div class="media-body">
                                <p><i>“</i> Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit ametion consectetur elit. Vesti bulum nec odio ipsum. Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus suada faci lisis. </p>
                                <a href="#"><h4>- Michale John</h4></a>
                                <h5>Ceo of Minda</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="media">
                            <div class="media-left">
                                <img src="img/clients/client-1.png" alt="">
                            </div>
                            <div class="media-body">
                                <p><i>“</i> Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit ametion consectetur elit. Vesti bulum nec odio ipsum. Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus suada faci lisis. </p>
                                <a href="#"><h4>- Michale John</h4></a>
                                <h5>Ceo of Minda</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--================End Client Testimonial Area =================-->
        
        <!--================Latest News Area =================-->
       <!--  <section class="latest_news_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row latest_news_left">
                            <div class="left_ex_title">
                                <h2>Latest <span>News</span></h2>
                            </div>
                            <div class="col-sm-6">
                                <div class="l_news_item">
                                    <a href="blog-details.html" class="news_img">
                                        <img src="img/blog/latest-news/l-news-1.jpg" alt="">
                                    </a>
                                    <div class="news_text">
                                        <a class="l_date" href="#">26 Aug 2017</a>
                                        <a href="#"><h4>A Night in Resort with Family</h4></a>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa nt ium dolor emque ...</p>
                                        <a class="news_more" href="blog-details.html">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="l_news_item">
                                    <a href="blog-details.html" class="news_img">
                                        <img src="img/blog/latest-news/l-news-2.jpg" alt="">
                                    </a>
                                    <div class="news_text">
                                        <a class="l_date" href="#">26 Aug 2017</a>
                                        <a href="#"><h4>A Night in Resort with Family</h4></a>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa nt ium dolor emque ...</p>
                                        <a class="news_more" href="blog-details.html">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="right_event">
                            <div class="left_ex_title">
                                <h2>Upcoming <span>Events</span></h2>
                            </div>
                            <div class="right_event_area">
                                <div class="media">
                                    <div class="media-left">
                                        <h3>17<span>Aug</span></h3>
                                    </div>
                                    <div class="media-body">
                                        <h4>Anneversay of our resort</h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <h3>25<span>Dec</span></h3>
                                    </div>
                                    <div class="media-body">
                                        <h4>Anneversay of our resort</h4>
                                    </div>
                                </div>
                                <a class="all_s_btn" href="#">view all events</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--================End Latest News Area =================-->
        
        
        
        <!--================Fun Fact Area =================-->
        <!-- <section class="fun_fact_area yellow_subscrib">
            <div class="container">
                <div class="row fun_subscrib_inner">
                    <div class="col-md-5">
                        <div class="left_text_subs">
                            <p>Subscribe to our brief newsletter to get exclusive discounts and new theme launches right in your inbox.</p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-default submit_btn_black" type="button">Subscribtion</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--================End Fun Fact Area =================-->
        
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


</html>