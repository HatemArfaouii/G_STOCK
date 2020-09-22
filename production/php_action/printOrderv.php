<?php 	
require_once 'core.php';
$max="select max(id) as max from factnum";
 
  $m=$connect->query($max);
  $row1 = $m->fetch_array();
  
 if($row1['max']==0){$z=1;} else {$z=$row1['max']+1;}

require_once 'core.php';

$orderId = $_POST['orderId'];

$sql = "SELECT order_date, client_name, id_client, sum(THT), sum(TVA), sum(natureTVA), sum(natureTVA), sum(TTTC), sum(Acompte), sum(reste) ,order_id FROM orders WHERE id_client = '".$orderId."' and order_status like'0'";
 
 
$orderResult = $connect->query($sql);
$orderData = $orderResult->fetch_array();

$orderDate = $orderData[0];
$clientName = $orderData[1];
$clientContact = $orderData[2]; 
$subTotal = $orderData[3];
if($orderData[6]<0){$vat = 0;}else{$vat = $orderData[4];}
 
$totalAmount = $orderData[5]; 
$discount = 0.6;
 
$grandTotal = $orderData[7];
 

$paid = $orderData[8];
$due = $orderData[9];
$id = $orderData[10];



$orderItemSql = "SELECT bl.idproduit, bl.qt,
produit.des,bl.prix FROM bl
	INNER JOIN produit ON bl.idproduit = produit.ref 
 WHERE bl.idclient = '".$orderId."' and bl.stat like'0'";
 
 
   
$orderItemResult = $connect->query($orderItemSql);
$table='<div style="width: 33%;float: left; color:#00BFFF;"><b><label style="font-size:200%; color:black;">Ste</label> <label style="font-size:200%;color:#A52A2A;"> &nbsp;ARTIMAG</label></b><br>
04,EL Serss C RAFHA,MNIHLA <br>
GSM: 93.106.378-52.010.733 <br>
E-mail: artimag2020@gmail.com<br>
MF: 1637798/V/A/M/000
</div>
<div style="width: 30%;float: left;">
<center><img style="width: 50%;" src="../images/image.jpg"><center><br><br>
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
	 
				<label style="font-weight: 900">Facture N° : '.$z.'</label> <br>
				 Date : '.$orderDate.' <br>
				
	 	</div>
		<div style="width: 33%;float: left;">
		 		Client: '.$clientName.' <br>
				M/F: '.$clientContact.'
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
			$tt=floatval ($row[3])* floatval ($row[1]);				
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

 <div style="float: right;">

 <table class="table table-bordered" border="1" style="border-collapse:collapse" >
 <tr>
			<td style="padding:10px;"> T.H.T </td>
			<td style="padding:10px;">'.number_format($subTotal, 3).' </td>	
		
		 </tr>

		 <tr>
			<td style="padding:10px;">
			 TVA 19%</td>
			<td style="padding:10px;">
			'.number_format($vat,3).'</td>	 
		 <tr>
			<td style="padding:10px;">
			 TIMBRE </td>
			<td style="padding:10px;">
			'.number_format(0.6,3).'</td>	 
		 <tr>
			<td style="padding:10px;">
			 T.TTC </td>
			<td style="padding:10px;">'.number_format($grandTotal,3).'</td>	 
</tr>
</table> 			

		 
	 
 </div>
 <br><br><br><br><br><br><br><br><br><br><br><br><br> 
 <p>Arréter la présence Facture à la somme:.......................................................................................................<br>
 <br>
 <br>
 .......................................................................................................................................................................</p>		 
<br><br>
 <h4 style="float: right;">Signature et Cachet</h4>
 '
 ;
 

$connect->close();

echo $table;
?>
 