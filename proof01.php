<?php 
include 'dbconnection1.php';
?>
<html>
<head>
	<title>Proof</title>
</head>
<body>

<?php
$cid = $_POST['cid'];
$query = "select proof from complaint where cid = '$cid'";
if($run = mysqli_query($connection1,$query))
if($result = mysqli_fetch_array($run,MYSQLI_ASSOC)){
	?>
	<div>
		<h3>Proof</h3>
	
	<?php
	echo "<img src='uploads/".$result['proof']."' >";
	?></div> <?php
}
else{
	echo "photo is not uploaded";
}
?>
</body>
</html>
