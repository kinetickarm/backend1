<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>aadhar card</title>
</head>
<body>

<?php
include 'dbconnection1.php';
$_SESSION['s'] = "ssss";
$id = $_POST['id'];
$select_photo = "select aadhar_card from documents where id = '$id'";
if($select_photo_run = mysqli_query($connection1,$select_photo))
if($result = mysqli_fetch_array($select_photo_run,MYSQLI_ASSOC)){
	?>
	<div>
		<h3>aadhar card</h3>
	
	<?php
	echo "<img src='documents/".$result['aadhar_card']."' >";
	?></div> <?php
}
else{
	echo "photoisnot uploaded";
}
?>
</body>
</html>
