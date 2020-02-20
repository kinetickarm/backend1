<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>feereciept</title>
</head>
<body>

<?php
include 'dbconnection1.php';
echo "sessio".$_SESSION['s'];
$id = $_POST['id'];
$select_photo = "select feereciept from documents where id = '$id'";
if($select_photo_run = mysqli_query($connection1,$select_photo))
if($result = mysqli_fetch_array($select_photo_run,MYSQLI_ASSOC)){
	?>
	<div>
		<h3>feereciept</h3>
	
	<?php
	echo "<img src='documents/".$result['feereciept']."' >";
	?></div> <?php
}
else{
	echo "photo is not uploaded";
}
?>
</body>
</html>
