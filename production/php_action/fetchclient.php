 




<?php 	

require_once 'core.php';

$productId = $_POST['productId'];

$sql = "SELECT id,nom,tel,adresse,mf FROM client WHERE id like '".$productId."'";
 
$result = $connect->query($sql);

 
 $row = $result->fetch_array();
 

$connect->close();

echo json_encode($row);