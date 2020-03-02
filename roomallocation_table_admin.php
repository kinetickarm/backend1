<?php include 'dbconnection1.php'; 
session_start();
?>
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
                    <h3>Room Allocation</h3>
                    <ul>
                        <li class="active"><a href="home_admin.php">Home</a></li>
                        <li><a href="roomallocation_table_admin.php">Admission</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Room List Area =================-->
       <section class="room_details_area">
         <?php  //code to update intakes of specific branch & sem
                         $branch_array=array("IC","IT");
                        for($i=0;$i<2;$i++){
                            for($j=1;$j<6;$j+=2){
                                $sem = $j;
                        $branch = $branch_array[$i];
                        //echo $branch;
                     
                      $raw2=mysqli_fetch_array(mysqli_query($connection1,"select count(action) from admission where action='1' and action2='not allocated' and branch='$branch' and sem='$sem'"),MYSQLI_ASSOC);
                        
                       //echo $raw2['count(action)'];
                        $approved=$raw2['count(action)']; 
                        if(mysqli_query($connection1,"update branch_intake set approved ='$approved' where branch='$branch'and sem='$sem'"))//echo "up";

                        $raw2=mysqli_fetch_array(mysqli_query($connection1,"select count(action) from admission where action='1' and action2='not allocated' and branch='$branch' and sem='$sem'"),MYSQLI_ASSOC);
                        
                       //echo $raw2['count(action)'];
                        $not_allocated=$raw2['count(action)']; 
                        if(mysqli_query($connection1,"update branch_intake set not_allocated ='$not_allocated' where branch='$branch'and sem='$sem'"))//echo "up";

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
            <div class="container">
                <div class="main_big_title">
                    <h2>Room&nbsp<span>Allocation</span></h2>
                    <br>
                    <!-- <h3>APPROVED APPLICATIONS</h3> -->
                    <?php
                   error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
                    $_SESSION['id']=$_POST['app_id'];
                        $_SESSION['name']=$_POST['name1'];
                        $_SESSION['branch']=$_POST['branch1'];
                        $_SESSION['sem']=$_POST['sem1'];
                        

                    ?>
                       </div>
                    <div class="details">   
                    <form target=""  method="POST">
                    <table id="search_area" align="left" style="padding-bottom: 20px;color: black;" class="container-fluid">
                        <br><br>
                        <tr>
                        <td style="padding-bottom: 10px;"><h4 style="font-weight: solid; font-size: 20px; ">Application Id:</h4></td>

                        <td style="padding-bottom: 10px;">
                        <input class="form-group form-control" type="text" name="app_id" style="background: transparent; border:none; border-bottom: 1px solid black;" value="<?php if(isset($_SESSION['id'])){echo $_SESSION['id']; } ?>"></td>
                        </tr>

                        <tr>
                        <td style="padding-bottom: 10px;"><h4 style="font-weight: solid; font-size: 20px; ">Name:</h4></td>

                        <td style="padding-bottom: 10px;">
                        <input class="form-control form-group" type="text" name="name1" style="background: transparent; border:none; border-bottom: 1px solid black;" value="<?php if(isset($_SESSION['name'])){echo $_SESSION['name']; } ?>"></td>
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
                            <td></td>
                        <td style="padding-bottom: 10px;">
                        
                            <button type="submit" name="submit" class="form-group" style="color: black;">Submit</button>
                            <button type="submit" name="reset" class="form-group" style="color: black;">Clear</button>
                        
                        </td>
                        </tr>
                        </table>
                        <br><br><br>
                         </form>
                    <br><br>




                        <table align="center" id="application">
                        <tr>
                        <th>NO</th>
                        <th>Timestamp</th>
                        <th>Application id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Branch</th>
                        <th>Sem</th>
                        
                        <th>View fees reciept</th>
                        <th>Action</th>
                        <th>Room No.</th>
                        <th>Enter remarks & Reject</th>

                        </tr>

                        <?php  
                        error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
                        
                        $room_no = 0;
                        $id = $_POST['id'];
                        $branch = $_POST['branch_room'];
                        $sem = $_POST['room_sem'];
                        //echo "branch room".$branch."sem:".$sem;
                        $room_no = $_POST['room_no'];
                        
                        $action2 = $_POST['action2'];


                        /*$q = "select * from admission where id = '$id'";
                        $q_run = mysqli_query($connection1,$q);
                        if($result = mysqli_fetch_array($q_run,MYSQLI_ASSOC)){
                            $name = $result['name'];
                            $branch = $result['branch'];
                            $sem =  $result['sem'];
                            $rank = $result['rank'];
                            
                        }
                        echo $name;*/
                         $left = intval($_POST['left']);
                         $result_left=mysqli_fetch_array(mysqli_query($connection1,"select seat_left from intake where room_no = '$room_no'"));
                         $left=$result_left['seat_left'];
                         
                       //echo "left".$left;   
                       //echo $action2; 
                        if($action2 == "temp_allocated"){

                           $left--;
                        if(mysqli_query($connection1,"update admission set room_no = '$room_no' ,action2 ='temp_allocated' where id = '$id'"))  {//echo "<br>temp allocated block<br>";
                      
                        //echo "room_no:".$room_no;
                        if($left ==2){
                        mysqli_query($connection1,"update intake set seat_left = '$left',branch_1='$branch',sem_1='$sem' where room_no = '$room_no'"); //"temp allocated updated";  
                    }
                       if($left == 1){
                        mysqli_query($connection1,"update intake set seat_left = '$left',branch_3='$branch',sem_3='$sem' where room_no = '$room_no'"); //"temp allocated updated";  
                    }
                       if($left == 0){
                        mysqli_query($connection1,"update intake set seat_left = '$left',branch_5='$branch',sem_5='$sem' where room_no = '$room_no'"); //"temp allocated updated";  

                         }

                         }
                         

                    
                     }

                        else if($action2 == "deallocated"){
                            $left=$left+1;
                            //echo "left deallocated:".$left;
                            if(mysqli_query($connection1,"update admission set room_no = 0 ,action2 = 'not allocated' where id = '$id'")) //echo "deallocated block"; 

                           if( mysqli_query($connection1,"update intake set seat_left = '$left' where room_no = '$room_no'")) echo "intake updated";


                            if($left==1){
                                //echo "left:".$left."room_no".$room_no;
                                mysqli_query($connection1,"update intake set seat_left = '$left',branch_5 = NULL,sem_5 = NULL where room_no = '$room_no'"); //echo "deallocated updated";
                            }
                             if($left==2){
                                //echo "left:".$left."room_no".$room_no;
                                mysqli_query($connection1,"update intake set seat_left = '$left',branch_3 = NULL,sem_3 = NULL where room_no = '$room_no'"); //echo "deallocated updated";
                            }
                             if($left==3){
                                //echo "left:".$left."room_no".$room_no;
                                mysqli_query($connection1,"update intake set seat_left = '$left',branch_1 = NULL,sem_1=NULL where room_no = '$room_no'"); //echo "deallocated updated";
                            }
                            $er = mysqli_error($connection1);
                            echo $er;
                        }

                        else if($action2 == "rejected"){
                            $remarks = $_POST['remarks'];
                            mysqli_query($connection1,"update admission set room_no = 0 ,action2 = 'rejected',remarks = '$remarks' where id = '$id'"); //echo "runnnnnnnn";
                        }  

                        else if($action2 = "finally_allocated"){
                            if(mysqli_query($connection1,"update admission set action2 = 'finally_allocated' where id = '$id'"))
                            if($left-- >0){
                               mysqli_query($connection1,"update intake set seat_left = '$left' where room_no = '$room_no'"); //echo "finally allocated updated";  
                           }
                        }  
                        
                        $no=0;
                        

                        $id1  = $_POST['app_id'];
                        $name1 = $_POST['name1'];
                        $branch1 = $_POST['branch1'];
                        $sem1 =$_POST['sem1'];
                        $rank1 = $_POST['rank1'];

                        if($sem1 != "" && $branch1 != ""){
                             $select_query = "select * from admission where sem = '$sem1' and branch  = '$branch1' and action='1' and fees='1' and (action2='temp_allocated' or action2='not allocated') ";
                        }

                        else if ($id1 != "" || $name1 != "" || $branch1 != "" || $sem1 != "" || $rank1 != "") {
                            $select_query = "select * from admission where (id = '$id1' or name = '$name1' or branch  = '$branch1' or sem = '$sem1' or rank  = '$rank1') and action='1' and fees='1' and (action2='temp_allocated' or action2='not allocated') ";
                            # code...
                        }
                        else{
                            $select_query = "select * from admission where action='1' and fees='1' and (action2='temp_allocated' or action2='not allocated') ";
                        }

                        
                        //mysqli_query($dbconnection1,"update admission set remarks='' where action='1'");

                        $select_query_run= mysqli_query($connection1,$select_query);
                        
                        while ($result = mysqli_fetch_array($select_query_run,MYSQLI_ASSOC)){
                            # code...
                        
                        ?>
                        <tr>
                        	<td><?php echo ++$no; ?></td>
                            <td><?php echo $result['timestamp']?></td>
                            <td><?php echo $result['id']; ?></td>
                            <td><?php echo $result['name']; ?></td>
                            <td><?php echo $result['email_id']; ?></td>
                            <td><?php echo $result['branch']; ?></td>
                            <td><?php echo $result['sem']; ?></td>
                           
                            
                            <td><form method="post" action="hostel_fees_reciept.php" target="_blank"><button type="submit" value="">Click here</button><input type="hidden" name="id" value="<?php echo $result['id']; ?>"></form></td>
                            <td>
                                <script >
                                   function deallocated(){
                                        alert("First deallocate that room!");
                                    }
                                    function lock(){
                                        alert("fisrt allocate room");
                                    }
                                    function outofdate(){
                                        alert("You can't allocate room please refer rounds shedule and allocate room in proper dates");
                                    }
                                </script>
                                
                                <?php 


            if($detail=mysqli_fetch_array(mysqli_query($connection1,"select * from rounds order by round desc"),MYSQLI_ASSOC)){
                //echo "runn";
            $round=$detail['round'];
            $sdate_application=$detail['sdate_application'];
            $edate_application=$detail['edate_application'];
            $sdate_fees=$detail['sdate_fees'];
            $edate_fees=$detail['edate_fees'];
            $edate_round=$detail['edate_round'];
            $decription=$detail['decription'];

                                if($result['room_no'] > 0 ){ ?>

                                 <button type="" onclick="deallocated()" style="opacity: .5;" >Allocate</button> 
                                 <?php }
                                 else if (!(date("Y-m-d")>$edate_fees and date("Y-m-d")<=$edate_round)) {
                                     echo "<button type='' onclick='outofdate()'' >Allocate</button> ";
                                     } 
                                 else {
                                  ?>  
                                  <form action="roomselection_admin.php" method="post">
                                 <button type="submit">Allocate</button> <?php } }?>
                                 <input type="hidden" name="id" value="<?php echo $result['id'];?>"> 
                                 <input type="hidden" name="branch" value="<?php echo $result['branch']; ?>"> 
                                 <input type="hidden" name="sem" value="<?php echo $result['sem']; ?>">
                                 
                                </form>

                                <?php if($result['room_no'] == 0){ ?>
                                <button type="" onclick="lock()" style="opacity: .5; " >Deallocate</button><?php } else{  ?>   
                                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                                <button style="color: white;">Deallocate</button><?php } ?>

                                 <input type="hidden" name="id" value="<?php echo $result['id'];?>">
                                 <input type="hidden" name="action2" value= <?php echo "deallocated"; ?>> 
                                 <input type="hidden" name="room_no" value="<?php echo $result['room_no']; ?>"> 
                                  <input type="hidden" name="sem" value="<?php echo $result['sem']; ?>"> 
                                 
                                </form>
                                <?php if($result['room_no'] == 0){ ?>
                                <button type="" onclick="lock()" style="background-color: blue; color: white; opacity: .5; " >LOCK</button><?php } else{  ?>   
                                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                                <button style="background-color: blue; color: white;">LOCK</button><?php } ?>
                                <input type="hidden" name="id" value="<?php echo $result['id'];?>"> 
                                <input type="hidden" name="action" value="finally_allocated">
                                <input type="hidden" name="room_no" value="<?php echo $result['room_no']; ?>">

                            </form>
                            </td>
                                
                            <td><?php echo $result['room_no']; ?></td> 
                       
                            <td>
                                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                                <input type="text" name="remarks" style="background: transparent;border: none; border-bottom: 2px solid; margin-bottom: 4px;width: 100px;">
                                <button style="background-color: red; color: white;">Reject</button>
                                <input type="hidden" name="id" value="<?php echo $result['id'];?>"> 
                                <input type="hidden" name="action2" value="rejected">
                                </form></td>   
                        </tr>
                        <?php } ?>

                    </table>
                
            </div>
            </div>
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
    <script>
        if(window.history.replaceState ){
            window.history.replaceState(null,null,window.location.href);
        }

    </script>

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