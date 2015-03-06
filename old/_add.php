<?php 
$link = mysqli_connect('localhost','client','1qaz2wsx','blood');
mysqli_query($link,"SET NAMES 'UTF8'");

if (isset($_POST['addgps'])) {
	$lati = $_POST['lati'];
	$longi = $_POST['longi'];
	$id = $_POST['id'];
	$sql = "UPDATE `site` SET `lati`='$lati',`longi` = '$longi' where `id`='$id'";
	$result = mysqli_query($link,$sql);
}


 ?>