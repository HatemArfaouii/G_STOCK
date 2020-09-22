<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>S.G.S</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
	 <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="../build/css/custom.min.css" rel="stylesheet">
	<script src="jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css" >
		<link rel="stylesheet" type="text/css" href="bootstrap-select.min.css">
		<script type="text/javascript" src="bootstrap.bundle.min.js"></script>
		<script type="text/javascript" src="bootstrap-select.min.js"></script>
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../build/css/custom.min.css" rel="stylesheet">
	 
  <script src="assests/jquery/jquery.min.js"></script>
  <!-- jquery ui -->  
  <link rel="stylesheet" href="assests/jquery-ui/jquery-ui.min.css">
  <script src="assests/jquery-ui/jquery-ui.min.js"></script>

  <!-- bootstrap js -->
  <script src="assests/bootstrap/js/bootstrap.min.js"></script>
  
  
  </head>
  <body style="margin:10px;">

<?php 	

require_once 'core.php';

 
 


$orderItemSql = "SELECT * from produit";
  
$orderItemResult = $connect->query($orderItemSql);
$table='<div style="width: 33%;float: left; color:#00BFFF	;"><b><label style="font-size:200%; color:black;">Ste </label> <label style="font-size:200%;color:#A52A2A;"> &nbsp;ARTIMAG</label></b><br>
004,EL Serss C RAFHA,MNIHLA <br>
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

$orderItemSql = "SELECT * from produit";
  
$orderItemResult = $connect->query($orderItemSql);
$matr=$_SESSION['Mat'];
$ch=$_SESSION['chauffeur'];
$dtt=date('d/Y');
$dttt=date('d-m-yy');
 $table .= '
<CENTER> <div style="width: 100%;float: left;">
	 
				Bon De Sortie N° : 0'.$dtt.'<br>
			 
				
	 	</div></CENTER>
		<div style="width: 50%;float: left;">
				Date : '.$dttt.' <br>
				Matricule : '.$matr.' <br>
				Chauffeur : '.$ch.' <br>
				Destination : Toutes la Tunisie
		</div>
		 <br>
		 <br><br><br>
<br>
 
<table class="table table-bordered" width="100%" >
	<tbody>
	<tr style="background-color: darkgrey;">
	<th style="padding:10px;">Réf</th>
	<th style="padding:10px;">Désignations</th>
	<th style="padding:10px;">Qté</th>
	<th style="padding:10px;">P.U.HT</th>
	<th style="padding:10px;">TVA</th>
	<th style="padding:10px;">P.U.TTC</th>
	<th style="padding:10px;">P.T.TTC</th>
</tr>';

		$som=0;
		while($row = $orderItemResult->fetch_array()) {	
		$tvva=floatval($row[4])*0.19;
		$vet=$tvva+floatval($row[4]);
		$mp=round($vet,3);
		$ty=$mp*$row[3];
 		$som=$som+number_format($ty, 3);
						
			$table .= '<tr>
				<td>'.$row[1].'</td>
				<td>'.$row[2].'</td>
				<td>'.$row[3].'</td>
				<td>'.$row[4].'</td>
				<td>19%</td>
				<td>'.number_format($mp, 3).'</td>
				
				<td> '.number_format($ty, 3).'</td>
				
			</tr>
			';
	 
		} // /while

		$table .= '</tbody></table><br>

 <div style="width: 40%;float: right;">

 <table class="table table-bordered">
		 <tr>
			<td style="padding:10px;"> T.H.T </td>
			<td style="padding:10px;">'.number_format($som, 3).'</td>
		 </tr>

		  
		 
</table> 			
		 
</div>
		 
	

 ';


$connect->close();

echo $table;
?>
</body>
</html>