<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>    
<!-- Mirrored from designarc.biz/demos/hilltown/theme/room-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2019 17:36:39 GMT -->
<head> 
        <link rel="stylesheet" type="text/css" href="css/header CSS.css">
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
        <link rel="stylesheet" type="text/css" href="header CSS.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
<style type="text/css">
    
          .resort_title1 h2 
          {
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
                box-sizing:20px;
                width: 150px;
                margin: 10px;
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
            .container h2{
                font-family: "Montserrat";
                margin: 10 0 20px 0;
                color: #039287;

             }
             .table{
                border-collapse: collapse;
                box-sizing: border-box;
                display: table;
                border-spacing: 2px;
                border-color:#fff;
                margin-bottom: 1rem;
               /* color: #212529;*/
                /*table-layout: inherit;*/
                background-color: #DCDCDCDC;
            
             }
              .table-hover tbody tr:hover {
                background-color: rgba(0,0,0,0.1);

             }
             

            /* td{
                display: table-cell;
                font-family: "Montserrat";
                font-size: 15px;
             }*/
             
             .hostel_detail_table{
                width: 80% ;
                margin-left: 15px;
             }
             
             th{
                border: 1px solid white;
                font-family: "Montserrat";
                font-size: 20px;
                background-color: #039287;
                color: #ccc;

             }

             td{
              color: black;
              font-size: 17px;
             }
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
  line-height: 25px;
  letter-spacing: .225px;
  color: #000000;
  padding:0px 100px 0px 0px;
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
  
  padding-bottom: 20px;
}

.resort_title1 h2 span {
  color: #ffb606;
  margin-top: 20px;:
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


             

        </style>
    </head>
    <body>

        <!--================Header Area =================-->
        <?php  
            include 'header.php';
        ?>
        <!--================Header Area =================-->
        
        <!--================Banner Area =================-->
         <section class="banner_area">
                    <div class="container">
                        <div class="banner_inner_content">
                            <h3>Co-ordinators</h3>
                            <ul>
                                <li class="active"><a href="index.html" style="color: #039287">Home</a></li>
                                <li><a href="activities.html">Addmission</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
        <!--================End Banner Area =================-->
        
        <!--================Room List Area =================-->
       <!--<section class="room_details_area">
            <div class="container">
                <div class="main_big_title">
                   <!-- <h2>NEW Admission&nbsp<span>APPLICATIONS</span></h2>-->
                    
                       </div>
                    <div class="details">   
                    
                   <!--<table id="search_area" align="center">
                        <br><br>
                        
                        
                       <h4 style="float: left;font-weight: solid; font-size:20px; color: #039287;">IMPORTANT PHONE NO.:</h4></td>
                        
                        <select>
                            <option selected>Find</option>
                            <option>Student Co-ordinator -123444</option>
                            <option>House Keeping -4546384</option>
                            <option>Electrician -434367267</option>
                           <!-- <option>Branch</option>
                            <option>Sem</option>
                            <option>ACPC Rank or CPI</option>-->
                        </select>
                        </td>
                        
                        <td><pre style="background: transparent;border:none;">       </pre></td>
                        <td>

                       <!-- <h4 style="font-weight: solid; font-size: 20px;">Enter name of selected field:</h4></td>-->

                        <!--<td>
                        <input type="text" name="text" style="background: transparent; border:none; border-bottom: 1px solid black;"></td>-->
                        
                        </table>
                        <br><br>
                        <!--<div class="container">
 <h2><span style="color:#039287; font-family: "Montserrat"; ">IMPORTANT NUMBERS</span></h2>
  <!--<div class="dropdown-content">-->
   <!-- <table class="table table-striped table-row-hover hostel-details-table">
    <thead>
      <tr>
        <th>Designation</th>
        <th>Phone number</th>
      </tr>
    </thead>
    <tbody>
  <tr>
    <td>Student Co-ordinator</td> 
  <td>675465868548</td>
</tr>
  <tr>
    <td>House keeping</td>
  <td>657465455</td>
</tr>
  <tr>
    <td>Electrician</td>
  <td>675485748
</td>
</tr>
</tbody>
</table>
</div>


                       <!-- <table align="center" id="application" class="padding">
                        	<div class="row" id="application" style="display: flex;">
                        		<div class="col-md-12">
                        			<table class="table table-hover table-striped hostel-details-table"
                        				
                        		

                      
                          <thead>
                          <tr>
                        <th>Name</th>
                        <th>Designation</th>
                        <!--<th>Name</th>
                        <th>Branch</th>
                        <th>Sem</th>
                        <th>ACPC RANK or CPI</th>
                        <th>View Application</th>-->
                        <!--</tr>
                    </thead>
                        




                      <tbody>
                        <tr>
                        	<td>prof.A.B.Dhruv</td>
                            <td>Advisor</td>
                            <!--<td>Karm Patel</td>
                            <td>Computer</td>
                            <td>3</td>
                            <td>8.89</td>
                            <td><button>click here</button></td>-->
                        <!--</tr>
                    
                        <tr>
                        	<td>Prof.D.M.Patel</td>
                            <td>Rector</td>
                            <!--<td>Karm Patel</td>
                            <td>Computer</td>
                            <td>3</td>
                            <td>8.89</td>
                            <td><button>click here</button></td>-->
                        <!--</tr>
                        
                       
                        <tr>
                        	<td>Prof.Dipak.A.Bhatt</td>
                            <td>Warden(Boys)</td>
                            <!--<td>Karm Patel</td>
                            <td>Computer</td>
                            <td>3</td>
                            <td>8.89</td>
                            <td><button>click here</button></td>-->
                       <!-- </tr>
                       
                 

                     
                        <tr>
                        	<td>Prof.Nitin.R.Prajapati</td>
                            <td>Warden(Boys)</td>
                           <!-- <td>Karm Patel</td>
                            <td>Computer</td>
                            <td>3</td>
                            <td>8.89</td>
                            <td><button>click here</button></td>-->
                        <!--</tr>
                       
                      
                        <tr>
                        	<td>Prof.Alpesh.M.Patel</td>
                            <td>Warden(Boys)</td>
                            <!--<td>Karm Patel</td>
                            <td>Computer</td>
                            <td>3</td>
                            <td>8.89</td>
                            <td><button>click here</button></td>-->
                        <!--</tr>
                        
                        </tbody>
                    </div><div class="container">
  <h2>Hostel Coordinators</h2>
 <!-- <p>Using all the table classes on one table:</p> -->                                         
  
 <div class="container">
  <h2>Hostel Co-ordinators</h2>
 <!-- <p>Using all the table classes on one table:</p> -->                                         
  <table class="table table-striped table-cell table-hover ">
    <thead>
      <tr>
        <th>Name</th>
        <th>Designation</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Prof.A.B.Dhruv</td>
        <td>Advisor</td>
      </tr>
      <tr>
        <td>Prof.D.M.Patel</td>
        <td>Rector</td>
      </tr>
      <tr>
        <td>Prof.Dipak.A.Bhatt</td>
        <td>Warden</td>
      </tr>
      <tr>
        <td>Prof.Nitin R.Prajapati</td>
        <td>Warden</td>
    </tr>
    <tr>
        <td>Prof.Alpesh.M.Patel</td>
        <td>Warden</td>
      </tr>
      <tr>
        <td>Prof.Ghanshyam Sah</td>
        <td>Warden</td>
      </tr>
      
      
        
    

    </tbody>
  </table>
</div><br><br><br>


<div class="container">
 <h2>Important Numbers</h2>
  <!--<div class="dropdown-content">-->
    <table class="table table-striped table-hover ">
    <thead>
      <tr>
        <th>Name</th>
        <th>Designation</th>
        <th>Hostel</th>
        <th>Phone number</th>

      </tr>
    </thead>
    <tbody>
  <tr>
    <td>Smit Akhani</td>
    <td>Student Co-ordinator-1</td> 
    <td>1</td>
  <td>7359911009</td>
</tr>
<tr>
    <td>Karm Patel</td>
    <td>Student Co-ordinator-2</td> 
    <td>1</td>
  <td>9624383710</td>
</tr>
<tr>
    <td>Malav Mevada</td>
    <td>Student Co-ordinator-1</td> 
    <td>2</td>
  <td>9724635648</td>
</tr>
<tr>
    <td>Khushnood Shaikh</td>
    <td>Student Co-ordinator-2</td> 
    <td>2</td>
  <td>6355316409</td>
</tr>
  <tr>
    <td>Prachi Patel</td>
    <td>House keeping</td>
    <td>Both</td>
  <td>7698209629</td>
</tr>
  <tr>
    <td>Gunjan Vazirani</td>
    <td>Electrician</td>
    <td>Both</td>
  <td>9265688352
</td>
</tr>
</tbody>
</table>
</div>
                
            </div>
            </div>
            </div>
        </section>
        <br><br><br><br><br><br>
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
                                <a class="navbar-brand" href="#">
                                <img src="img/logo.png" alt="" height="70px" >
                               
                            </a>
                           
                            <div class="resort_title1">
                                <h2 style="padding-top: 20px;"><span style="color: #039287">HOSTEL <span style="color: #039287">MANAGEMENT</span></span></h2>
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
                             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3669.717209126576!2d72.59106171444378!3d23.10744571895034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e83ca44f7d0dd%3A0xbbfdcfcf4fb6ccf0!2sVGEC%20Boys%20Hostel-1!5e0!3m2!1sen!2sin!4v1577121123820!5m2!1sen!2sin" width="100%" height="300px" style=" border:5; border-radius: 4px; opacity: .5;" allowfullscreen=""></iframe>


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