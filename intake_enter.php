<?php include '$dbconnection1';?>

<!DOCTYPE html>
<html>
<head>
	<title>sckmcks</title>
</head>
<body>
	x=
<input type="radio" name="radio" checked >1
<input type="radio" name="radio" onclick="masj(1);">2
<?php
function f(){
	echo "hiiii";
	?>
	<h1>in php function</h1>
	<?php
}
?>
<script >
	function masj(x){
	if(x==1){
	
    document.write('<?php echo "jejjkcjkd";?>');
	
}
}
</script>



</body>
</html>