<?php 

session_start();


$con =mysqli_connect('localhost','root','');

mysqli_select_db($con ,'HostelManagement');

$email= $_POST['email_id'];
$name = $_POST['fullname'];
$pass = $_POST['password'];
$pnumber=$_POST['phonenumber'];

$_SESSION['name']=$name;
$_SESSION['pass']=$pass;
$_SESSION['pnumber']=$pnumber;
$_SESSION["Email"] = $email;

$s ="SELECT * FROM usersignup WHERE email_id = '$email'";

$result =mysqli_query($con ,$s);

$num = mysqli_num_rows($result);

if($num == 1)
{
	echo "This email is already taken";
}

else
{
	
	header("location: sendotp.php");
	/*$reg="INSERT INTO usersignup(email_id,fullname,password,phonenumber,type) VALUES ('$email','$name','$pass','$pnumber','user')";
	if(mysqli_query($con ,$reg))
	echo "You have successfully register";
    else
    {
    	echo "error";
    }*/
}
?>