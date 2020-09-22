<?php 	

require_once 'core.php';

$orderId = $_POST['orderId'];

$sql = "SELECT order_date, client_name, client_contact, sub_total, vat, total_amount, discount, grand_total, paid, due FROM retour WHERE order_id = $orderId";

$orderResult = $connect->query($sql);
$orderData = $orderResult->fetch_array();

$orderDate = $orderData[0];
$clientName = $orderData[1];
$clientContact = $orderData[2]; 
$subTotal = $orderData[3];
$vat = $orderData[4];
$totalAmount = $orderData[5]; 
$discount = $orderData[6];
$grandTotal = $orderData[7];
$paid = $orderData[8];
$due = $orderData[9];


$orderItemSql = "SELECT routourfact.idprod, routourfact.qtprod,
produit.des,produit.prix FROM routourfact
	INNER JOIN produit ON routourfact.idprod = produit.ref 
 WHERE routourfact.idfact = $orderId";
  
$orderItemResult = $connect->query($orderItemSql);
$table='<div style="width: 33%;float: left;"><label>STE ARTIMAG</label><br>
004,EL KEF C RAFHA,MNIHLA <br>
GSM :93.106.378-52.010.733 <br>
E-mail :<br>
MS:1637798/V/A/M/000
</div> 
<div style="width: 30%;float: left;">
<center><img  style="width: 50%;" src="http://127.0.0.1/production/images/img.jpg"><center>
</div> 
<div style="width: 33%;float: right;text-align: right;">
<label>شركة أرتيماغ</label><br>
4نهج الكاف-حي الرفاهة-منيهلة<br>
الجوال :93.106.378-52.010.733 <br>
اليريد الالكتروني :
1637798/V/A/M/000:المعرف الجبائي

</div> 
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
 
';
 $table .= '
 <div style="width: 50%;float: left;">
	 
				Bonde De Retour N° : '.$orderId.'<br>
				Date : '.$orderDate.'<br>
				
	 	</div>
		<div style="width: 33%;float: left;">
		 Client Name : '.$clientContact.' <br>
				Contact : '.$clientName.'
		</div>
		 <br>
<br>
<br>
 
<table border="1" width="100%;"   style="border:1px solid black;border-top-style:1px solid black;border-bottom-style:1px solid black;">

	<tbody>
		<tr>
			<th>Réf</th>
			
			<th>Désignations</th>
			<th>Qté</th>
			<th>P.U.HT</th>
			<th>Total HT</th>
		</tr>';

		
		while($row = $orderItemResult->fetch_array()) {	
$tt=$row[3]*$row[1];		
						
			$table .= '<tr>
				<th>'.$row[0].'</th>
				<th>'.$row[2].'</th>
				<th>'.$row[1].'</th>
				<th>'.$row[3].'</th>
				<th>'.$tt.'</th>
			</tr>
			';
	 
		} // /while

		$table .= '</tbody></table><br>

 <div style="width: 40%;float: right;">

		 <table>
		 <tr>
			<td> T.H.T </td>
			<td><input type="text" value="'.$subTotal.'"> </td>	 	
		 </tr>

		 <tr>
			<td>
			 TVA%</td>
			<td>
		  <input type="text" value="'.$vat.'">  	</td>	 
		 <tr>
			<td>
			 TIMBRE </td>
			<td>
			<input type="text" value="'.$discount.'"> </td>	 
		 <tr>
			<td>
			 T.TTC </td>
			<td>
			<input type="text" value="'.$grandTotal.'"> </td>	 
</tr>
</table> 			
		 
</div>
		 
	

 ';


$connect->close();

echo $table;