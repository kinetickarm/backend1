<?php session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
 ?>

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
                                      <form method="post" action="homepage">
                                    <?php if(isset($_SESSION["admin_email"])){echo "<a style='font-size:10px;' class='book_now_btn' href='logout.php'>LOGOUT</a>";
                                      } 
                                          else{
                                            echo "<a style='font-size:10px;' class='book_now_btn' href='login-07.php'>LOGIN</a>";
                                          }  
                                    ?>
                                   <!--  <a class="book_now_btn" href="#">LOGIN</a> -->
                                </form>
                                </div>
                            </aside>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <aside class="f_widget link_widget">
                                <div class="f_title">
                                    <h3>Useful Links</h3>
                                </div>
                                <ul>
                                  <li><a href="login-07.php">- Sign up</a></li>
                                   <li><a href="norms.php">-Norms</a></li>
                                    <li><a href="contacts.php">-Contacts</a></li>
                                    <li><a href="https://www.onlinesbi.com/sbicollect/icollecthome.htm">-Sbi collect</a></li>

                                    
                                  
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
        
        <!--================Search Box Area =================-->
        