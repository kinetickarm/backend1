<?php session_start(); ?>
<header class="main_header_area" style="background-color: black;">
            <div class="header_top">
                <div class="container">
                    <div class="header_top_inner">
                        <div class="pull-left">
                            <a href="#" style="margin-right: 720px;">
                                <?php if(isset($_SESSION['email'])){
                                    echo "<i class='fa fa-user-o'></i>STUDENT";
                                }
                                else{?>
                                <i class="fa fa-phone" ></i>+ 7698209629 <?php } ?></a>
                            <a href="#"><i class="fa fa-envelope-o"></i>
                                <?php if(isset($_SESSION['email']))
                                    echo $_SESSION['email']; 

                                 else 
                                    echo "hostelmagement01@gmail.com";  ?></a>
                            
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
                        <?php error_reporting(E_ERROR | E_PARSE);
                                $email=$_SESSION["email"];
                                $query="select action,action2 from admission where email_id='$email'";
                                $run=mysqli_query($connection1,$query);
                                $result=mysqli_fetch_array($run,MYSQLI_ASSOC);
                                if(!$run){
                                     $error=mysqli_error($connection1);
                                echo $error;}
                        ?>
                                
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a <?php if(isset($_SESSION['email'])) {?>href="home.php" <?php } else{ ?> href="index.php" <?php } ?>>HOME</a></li>
                               <!--  <li class="dropdown submenu active">
                                    <a href="home.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">HOME <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.html">Home Page 1</a></li>
                                        <li><a href="index-2.html">Home Page 2</a></li>
                                        <li><a href="index-3.html">Home Page 3</a></li>
                                        <li><a href="index-4.html">Home Page 4</a></li>
                                    </ul>
                                </li> -->
                                <?php if(isset($_SESSION['email'])){
                                ?>
                                   <li class="submenu dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ADMISSION <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="Admission_application.php">APPLICATION</a></li>


                                         <li>
                                            <a <?php if($_SESSION["handicap"]=="yes"){?>href="upload_documents_handicap.php" <?php }

                                             else{ ?> href="upload_documents.php" <?php } ?>>Upload Documents
                                            </a>
                                        </li>



                                        <li><a href="Admission_status.php">ADMISSION STATUS</a></li>
                                    </ul>
                                </li>

                                <li><a <?php if($result['action']=='1'){ ?>href="fees.php"<?php }else{ ?>onclick="fun1()"<?php } ?>>FEES</a> </li>
                                <script>
                                    function fun1()
                                    {
                                        window.alert("Sorry,you can only see fees page after your application is approved!")
                                    }
                                </script>
                               <?php } ?>

                               <?php if(isset($_SESSION['email'])){ ?>
                               <li class="submenu dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Complaint <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a <?php if($result['action2']== "finally_allocated" || $result['action2']== "temp_allocated"){ ?>href="complaint01.php"<?php }else{?> onclick="fun2()"<?php } ?>>COMPLAINT FORM</a></li>
                                        <li><a <?php if($result['action2']== "finally_allocated" || $result['action2']== "temp_allocated"){ ?>href="complaint02.php"<?php }else{ ?> onclick="fun2()"<?php } ?>>COMPLAINT STATUS</a></li>
                                        <script >
                                            function fun2()
                                            {
                                                window.alert("Sorry,you can only see this after your admission in hostel gets confirm!");
                                            }
                                        </script>
                                    </ul>
                                </li>
                                <li><a href="notice01.php">NOTICE</a></li>
                                <?php } ?>

                                <?php 
                                    if(isset($_SESSION['email'])){
                                ?>
                                <li class="submenu dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">HELP <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="readguide.php">READ GUIDE</a></li>
                                        <li><a href="norms.php">NORMS</a></li>
                                        <li><a href="contacts.php">ABOUT</a></li>
                                    </ul>
                                </li>
                                
                            <?php }
                                    if(!isset($_SESSION['email']))
                                    { ?>
                                        <li><a href="norms.php">NORMS</a></li>
                                        <li><a href="readguide.php">READ GUIDE</a></li>
                                        <li><a href="contacts.php">ABOUT</a></li>
                               <?php  
                                    }
                            ?>

                                <?php
                                if(isset($_SESSION['email'])){
                                ?>

                                <li><a href="profile.php">PROFILE</a></li><?php } ?>

                                <ul class="nav navbar-nav navbar-right">
                                <!-- <li class="search_dropdown">
                                    <a class="popup-with-zoom-anim" href="#test-search"><i class="icon icon-Search"></i></a>
                                </li> -->
                                <li class="book_btn">
                                    <form method="post" action="homepage">
                                    <?php if(isset($_SESSION["email"])){echo "<a style='font-size:10px;' class='book_now_btn' href='logout.php'>LOGOUT</a>";
                                      } 
                                          else{
                                            echo "<a style='font-size:10px;' class='book_now_btn' href='login-07.php'>LOGIN</a>";
                                          }  
                                    ?>
                                   <!--  <a class="book_now_btn" href="#">LOGIN</a> -->
                                </form>
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