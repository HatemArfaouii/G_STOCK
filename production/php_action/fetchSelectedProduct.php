<?php 	

require_once 'core.php';

$productId = $_POST['productId'];

$sql = "SELECT * FROM produit WHERE ref = '".$productId."'";
$result = $connect->query($sql);

 
 $row = $result->fetch_array();
 

$connect->close();

echo json_encode($row);