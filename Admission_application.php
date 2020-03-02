<?php session_start(); ?>
<?php include 'dbconnection1.php'; ?>
<!DOCTYPE html>
<html lang="en">
<!-- /*Admission page*/ -->
    
<!-- Mirrored from designarc.biz/demos/hilltown/theme/room.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2019 17:36:39 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
           <link rel="icon" href="img/logo.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Hostel Management</title>

        <script src="jquery-3.4.1.min.js"></script>
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

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]--><
        <!-- for admission form-->
        <meta name="keywords" content="Education Admission Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
         />

        <!--start for date picker--> 
        
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
        <link rel="stylesheet" href="css/font-awesome.css">
        <!-- web font -->
    <link href="http://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <!-- //web font -->
    <!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
        <!--end for date picker--> 
    </head>
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


.register-form {
    margin: 0 auto;
    width: 50%;
    -webkit-box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.75);
    box-shadow: 0px 0px 7px 2px rgba(14, 14, 14, 0.14);
    padding: 40px;
    background: rgba(251, 245, 245, 0.13);
}

.register-form input[type="text"], .register-form input[type="email"], select.category2 {
    font-size: 15px;
    color: black;
    border: 0;
    width: 96%;
    letter-spacing: 1px;
    background: transparent;
    outline: none;
    font-family: 'Open Sans', sans-serif;
}
.styled-input {
    border-bottom: 1px solid black;
    background: #E3E4FA  ;
    margin-bottom: 18px;
    padding: 14px;
}
.styled-input-2 {
    background: #E3E4FA  ;
    padding: 14px;
}
select.category2 {
    width:96%;
}
.styled-input select option{
    color: #000;
}
label.header {
    color: #f43434;
    font-size: 18px;
    margin: 9px 0px 15px;
    letter-spacing: 1px;
    display: inline-block;
}
.styled-input span {
    color: black;
    padding-right: 8px;
}
.register-form input[type="submit"] {
    outline: none;
    color: black;
    background: #f43434;
    color: black;
    border: none;
    padding: 11px 40px;
    margin: 1em 0 0 0;
    cursor: pointer;
    font-size: 17px;
    letter-spacing: 1px;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
    transition: 0.5s all;
}

.register-form input[type="submit"]:hover {
    background: #000;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
    transition: 0.5s all;
}


/*--placeholder-color--*/

.register-form input::-webkit-input-placeholder {
    color: black;
}

.register-form input:-moz-placeholder {
    /* Firefox 18- */
    color: black;
}

.register-form input::-moz-placeholder {
    /* Firefox 19+ */
    color: black;
}

.register-form input:-ms-input-placeholder {
    color: black;
}


/*--//placeholder-color--*/
/*-- copyright --*/
.w3copyright-agile{
    margin: 2em 0;
    text-align: center;
}
.w3copyright-agile h2 {
    font-size: 1em;
    color: black;
    letter-spacing: 2px;
}
.w3copyright-agile h2 a{
    color: #f43640; 
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
    transition: 0.5s all;
}
.w3copyright-agile h2 a:hover{
    color: #000;    
}
/*-- //copyright --*/

/*--responsive--*/
@media(max-width: 1600px){
    .register-form {
        width: 85%;
    }    
}
@media(max-width: 1440px){
    .register-form {
        width: 80%;
    }    
}
@media(max-width: 1366px){
    .register-form {
        width: 85%;
    }
}
@media(max-width: 1280px){
    .register-form {
        width: 90%;
    }
}
@media(max-width: 1080px){
    h1 {
        font-size: 48px;
    }
    .register-form {
        width: 80%;
    }
}
@media(max-width: 1050px){
    .register-form {
        width: 71%;
    }
}
@media(max-width: 1024px){
    .styled-input span {
        padding-right: 7px;
    }
}
@media(max-width: 991px){
    .register-form {
        width: 73%;
    }
}
@media(max-width: 900px){
    .register-form {
        width: 80%;
    }
}
@media(max-width: 800px){
    h1 {
        font-size: 43px;
        margin: 23px 0;
    }
    .styled-input span {
        padding-right: 5px;
    }
    .register-form input[type="text"], .register-form input[type="email"], select.category2 {
        width: 95%;
    }
    .w3copyright-agile h2 {
        font-size: .9em;
    }
}
@media(max-width: 736px){
    h1 {
        font-size: 41px;
        margin: 18px 0;
    }
}
@media(max-width: 667px){
    h1 {
        font-size: 38px;
        letter-spacing: 3px;
    }
    h1 img {
        width: 12%;
    }
    .register-form input[type="text"], .register-form input[type="email"], select.category2 {
        width: 94%;
        font-size: 14px;
    }
    .register-form input[type="submit"] {
        font-size: 16px;
    }
    .w3copyright-agile h2 {
        line-height: 1.9;
    }
    .w3copyright-agile {
        margin: 2em 0 1.5em;
    }
}
@media(max-width: 640px){
    .register-form {
        padding: 30px;
    }
    h1 {
        font-size: 34px;
        margin: 16px 0;
    }
}
@media(max-width: 600px){

}
@media(max-width: 568px){
    .styled-input span {
        padding-right: 4px;
    }
    .w3copyright-agile h2 {
        font-size: .85em;
        width: 98%;
        margin: 0 auto;
    }
}
@media(max-width: 480px){
    h1 img {
        width: 14%;
    }
    .register-form input[type="text"], .register-form input[type="email"], select.category2 {
        width: 92%;
        font-size: 13px;
    }
    .register-form input[type="submit"] {
        font-size: 15px;
        padding: 11px 32px;
    }
    .w3copyright-agile h2 {
        font-size: .8em;
    }
}
@media(max-width: 440px){
    h1 {
        font-size: 31px;
    }
    .styled-input {
        padding: 12px;
    }
}
@media(max-width: 414px){
    h1 {
        font-size: 29px;
        letter-spacing: 2px;
        margin: 14px 0;
    }
    .register-form input[type="text"], .register-form input[type="email"], select.category2 {
        width: 91%;
    }
    .w3copyright-agile {
        margin: 1.5em 0 1em;
    }
}
@media(max-width: 375px){
    h1 {
        font-size: 28px;
        letter-spacing: 1px;
    }
    h1 img {
        width: 15%;
    }
    .register-form {
        padding: 20px;
        width: 82%;
    }
    .w3copyright-agile h2 {
        width: 97%;
    }
}
@media(max-width: 320px){
    h1 {
        font-size: 24px;
    }
    h1 img {
        width: 17%;
    }
    .styled-input {
        padding: 10px;
        margin-bottom: 11px;
    }
    .register-form input[type="text"], .register-form input[type="email"], select.category2 {
        width: 89%;
        font-size: 12px;
    }
    label.header {
        font-size: 16px;
        margin: 0px 0px 12px;
    }
    .register-form input[type="submit"] {
        font-size: 14px;
        padding: 11px 28px;
    }
    .w3copyright-agile h2 {
        letter-spacing: 1px;
    }
}
table{border-collapse:collapse;border-spacing:0;}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
  border:none;
}


    </style>
    <body onload="disableSubmit()">

        <!--================Header Area =================-->
        <?php include 'header.php'; ?>
        <!--================Header Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_content">
                    <h3>Application</h3>
                    <ul>
                        <li class="active"><a href="home.php">Home</a></li>
                        <li><a href="Admission_application.php">Admission</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Explor Admission form =================-->
         <section class="explor_room_area explore_room_list">
            <div class="container">
                <script src='js_admission/jquery.min.js'></script><script src="js_admission/monetization.js" type="text/javascript"></script>
<script>
(function(){
    if(typeof _bsa !== 'undefined' && _bsa) {
        // format, zoneKey, segment:value, options
        _bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
    }
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
    // format, zoneKey, segment:value, options
    _bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
    if(typeof _bsa !== 'undefined' && _bsa) {
        // format, zoneKey, segment:value, options
        _bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
    }
})();
</script>
<!--<script>(function(v,d,o,ai){ai=d.createElement("script");ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, "//a.vdo.ai/core/w3layouts_V2/vdo.ai.js?vdo=34");</script>-->
<div id="codefund"><!-- fallback content --></div>
<script src="js_admission/funder.js" async="async"></script>
    
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src='https://www.googletagmanager.com/gtag/js?id=UA-149859901-1'></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149859901-1');
</script>

<script>
     window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
     ga('create', 'UA-149859901-1', 'demo.w3layouts.com');
     ga('require', 'eventTracker');
     ga('require', 'outboundLinkTracker');
     ga('require', 'urlChangeTracker');
     ga('send', 'pageview');
   </script>
<script async src='js_admission/autotrack.js'></script>

<meta name="robots" content="noindex">
<body><link rel="stylesheet" href="images/demobar_w3_4thDec2019.css">
    <!-- Demo bar start -->
<!--   <div id="w3lDemoBar" class="w3l-demo-bar">
  <a href="https://w3layouts.com/?p=29817" ga-on="click" ga-event-category="Education Admission Form Template" ga-event-action="view" ga-event-label="Education Admission Form - view">
    <span class="w3l-icon -back">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path opacity=".87" fill="none" d="M0 0h24v24H0V0z"/><path d="M16.62 2.99c-.49-.49-1.28-.49-1.77 0L6.54 11.3c-.39.39-.39 1.02 0 1.41l8.31 8.31c.49.49 1.28.49 1.77 0s.49-1.28 0-1.77L9.38 12l7.25-7.25c.48-.48.48-1.28-.01-1.76z"/></svg>
    </span>
    <span class="w3l-text">Back</span>
  </a>
  <a href="https://w3layouts.com/" class="w3l-logo">W3layouts</a>
  <div class="w3l-template-options">
    <a href="https://my.w3layouts.com/DownloadTemplate/29817"
      class="w3l-download" ga-on="click" ga-event-category="Education Admission Form Template" ga-event-action="download-options" ga-event-label="Education Admission Form - Download options" title="Free download requires Backlink">
      <span class="w3l-icon -download">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 12v7H5v-7H3v7c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-7h-2zm-6 .67l2.59-2.58L17 11.5l-5 5-5-5 1.41-1.41L11 12.67V3h2z"/><path fill="none" d="M0 0h24v24H0z"/></svg>
      </span>
      <span class="w3l-text">Download</span>
    </a>
    <a href="https://my.w3layouts.com/DownloadTemplate/29817/Buy"
      class="w3l-buy" ga-on="click" ga-event-category="Education Admission Form Template" ga-event-action="Buy Now" ga-event-label="Education Admission Form - Buy" title="Remove Backlink from template">
      <span class="w3l-icon -buy">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
      </span>
      <span class="w3l-text">Buy Now</span>
    </a>
  </div>
</div> -->
 <script >
            function mail_alert(){
                alert("You have already applied for hostel.(mail id already exist)");
            }
        </script>
               
<?php 
error_reporting(E_ALL ^ E_NOTICE );
$id = $_POST['id'];
                        $name = $_POST['name'];
                        $branch = $_POST['branch'];
                        $sem =$_POST['sem'];
                        $cpi=$_POST['cpi1'];
                        $acpc=$_POST['acpc1'];

                        $dob = $_POST['dob'];
                        $category = $_POST['category'];
                        $email = $_POST['email'];
                        $phone_number = $_POST['phone_number'];
                        $area = $_POST['area'];
                        $city = $_POST['city'];
                        $district = $_POST['district'];
                        $zipcode = $_POST['zipcode'];
                        //$gender = $_POST['gender'];
                        $handicap=$_POST['handicap'];
                        $ses_email = $_SESSION["email"];
                        
                        if(mysqli_num_rows(mysqli_query($connection1,"select * from admission where email_id = '$email' and (action = '0' or action='1')"))>0){ 
                            //echo "Mail id already exist";    
                            echo '<script type="text/javascript"> mail_alert(); </script>';
                            /*header('Admission_application.php');*/
                        }
                        
                        else    {

                                if($_POST['acpc']!=NULL || $_POST['acpc']!=" "){
                            $insert_query = "insert into admission (email_id,id,name,branch,sem,acpc,action,action2,fees,remarks,room_no) values ('$email','$id','$name','$branch','$sem','$acpc','0','not allocated','0','','0')";
                            $insert_query_run = mysqli_query($connection1,$insert_query);
                            //echo mysqli_error($connection1);
                            $insert_query2 = "insert into admission_form(id,dob,category,email,phone_number,area,city,district,zipcode,handicap) values ('$id','$dob','$category','$email','$phone_number','$area','$city','$district','$zipcode','$handicap')";
                            echo $handicap;
                            $insert_query_run2 = mysqli_query($connection1,$insert_query2); }
    
                             if($_POST['cpi']!=NULL || $_POST['cpi']!=" "){
                        $insert_query = "insert into admission (email_id,id,name,branch,sem,cpi,action,action2,fees,remarks,room_no) values ('$email','$id','$name','$branch','$sem','$cpi','0','not allocated','0','','0')";
                        $insert_query_run = mysqli_query($connection1,$insert_query);

                        $insert_query2 = "insert into admission_form(id,dob,category,email,phone_number,area,city,district,zipcode,handicap) values ('$id','$dob','$category','$email','$phone_number','$area','$city','$district','$zipcode','$handicap')";   
                        $insert_query_run2 = mysqli_query($connection1,$insert_query2); }

                       

}
        
         if($handi = mysqli_fetch_array(mysqli_query($connection1,"select handicap from admission_form where email='$ses_email'"))){$_SESSION["handicap"]= $handi['handicap'];}?>


    <!-- main -->
    <div class="main-agileits">
        <!-- <h1 style=" font-size: 53px;
    text-align: center;
    color: rgb(255,187,6);
    margin: 30px 0;
    text-shadow: -2px 5px 20px rgb(10, 10, 10);
    letter-spacing: 4px;
    font-style: italic;
    font-family: 'Acme', sans-serif;">Admission Form
            <img src="images/logo.png" alt="">
        </h1> -->
        <div class="main_big_title">
                    <h2>Admission&nbsp<span>Form</span></h2>
                </div>
        <!---728x90--->

        <div class="register-form">
            <?php
           
            $detail=mysqli_fetch_array(mysqli_query($connection1,"select * from rounds order by round desc"),MYSQLI_ASSOC);
                 $check=1;
                //echo "runn";
            $round=$detail['round'];
            $sdate_application=$detail['sdate_application'];
            $edate_application=$detail['edate_application'];
            $sdate_fees=$detail['sdate_fees'];
            $edate_fees=$detail['edate_fees'];
            $edate_round=$detail['edate_round'];
            $decription=$detail['decription'];
       if (!(date("Y-m-d")>=$sdate_application and date("Y-m-d")<=$edate_application)) {
           echo "<h4 style='color:red;'>*DATE TO FILL APPLICATION FROM FOR ROUND:".$round." IS EXPIRED<br></h4>";
           $check=0;
       }
   
   //echo "check=".$check;
        ?>
            <form method="post" action="Admission_application.php">
                <div class="fields-grid" >
                	<label class="header" style="color: black;">Application ID</label>
                    <div class="styled-input" >

                    <?php 
                        $select_query = 'select id from admission_form order by timestamp desc';
                        $select_query_run= mysqli_query($connection1,$select_query);
                        $result = mysqli_fetch_array($select_query_run);
                        
                        if(!($result[0]))
                        $id='VGECHOSTEL1';
                        else{
                        	$id = intval(substr($result[0],10));
                        	$id = "VGECHOSTEL".($id+1);
                        }                    
                    ?>	
                        
                        <!-- <span class="fa fa-user" aria-hidden="true" style="float: left; font-size: 15px;"></span> -->

                        <input type="text" value="<?php echo($id); ?>" name="id" required="" readonly="" style=""></div>
                    <label class="header" style="color: black;">Personal Details</label>
                    <div class="styled-input">
                        <span class="fa fa-envelope-o" aria-hidden="true"></span>
                        <input type="email" placeholder="E-mail" name="email" id = "email" value = "<?php echo $_SESSION["email"]; ?>"required="" readonly="">
                    </div>
                    <div class="styled-input" >
                        
                        <span class="fa fa-user" aria-hidden="true" style="float: left; font-size: 15px;"></span>
                        <input type="text" placeholder="Full Name" name="name" required="" >

                    </div>
                    <div class="styled-input">
                        <div class="agileits_w3layouts_grid">
                             <span class="fa fa-user" aria-hidden="true" style="float: left; font-size: 15px; "></span>
                            <select class="category2" name="category" required="">
                                <option value="">Category(quota)</option>
                                <option value="General">General</option>
                                <option value="OBC">OBC</option>
                                <option value="SC">SC</option>
                                <option value="ST">ST</option>
                               

                            </select>
                        </div>
                    </div>
                     <div class="styled-input">
                        <div class="agileits_w3layouts_grid">
                             <span class="fa fa-user" aria-hidden="true" style="float: left; font-size: 15px; "></span>
                            <select class="category2" name="handicap" required="">
                                <option value="">Handicape</option>
                                <option value="yes">YES</option>
                                <option value="no">NO</option>
                                
                               

                            </select>
                        </div>
                    </div>
                    
                    <div class="styled-input" >
                        <span style="width: 100%;">DOB:</span><br>
                        <span class="fa fa-calendar" aria-hidden="true"></span>
                        <input id="datepicker" placeholder="Birth Date" name="dob" type="date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"

                            required="" style="
                            font-size: 15px;
    color: black;
    border: 0;
    width: 96%;
    letter-spacing: 1px;
    background: transparent;
    outline: none;
    font-family: 'Open Sans', sans-serif;
    ">
                    </div>
                    <!-- <script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script> -->
                    
                    

                   <!-- <div class="styled-input agile-styled-input-top">
                        <span class="fa fa-venus" aria-hidden="true"></span>
                        <select class="category2" required="" name="gender">
                            <option value="">Gender</option>
                            <option value="Female">Female</option>
                            <option value="Male">Male</option>
                            
                        </select>
                    </div>-->
                    
                    <div class="styled-input">
                        <span class="fa fa-phone" aria-hidden="true"></span>
                        <input type="number" placeholder="Contact Number" name="phone_number" required="" style=" font-size: 15px;
    color: black;
    border: 0;
    width: 96%;
    letter-spacing: 1px;
    background: transparent;
    outline: none;
    font-family: 'Open Sans', sans-serif;
    ">
                    </div>
                    <div class="styled-input-2">
                        <label class="header" style="color: black;">Your Address</label>
                        <div class="styled-input">
                            <input type="text" name="area" placeholder="Society/Area" title="Please enter your Address" required="">
                        </div>
                        <div class="styled-input">
                            <input type="text" name="city" placeholder="City" title="Please enter your Line" required="">
                        </div>
                        <div class="styled-input">
                            <input type="text" name="district" placeholder="District" title="Please enter your City" required="">
                        </div>
                        <div class="styled-input">
                            <input type="number" name="zipcode" placeholder="Zip Code" title="Please enter your Zip code" required="" style="font-size: 15px;
    color: black;
    border: 0;
    width: 96%;
    letter-spacing: 1px;
    background: transparent;
    outline: none;
    font-family: 'Open Sans', sans-serif;">
                        </div>
                    </div>  
                     <label class="header" style="color: black;">Educational Details</label>

                    <div class="styled-input agile-styled-input-top">
                        <span class="fa fa-book" aria-hidden="true"></span>
                        <select class="category2" name="branch" required="">
                            <option value="">Select Branch</option>
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
                    </div>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                    <div class="styled-input">
                        <div class="agileits_w3layouts_grid">
                            <span class="fa fa-clock-o" aria-hidden="true"></span>
                            <select class="category2" name="sem" id="sem" required="" onchange="showfield()">
                                <option value="">current sem</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>     
                            </select>
                        </div>
                    </div>
                    <div class="styled-input container1" id="acpc" style="display: none;color: black;">
                            <input type="number" class="add_input" name="acpc1" placeholder="ACPC rank" title="Please enter your ACPC rank" style="font-size: 15px;
    color: black;
    border: 0;
    width: 96%;
    letter-spacing: 1px;
    background: transparent;
    outline: none;
    font-family: 'Open Sans', sans-serif;">
                    
                    <div class="clear"> </div>
                </div>
                <div class="styled-input container1" id="cpi" style="display: none;color: black;">
                            <input type="number" step="any" class="add_input" name="cpi1" placeholder="CPI" title="Please enter your CPI"  style="font-size: 15px;
    color: black;
    border: 0;
    width: 96%;
    letter-spacing: 1px;
    background: transparent;
    outline: none;
    font-family: 'Open Sans', sans-serif;">
                    
                    <div class="clear"> </div>
                </div>
            <script type="text/javascript">
                    function showfield()
                    {
                        var value=$('#sem').val();
                        if(value==1)
                        {
                            $('#acpc').show();
                            $('#cpi').hide();
                        }
                        else
                        {
                            $('#cpi').show();
                            $('#acpc').hide();
                        }
                    }
            </script>
                <script>
 function disableSubmit() {
  document.getElementById("submit").disabled = true;
 }

  function activateButton(element) {

      if(element.checked) {
        document.getElementById("submit").disabled = false;
       }
       else  {
        document.getElementById("submit").disabled = true;
      }

  }
</script>

 <input type="checkbox" name="terms" id="terms" onchange="activateButton(this)">  I Agree Terms & Coditions
<br><br>
      
       <?php

       if ($check==0) {
           /*echo "<h4>DATE TO FILL APPLICATION FROM FOR ROUND:1 IS EXPIRED</h4>";*/
       }
       else{
        ?> 
                <input type="submit" name="submit" value="submit" style="background-color: #FFBB06;" id="submit">
           
            <?php
       }
        ?>
        </div>
         </form>
    </div>
    <!-- //main -->
    <!---728x90--->
    <!-- copyright -->
   
    <!-- //copyright -->
    <!---728x90--->

    <!-- js -->
    <script src="js/jquery-2.1.4.min.js"></script>

    <!-- Calendar -->
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <script src="js/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
        });
    </script>
    <!-- //Calendar -->
            </div></section>
             
          
        <!--================End Eadmission form=================-->
        
        <!--================Footer Area =================-->
        <?php include 'footer_student.php'; ?>
        
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

<!-- Mirrored from designarc.biz/demos/hilltown/theme/room.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2019 17:36:39 GMT -->
</html>