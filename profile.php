
<?php include 'dbconnection1.php';
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
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
  height: 1000px;
  border-radius: 8px;
  
  margin-right: 20px;
  margin: 30px 35%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(43, 105, 100, 1)
}

#profiledisplay
{
   display:block;
   width: 10%;
   height: 10%;
   border-color: 10px solid black;
   border-radius: 50%;
   margin: 10px 10px;

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
<body>

<?php include 'header.php' ?>
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

<div class="card">
  
  <div class="container">
    <div class="row">
    	<div class="col-4 offset-md-4 from div">
    		<form action="" method="POST" class="image">
    			<div class="form-group">
    				<img src="img/placeholder.png" onclick="triggerClick()" id="profiledisplay" >
    				<label for="profile image">Profile Image</label>
    				<input type="file" name="profileimage" onchange="displayimage(this)" id="profileimage" class="from-control" style="display: none;">
    			</div>
              </form>
				<form action="/action_page.php" class="fullname">
				    <label for="fname">Full Name</label>
				    <br>
				    <input type="text" id="fname" name="fullname" placeholder="Enter your name here" disabled="">
                    <br>
				        <label for="email">Email id</label>
				        <br>
                    <input type="email" id="email" name="email" placeholder="Enter Your email here" disabled="" >
               	        <br>
             
				        <label for="Phone-number">Phone-number</label>
				        <br>
                    <input type="tel"  name="lastname" placeholder="Enter Your email here" pattern="[0-9]{10}" maxlength="10" disabled="">
              

                   <br>
                	 <label >Branch</label>
                	 <br>
						    <select id="branch" name="branch">
						      <option value="Computer">Computer</option>
						      <option value="EC">EC</option>
						      <option value="IT">IT</option>
						    </select>
               
             			<br>
                
                	 <label for="semester">Semester</label>
                	 <br>
						    <select id="semester" name="semester">
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
						      <option value="General">General</option>
						      <option value="OBC">OBC</option>
						      <option value="SC">SC</option>
						      <option value="ST">ST</option>
						    </select>
               
               <br>
                 
                	 <label for="Gender">Gender</label>
                	 <br>
						    <select id="Gender" name="Gender">
						      <option value="male">male</option>
						      <option value="female">female</option>
						      <option value="others">others</option>
						    </select>
              
                <br>
    			<div >
    				<button class="button" style="margin-left:0px;margin-top: 15px;" >Save</button>
    			
    			
    				<button class="button" style="margin-left:335px;margin-top: 15px;">Edit</button>
    				<input type="hidden" name="edit" value="edit">
    			</div>

                </form>
    			
          

    	</div>
    </div>
  </div>
</div>




<?php include 'footer_student.php' ?>

<script src="script.js"></script>
</body>
</html>









