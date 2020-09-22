<?php 	

require_once 'core.php';

$orderId = $_POST['orderId'];
 

$sql = "SELECT order_date, client_name,id_client, THT, TVA, total_amount, natureTVA, TTTC, Acompte, Reste, client.mf FROM orders inner join client on client.id=orders.id_client WHERE   order_id = '".$orderId."'";
  
$orderResult = $connect->query($sql);
$orderData = $orderResult->fetch_array();

$orderDate = $orderData[0];
$clientName = $orderData[1];
$clientContact = $orderData[10]; 
$subTotal = $orderData[3];
$vat = $orderData[4];
$totalAmount = $orderData[5]; 
$discount = $orderData[6];
$grandTotal = $orderData[7];
$paid = $orderData[8];
$due = $orderData[9];


$orderItemSql = "SELECT  bl.idproduit, bl.qt,
produit.des,bl.prix FROM bl
	INNER JOIN produit ON bl.idproduit = produit.ref 
 WHERE bl.id = '".$orderId."'";
  
$orderItemResult = $connect->query($orderItemSql);
$table='<div style="width: 33%;float: left; color:#00BFFF	;">
<b><label style="font-size:200%; color:black;">Ste </label>
<label style="font-size:200%;color:#A52A2A;"> &nbsp;ARTIMAG</label></b><br>
04,EL Serss Cité Errafaha,Mnihla <br>
GSM: 93.106.378-52.010.733 <br>
E-mail: artimag2020@gmail.com<br>
MF: 1637798/V/A/M/000
</div>
<div style="width: 30%;float: left;">
<center><img style="width: 50%;" src="../images/img.jpg"><center><br><br>
</div>
<div style="width: 33%;float: right;text-align: right;color:#00BFFF">
<b><span style="font-size:200%;color:black;">شركة</span><span style="font-size:200%;color:#A52A2A;">أرتيماغ</span></b><br>

<div> <label style="width:95%;float:left" >  نهج السرس-حي الرفاهة-المنيهلة</label><label style="width:5%;float:right" >4</label> </div>
الجوال:  93.106.378-52.010.733 <br>

<div> <label style="width:30%;" >artimag2020@gmail.com:</label><label style="width:33%;" >اليريد الالكتروني</label> </div>
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
	 
				<label style="font-weight: 900"> BL N° : '.$orderId.'</label><br>
				Date : '.$orderDate.'<br>
				
	 	</div>
		<div style="width: 33%;float: left;">
		 Client Name : '.$clientName.' <br>
				M/S : '.$clientContact.'
				 
		</div>
		 <br>
<br>
<br>
 
<table class="table table-bordered" width="100%" border="1" style="border-collapse:collapse">

	<tbody>
		<tr style="background-color: darkgrey;">
			<th style="padding:10px;">Réf</th>
			<th style="padding:10px;">Désignations</th>
			<th style="padding:10px;">Qté</th>
			<th style="padding:10px;">P.U.HT</th>
			<th style="padding:10px;">Total HT</th>
		</tr>';

		
		while($row = $orderItemResult->fetch_array()) {	
			$tt=floatval ($row[3]) * floatval ($row[1]);	
			 		
						
			$table .= '<tr>
				<td style="padding:10px;">'.$row[0].'</td>
				<td style="padding:10px;">'.$row[2].'</td>
				<td style="padding:10px;">'.$row[1].'</td>
				<td style="padding:10px;">'.$row[3].'</td>
				<td style="padding:10px;">'.number_format($tt, 3).'</td>
			</tr>
			';
	 
		} // /while

		$table .= '</tbody></table><br>

 <div style="width: 30%;float: right;">

		 <table class="table table-bordered" width="100%" border="1" style="border-collapse:collapse">
		 <tr>
			<td style="padding:10px;"> T.H.T </td>
			<td style="padding:10px;">'.number_format($subTotal, 3).' </td>	 	
		 </tr>

		 <tr>
			<td style="padding:10px;"> TVA 19%</td>
			<td style="padding:10px;"> '.$vat.' </td>	 
		 <tr> 
			<td style="padding:10px;"> TIMBRE </td>
			<td style="padding:10px;">'.$totalAmount.'</td>	 
		 <tr>
			<td style="padding:10px;"> T.TTC </td>
			<td style="padding:10px;">'.number_format($grandTotal, 3).'</td>	 
		</tr>

	 	<tr>
			<td style="padding:10px;"> Accompte </td>
			<td style="padding:10px;"> '.$paid.'  </td>	 
		</tr>

	 	<tr>
			<td style="padding:10px;">  Reste </td>
			<td style="padding:10px;"> '.$due.' </td>	 
		</tr>
</table> 			
		 
</div>
		 
	

 ';


$connect->close();

echo $table;