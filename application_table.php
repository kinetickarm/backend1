<?php 
session_start();
include 'dbconnection1.php';
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING); ?>
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
             
                
                font-size: 15px;
                border-collapse: none;
               
                /*text-align: center;*/
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
                    <h3>New Applications</h3>
                    <ul>
                        <li class="active"><a href="home_admin.php">Home</a></li>
                        <li><a href="application_table.php">Admission</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
     <?php
     
       // echo "fetched";


         ?>
        
        
        <!--================Room List Area =================-->
       <section class="room_details_area">
            <div class="container" >
                <div class="main_big_title">
                    <h2>NEW Admission&nbsp<span>APPLICATIONS</span></h2>
                   <?php
                   error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
                    $_SESSION['id']=$_POST['app_id'];
                        $_SESSION['name']=$_POST['name1'];
                        $_SESSION['branch']=$_POST['branch1'];
                        $_SESSION['sem']=$_POST['sem1'];
                        $_SESSION['rank']=$_POST['rank1'];

                    ?>
                       </div>
                    <div class="details">   
                    <form target=""  method="POST">
                    <table id="search_area" align="left" style="padding-bottom: 20px;color: black;" class="container-fluid">
                        <br><br>
                        <tr>
                        <td style="padding-bottom: 10px;"><h4 style="font-weight: solid; font-size: 20px; ">Application Id:</h4></td>

                        <td style="padding-bottom: 10px;">
                        <input class="form-group form-control" type="text" name="app_id" style="background: transparent; border:none; border-bottom: 1px solid black;" value="<?php echo $_POST['app_id'];?>"></td>
                        </tr>

                        <tr>
                        <td style="padding-bottom: 10px;"><h4 style="font-weight: solid; font-size: 20px; ">Name:</h4></td>

                        <td style="padding-bottom: 10px;">
                        <input class="form-control form-group" type="text" name="name1" style="background: transparent; border:none; border-bottom: 1px solid black;" value="<?php echo $_POST['name1'];?>"></td>
                        </tr>


                        <tr>
                        <td style="padding-bottom: 10px;">
                        <h4 style="float: left;font-weight: solid; font-size:20px; ">Branch:</h4></td>
                        <td style="padding-bottom: 10px;">
                        <select name="branch1" class="form-control form-group" style="color: black;" value="">
                            <option value=""><?php if(isset($_SESSION['branch'])){echo $_SESSION['branch']; } if(!isset($_SESSION['branch'])){echo "Select branch"; } ?></option>
                            <option value="Computer">Computer</option>
                            <option value="IT">IT</option>
                            <option value="Mechanical">Mechanical</option>
                            <option value="Electrical">Electrical</option>
                            <option value="Chemical">Chemical</option>
                            <option value="Civil">Civil</option>
                            <option value="IC">IC</option>
                            <option value="EC">EC</option>
                            <option value="PE">PE</option>
                      </select>

                        </td>
                        </tr>

                        <tr>
                        <td style="padding-bottom: 10px;">
                        <h4 style="float: left;font-weight: solid; font-size:20px; ">Sem:</h4></td>
                        <td style="padding-bottom: 10px;">
                        <select name="sem1" class="form-control form-group" style="color:black;">
                                <option value=""><?php if(isset($_SESSION['sem'])){echo $_SESSION['sem']; }if(!isset($_SESSION['sem'])){echo "Select sem"; }?></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                       </select>

                        </td>
                        </tr>
                        <tr>
                        <td style="padding-bottom: 10px;"><h4 style="font-weight: solid; font-size: 20px; ">RANK:</h4></td>

                        <td style="padding-bottom: 10px;">
                        <input class="form-group form-control" type="text" name="rank1" style="background: transparent; border:none; border-bottom: 1px solid black;" value="<?php echo $_POST['rank1'];?>"></td>
                        </tr>
                   
                        
                        <tr>
                            <td></td>
                        <td style="padding-bottom: 10px;">
                        
                            <button type="submit" name="submit" class="form-group" style="color: black;">Submit</button>
                            <button type="submit" name="reset" class="form-group" style="color: black;">Clear</button>
                        
                        </td>
                        </tr>
                        </table>
                        <br><br><br>
                         </form>
                        <br><br><br><br><br><br>


                        <table align="center" id="application">
                        <tr>
                        <th>No.</th>
                        <th>Timestamp</th>
                        <th>Application id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Branch</th>
                        <th>Sem</th>
                        <!-- <th>INTAKE LEFT</th>
                        <th>WAITING INTAKE</th> -->
                        <th>ACPC RANK</th>
                        <th>View Application</th>
                        <th>Action</th>
                        <!-- <th>Remarks</th> -->
                        </tr>
                        

                        <?php                                                                                                       
                        error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);    
                        $id1  = $_POST['app_id'];
                        $name1 = $_POST['name1'];
                        $branch1 = $_POST['branch1'];
                        $sem1 =$_POST['sem1'];
                        //$select_query = "select * from admission where action='0' order by acpc desc";
                        if($sem1!=1){
                           // $acpc1=$_POST['acpc1'];
                            $select_query = "select * from admission where sem = '$sem1' and action='0' order by cpi desc";

                        
                        if($sem1 != "" && $branch1 != ""){
                             $select_query = "select * from admission where sem = '$sem1' and branch  = '$branch1' and action='0' order by cpi desc";
                        }

                        else if ($sem1!="") {
                                 $select_query = "select * from admission where sem = '$sem1' and action='0' order by cpi desc";
                            }  

                        else if ($id1 != "" || $name1 != "" || $branch1 != "" || $sem1 != "" ) {
                            $select_query = "select * from admission where (id = '$id1' or name = '$name1' or branch  = '$branch1' or sem = '$sem1' or rank  = '$rank1') and action='0' order by cpi desc";
                            # code...
                        }
                        else{
                            $select_query = "select * from admission where action='0' order by cpi desc";
                        }
                    
                            
                        }
                        else{
                            $select_query = "select * from admission where sem = '$sem1' and action='0' order by acpc asc";

                        
                        if($sem1 != "" && $branch1 != ""){
                             $select_query = "select * from admission where sem = '$sem1' and branch  = '$branch1' and action='0' order by acpc asc";
                        }

                        else if ($sem1!="") {
                                 $select_query = "select * from admission where sem = '$sem1' and action='0' order by acpc asc";
                            }  

                        else if ($id1 != "" || $name1 != "" || $branch1 != "" || $sem1 != "" ) {
                            $select_query = "select * from admission where (id = '$id1' or name = '$name1' or branch  = '$branch1' or sem = '$sem1' or rank  = '$rank1') and action='0' order by acpc asc";
                            # code...
                        }
                        else{
                            $select_query = "select * from admission where action='0' order by acpc asc";
                        }
                    

                        }
                        //mysqli_query($dbconnection1,"update admission set remarks='' where action='0'");

                        $select_query_run= mysqli_query($connection1,$select_query);
                        $sr=1;
                        while ($result = mysqli_fetch_array($select_query_run,MYSQLI_ASSOC)){
                           
                            ?>
                            
                        <tr>
                            <td><?php echo $sr; ?></td>
                            <td><?php echo $result['timestamp']?></td>
                            <td><?php echo $result['id']; ?></td>
                            <td><?php echo $result['name']; ?></td>
                            <td><?php echo $result['email_id']?></td>
                            <td><?php echo $result['branch']; ?></td>
                            <td><?php echo $result['sem']; ?></td>
                            <?php if($result['sem'] == 1){ ?>
                            <td><?php echo $result['acpc']; ?></td>
                            <?php } 
                            else{
                                ?>
                                <td><?php echo $result['cpi']; ?></td>
                                <?php
                            }?>
                            
                            
                            <td><form method="post" action="view_application .php"><a href=""><button type="submit">click here</button></a>
                            <input type="hidden" name="table_id" value= "<?php echo $result['id'];?>">
                              
                            </form>
                            </td>
                            <?php
                            switch ($result['action']) {
                                case '1':
                                    $action_val = "<span style='color:green;' >APPROVED</span>";
                                  
                                    break;
                                case '2':
                                    $action_val = "<span style='color:red; font-weight:bold;'>REJECTED</span>";
                                    break;    
                                
                                default:
                                    $action_val = "PENDING";
                                    break;
                            }

                             ?>
                             <td><?php echo $action_val; ?></td>
                             <!-- <td><?php echo $result['remarks']; ?></td> -->
                        
                        </tr>
                        <?php $sr++; } ?>

                    </table>
       <!--              <?php echo "action:".$_POST['action']; ?> -->
                
            </div>
            </div>
            </div>
        </section>
        <?php  //code to update intakes of specific branch & sem
                         $branch_array=array("IC","IT");
                        for($i=0;$i<2;$i++){
                            for($j=1;$j<4;$j+=2){
                                $sem = $j;
                        $branch = $branch_array[$i];
                        
                     
                      $raw2=mysqli_fetch_array(mysqli_query($connection1,"select count(action) from admission where action='0' and action2='not allocated' and branch='$branch' and sem='$sem'"),MYSQLI_ASSOC);
                        
                       //echo $raw2['count(action)'];
                        $approved=$raw2['count(action)']; 
                        if(mysqli_query($connection1,"update branch_intake set approved ='$approved' where branch='$branch'and sem='$sem'"))//echo "up";

                        $raw2=mysqli_fetch_array(mysqli_query($connection1,"select count(action) from admission where action='1' and action2='not allocated' and branch='$branch' and sem='$sem'"),MYSQLI_ASSOC);
                        
                       //echo $raw2['count(action)'];
                        $not_allocated=$raw2['count(action)']; 
                        if(mysqli_query($connection1,"update branch_intake set not_allocated ='$not_allocated' where branch='$branch'and sem='$sem'"))

                        $raw2=mysqli_fetch_array(mysqli_query($connection1,"select count(action2)from admission where action2='finally_allocated' and branch='$branch'and sem='$sem'"),MYSQLI_ASSOC);


                        
                       //echo $raw2['count(action2)'];
                        $allocated=$raw2['count(action2)'];
                        if(mysqli_query($connection1,"update branch_intake set allocated ='$allocated' where branch='$branch' and sem='$sem'"))//echo "up";

                        $raw2=mysqli_fetch_array(mysqli_query($connection1,"select count(action2)from admission where action2='temp_allocated' and branch='$branch'and sem='$sem'"),MYSQLI_ASSOC);
                        
                       //echo $raw2['count(action2)'];
                        $temp_allocated=$raw2['count(action2)'];
                        if(mysqli_query($connection1,"update branch_intake set temp_allocated ='$temp_allocated' where branch='$branch' and sem='$sem'"))//echo "up";

                      

                        $raw2=mysqli_fetch_array(mysqli_query($connection1,"select count(*) from admission where (action2='rejected' or action='2') and branch='$branch' and sem='$sem'"),MYSQLI_ASSOC);
                        
                       //echo $raw2['count(*)'];
                        $rejected=$raw2['count(*)'];
                        if(mysqli_query($connection1,"update branch_intake set rejected ='$rejected' where branch='$branch' and sem='$sem'"))//echo "up";

                        $raw2=mysqli_fetch_array(mysqli_query($connection1,"select count(*)from admission where action='0' and branch='$branch' and sem='$sem'"),MYSQLI_ASSOC);
                        
                       //echo $raw2['count(*)'];
                        $pending=$raw2['count(*)'];
                        if(mysqli_query($connection1,"update branch_intake set pending ='$pending' where branch='$branch' and sem='$sem'"))//echo "up";



                        $raw2=mysqli_fetch_array(mysqli_query($connection1,"select * from branch_intake where branch='$branch' and sem='$sem'"),MYSQLI_ASSOC);
                        $intake=$raw2['total']-$approved;
                       if(mysqli_query($connection1,"update branch_intake set intake ='$intake' where branch='$branch' and sem='$sem'"))//echo "up";

                       $raw2=mysqli_fetch_array(mysqli_query($connection1,"select count(*)from admission where branch='$branch' and sem='$sem'"),MYSQLI_ASSOC);
                        
                       //echo $raw2['count(*)'];
                        $total_applications=$raw2['count(*)'];
                        mysqli_query($connection1,"update branch_intake set total_applications ='$total_applications' where branch='$branch' and sem='$sem'");//echo "up";
                    }
                    }?>
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