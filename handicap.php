<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Handicap</title>
</head>
<body>

<?php
include 'dbconnection1.php';

$id = $_POST['id'];
$select_photo = "select handicap from documents where id = '$id'";
if($select_photo_run = mysqli_query($connection1,$select_photo))
if($result = mysqli_fetch_array($select_photo_run,MYSQLI_ASSOC)){
	?>
	<div>
		<h3>Handicap</h3>
	
	<?php
	echo "<img src='documents/".$result['handicap']."' >";
	?></div> <?php
}
else{
	echo "This document is not necessary";
}
?>
</body>
</html>
