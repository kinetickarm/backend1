<?php include 'dbconnection1.php';
while($result = mysqli_fetch_array(mysqli_query($connection1,"select * from admission where action2='temp_allocated' or action2='finally_allocated'"),MYSQLI_ASSOC)){
	$id = $result['id'];
	$room_no = $result['room_no'];
	$branch = $result['branch'];
	$sem = $result['sem'];

	if(mysqli_query($connection1,"insert into intake_new(id,room,branch,sem) values ('$id','$room_no','$branch','$sem')")){echo "inserted<br>";}

}
/*for($f=1;$f<4;$f++){

	for ($i=2000+$f*100+1; $i<=2000+$f*100+5 ;$i++) { 
		//echo $i;
		mysqli_query($connection1,"insert into intake(hostel,floor,room_no,seat_left) values('2','$f','$i',3)");
	}
}*/
//mysqli_query("insert into intake(hostel,floor,room_no,seat_left) values('1','','',3)")

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>passport photo</title>
</head>
<body>

<?php
include 'dbconnection1.php';
$id = $_POST['id'];
echo $id;
$select_photo = "select reciept from feereciept where id = '$id'";
if($select_photo_run = mysqli_query($connection1,$select_photo))
if($result = mysqli_fetch_array($select_photo_run,MYSQLI_ASSOC)){
	?>
	<div >
		<h3>Hostel fees reciept</h3>
	
	<?php
	echo "<img style='height: 80%; width: 40%;' src='documents/".$result['reciept']."' >";
	?></div> <?php
}
else{
	echo "receiept is not uploaded";
}
?>
</body>
</html>
