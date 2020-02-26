<?php
/*echo "hello world";*/
/*echo "<br>";*/
$server = 'localhost';
$username = 'root';
$password ='';



$connection1 = mysqli_connect($server,$username,$password,'HostelManagement');



if($connection1){
	//echo "2nd conected!!<br>";
}
else{
	//echo "2nd failed!!";
}
?>
