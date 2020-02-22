 <?php session_start(); 
 include 'dbconnection1.php';?>
 <!--  <script type="text/javascript">

      function formAutoSubmit () {

      var frm = document.getElementById("form");

      frm.submit();

      }

      window.onload = formAutoSubmit;

      </script> -->
    
<?php 

//session_star  <script type="text/javascript">


/*$con =mysqli_connect('localhost','root','');

mysqli_select_db($connection1 ,'HostelManagement');
*///$sub = $_POST['sub'];


  $email_id= $_POST['email_id'];
  //$_SESSION["email_id"]=$email_id;
  $type= $_POST['t'];
  $pass = $_POST['password'];
  

  $s ="SELECT * FROM usersignup WHERE email_id = '$email_id' && password=md5('$pass') && 
        type='$type'";


  $result =mysqli_query($connection1 ,$s);
  if(mysqli_num_rows($result)==0){
    echo "incorrect details";
  }

  else
  {
  while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
   {
    if ($row['email_id']==$email_id && $row['password']==md5($pass) && $row['type'] == 'admin') {
      echo "admin";
      header('location:login_admin.php');
    }
    
    if ($row['email_id']==$email_id && $row['password']==md5($pass) && $row['type']=='user')
     {
     // $_SESSION["email_id"]=$row['email_id'];
      $_SESSION["email"]=$row['email_id'];
      echo "user".$_SESSION["email"];

      header('location:home.php');
      ?> 
       <!-- <form method="post" action="home.php" id="form">
        <input type="hidden" name="email_id" value="<?php echo $email_id ?>">
      </form> -->
      <?php
    

  }
}
}
 
?>