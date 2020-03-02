<?php include 'dbconnection1.php';
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING); 
 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="img/logo.png" type="image/x-icon" />
	<style >
		

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
.card {
  box-shadow: 0 8px 8px 0 rgba(0,0,0,0.5);
  transition: 0.6s;
  width: 600px;
  height: 900px;
  border-radius: 8px;
left: 0;
top: 0;
bottom: 0;
right: 0;
margin:auto;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(43, 105, 100, 1)
}

#profiledisplay
{
   display:block;
   width: 30%;
   height: 40%;
   border-color: 10px solid black;
   border-radius: 50%;
   margin-left: auto;
   margin-right: auto;

}

.form-div
{
	margin-top: 100px;
	border: 1px solid black;
	padding-top: 15px;
}
input[type=text], select, textarea {
  width: 500px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=email], select, textarea {
  width: 500px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=tel], select, textarea {
  width: 500px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}


.fullname
{
   padding-left: 45px;
   padding-right: 20px;	
}

.image
{
	margin-left: 230px;
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
  border-radius: 10px;
}

 .button:hover{
  background-color: #039287;
  color: white;
}

.left
{
	margin-left:  10px;
}

.right
{
	margin-left:  100px;
}




	</style>
</head>
<body onload="">

<?php include 'header.php' ?>
	<section class="banner_area">
            <div class="container">
                <div class="banner_inner_content">
                    <h3>Profile</h3>
                    <ul>
                        <li class="active"><a href="home.php">Home</a></li>
                        <li><a href="#">Profile</a></li>
                    </ul>
                </div>
            </div>
        </section>

 <?php        
                   $e=$_SESSION['email'];
                  $query="select * from usersignup where email_id='$e'";
                  $run=mysqli_query($connection1,$query); 
                  $result=mysqli_fetch_array($run,MYSQLI_ASSOC);

                  if($result['profile_img']!=NULL){
                  }
            ?>
  
  <div class="container-fluid">
    <div class="row" style="margin-top: 50px; margin-bottom: 50px;">
    <div class="col-4 offset-md-4 from div">
        <div class="card">
          <form method="post" enctype="multipart/form-data">
    <div class="form-group">
            <img src="<?php if(isset($result['profile_img'])){ echo 'uploads/' . $result['profile_img']; }else{ echo "img/placeholder.png"; } ?>" onclick="triggerClick()" id="profiledisplay" style="border: 2px solid black;"><br>
            <!--<label for="profile image" style="padding-left: 45px;color: black;">Profile Image</label>-->
    <input type="file" name="profileimage" onchange="displayimage(this)" id="profileimage" class="from-control" style="display: none;">
            <button type="submit" name="save" class="button" style="color:white;width:170px;height: 50px;margin-left: 35%;">Change image</button>
    </div>
        </form>
        <?php
       
  if (isset($_POST['save'])) {
    // for the database
    $profileimageName = time() . '-' . $_FILES["profileimage"]["name"];
    // For image upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($profileimageName);
    //echo "$target_file";
   /* // VALIDATION
    // validate image size. Size is calculated in Bytes
    if($_FILES['profileimage']['size'] > 200000) {
      $msg = "Image size should not be greated than 200Kb";
      $msg_class = "alert-danger";
    }
    // check if file exists
    if(file_exists($target_file)) {
      $msg = "File already exists";
      $msg_class = "alert-danger";
    }*/
    // Upload image only if no errors
   // if (empty($error)) {
      if(move_uploaded_file($_FILES["profileimage"]["tmp_name"], $target_file)) {
        $sql = "update usersignup set profile_img='$profileimageName' where email_id='$e'";
        if(mysqli_query($connection1, $sql)){
          $msg = "Image uploaded and saved in the Database";
          $msg_class = "alert-success";
        } else {
          $msg = "There was an error in the database";
          $msg_class = "alert-danger";
        }
      } /*else {
        $error = "There was an erro uploading the file";
        $msg = "alert-danger";
      }*/
    }

  //}
?>
<?php 
                if(isset($_POST['submit'])){

                $branch=$_POST['branch'];
                $sem=$_POST['semester'];
                $category=$_POST['category'];
                $gender=$_POST['Gender'];
                echo $e;
                echo $branch;  
              $query="update usersignup set branch='$branch',sem='$sem',category='$category' where email_id='$e'";
              $run=mysqli_query($connection1,$query);
              if($run){echo "runn";}
              else{
               $eroor=mysqli_error($connection1);
               echo $eroor;
              } 
            }?>
 
<?php
$query="select * from usersignup where email_id='$e'";
                  $run=mysqli_query($connection1,$query); 
                  $result=mysqli_fetch_array($run,MYSQLI_ASSOC);
                  echo $result['branch'];
 ?>
           
           <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="fullname" style="color: black;">
				    <label for="fname">Full Name</label>
				    <br>
				    <input type="text" id="fname" name="fullname" placeholder="<?php echo $result['fullname']; ?>" value="<?php echo $result['fullname']; ?>" readonly>
                    <br>
				        <label for="email">Email id</label>
				        <br>
                    <input type="email" id="email" name="email" placeholder="<?php echo $result['email_id'] ?>" value="<?php echo $result['email_id'] ?>" readonly>
               	        <br>
             
				        <label for="Phone-number">Phone-number</label>
				        <br>
                    <input type="tel"  name="lastname" placeholder="<?php echo $result['phonenumber'] ?>" pattern="[0-9]{10}" maxlength="10" value="<?php echo $result['phonenumber'] ?>" readonly>
              

                   <br>
                	 <label >Branch</label>
                	 <br>
              
                
						    <select id="branch" name="branch" >
                  <option value=""><?php if($result['branch']==NULL){echo "Select branch";}else{echo $result['branch'];} ?></option>
						      <option value="Computer">Computer</option>
						      <option value="EC">EC</option>
						      <option value="IT">IT</option>
						    </select><br>
               
             			
                
                	 <label for="semester">Semester</label>
                	 <br>
						    <select id="semester" name="semester">
                  <option value=""><?php if($result['sem']==NULL){echo "Select semester";}else{echo $result['sem'];} ?></option>
						      <option value="1">1</option>
						      <option value="2">2</option>
						      <option value="3">3</option>
						      <option value="3">4</option>
						      <option value="3">5</option>
						      <option value="3">6</option>
						      <option value="3">7</option>
						      <option value="3">8</option>
						    </select>
            
                 <br>
            
                	 <label for="category">Category</label>
                	 <br>
						    <select id="category" name="category">
                  <option value=""><?php if($result['category']==NULL){echo "Select category";}else{echo $result['category'];} ?></option>
						      <option value="General">General</option>
						      <option value="OBC">OBC</option>
						      <option value="SC">SC</option>
						      <option value="ST">ST</option>
						    </select>
               
               <br>
                 
                	 
    			<div >
            <input type="submit" class="button" name="submit" style="margin-left:38%; margin-top: 15px;"   value="Save">
    			     
    			
    				
    			 </form>
          </div>

          			<?php
              /*if($raw=mysqli_fetch_array(mysqli_query($connection1,"select * from usersignup"),MYSQLI_ASSOC))
                echo $raw['branch'];
               else{
               $eroor=mysqli_error($run);
               echo $eroor;
              }*/
               if(isset($_POST['submit'])){
                  if($_POST['submit'] == "Save"){
                    echo "save";
                  //echo '<script type="text/javascript"> disable(); </script>';
                }
                  else if($_POST['submit'] == "Edit"){
                    //echo '<script type="text/javascript"> enable(); </script>';
                  
                  echo "edit";
                }
              }
          ?>
          
          <script>
            function disable()
            {
              //alert('disable');
                document.getElementById("branch").disabled = true;
                document.getElementById("semester").disabled = true;
                document.getElementById("category").disabled = true;
                document.getElementById("Gender").disabled = true;
            }
            function enable()
            {
              // alert('enable');
                document.getElementById("branch").disabled = false;
                document.getElementById("semester").disabled = false;
                document.getElementById("category").disabled = false;
                document.getElementById("Gender").disabled = false;
            }
          </script>
          
       
    	</div>
    </div>
  </div>
</div>



<?php include 'footer_student_home.php' ?>

<script src="script.js"></script>
  
</body>
</html>









