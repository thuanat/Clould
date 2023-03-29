<?php
session_start();
include_once("config.php");


$code = ($_POST['product_code']);
$name = ($_POST['product_name']);
$cat = ($_POST['category']);
$fan = ($_POST['fandom']);
$fees = ($_POST['price']);
$quant = ($_POST['product_qty']);



$sql = "INSERT INTO products(product_code,product_name,category,fandom,price,product_qty) VALUES ('$code','$name','$cat','$fan','$fees','$quant')";

if (mysqli_query($mysqli, $sql)) {
	echo '<script type="text/javascript">
		if(!alert("New Product was added")) document.location = "http://localhost/cloudcweb2/add_product.php";
		</script>';
} else {
	echo '<script type="text/javascript">
	if(!alert("Something is error #_#")) document.location = "http://localhost/cloudcweb2/add_product.php";
	</script>';
}
//header("Location:http://localhost/cloudcweb2/add_product.php");



?>