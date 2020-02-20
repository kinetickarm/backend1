<!DOCTYPE html>
<html>
<head>
	<title>Marksheet</title>
</head>
<body>

<?php
include 'dbconnection1.php';
$id = $_POST['id'];
$select_photo = "select marksheet from documents where id = '$id'";
if($select_photo_run = mysqli_query($connection1,$select_photo))
if($result = mysqli_fetch_array($select_photo_run,MYSQLI_ASSOC)){
	?>
	<div>
		<h3>marksheet</h3>
	
	<?php
	echo "<img src='documents/".$result['marksheet']."' >";
	?></div> <?php
}
else{
	echo "photoisnot uploaded";
}
?>
</body>
</html>
