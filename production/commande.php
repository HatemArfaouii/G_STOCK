<?php 
require_once 'php_action/db_connect.php'; 
$buttonprint="";
$erreurs="";
if(isset($_POST['submit']))
{
   $orderDate            = date('Y-m-d', strtotime($_POST['orderDate']));  
   $clientName           = $_POST['clientName'];
   $clientContact        = $_POST['clientContact1'];
   $subTotalValue        = $_POST['subTotalValue'];
   $vatValue             = $_POST['vatValue'];
   $totalAmountValue     = $_POST['totalAmountValue'];
   $discount             = $_POST['discount'];
   $grandTotalValue      = $_POST['grandTotalValue'];
   $paid                 = $_POST['paid'];
   $dueValue             = $_POST['dueValue'];
     $xl             = $_POST['clx'];
 $paymentType          = $_REQUEST['paymentType'];
   $paymentStatus        = $_REQUEST['paymentStatus'];


 
 
  $sql = "INSERT INTO commande (order_date, client_name, client_contact, sub_total, vat, total_amount, discount, grand_total, paid, due, payment_type, payment_status, order_status) VALUES ('$orderDate', '$clientName', '$clientContact', '$subTotalValue', '$vatValue', '$totalAmountValue', '$discount', '$grandTotalValue', '$paid', '$dueValue', '$paymentType', '$paymentStatus', 1)";
 $Data = $connect->query($sql);
  
 
           
  $max="select max(order_id) as max from commande";
  $m=$connect->query($max);
  $row1 = $m->fetch_array();
 for($x = 1; $x < $xl; $x++) { $z=$row1['max'];
  
 $px="productName".$x."";
 

 if(isset($_POST[$px])){
	 $ctt="quantity".$x."";
	 $y=$_POST[$px];
  $sql = "INSERT INTO comfact  VALUES ('".$z."','".$y."','".$_POST[$ctt]."')";
 $Data = $connect->query($sql);
 
 $qt="select qt as qt from produit where ref='".$y."' ";
  $m=$connect->query($qt);
   $row2 = $m->fetch_array();
   
   $qont=$row2['qt']-$_POST[$ctt];
 $sqll = "UPDATE `produit` SET qt='".$qont."' WHERE ref='".$y."'";
 $Dataa = $connect->query($sqll);
 
 
 
 
  }
 	 
			}
  $buttonprint="<div class='alert alert-success' style='margin-top: 4%;'><button type='button' class='close' data-dismiss='alert'>×</button><strong><i class='glyphicon glyphicon-ok-sign'></i></strong> Successfully Added <br> <br> <a type='button' onclick='printOrderc(".$row1['max'].")' class='btn btn-primary'> <i class='glyphicon glyphicon-print'></i> Print </a></div>";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title></title>
 
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
  
  
  
  <script>
  function clxx()
    {
		var c=Number(document.forms.createOrderForm.clx.value);
		document.forms.createOrderForm.clx.value=c+1;
	}
	 
  
  
  </script>
  
  <script>
    function verif()
    {
 if(document.forms.createOrderForm.orderDate.value=="") {

  alert("Veuillez saisir une  date.");

  document.forms.createOrderForm.orderDate.focus();


  return false;

    }
    if(document.forms.createOrderForm.clientName.value=="") {

  alert("Veuillez saisir Nom du client.");

  document.forms.createOrderForm.clientName.focus();
  

  return false;

    }
 if(document.forms.createOrderForm.clientName.value=="") {

  alert("Veuillez saisir Nom du client.");

  document.forms.createOrderForm.clientName.focus();
  

  return false;

    }
 
      if(document.forms.createOrderForm.subTotal.value=="") {

  alert("Veuillez choisir au moins un produit .");

  document.forms.createOrderForm.productName1.focus();
  
   document.getElementById('productName1').style.borderColor="red";

  return false;

    }
    if(document.forms.createOrderForm.paid.value=="") {

  alert("Veuillez Introduire un montant a payé.");

  document.forms.createOrderForm.paid.focus();
  

  return false;

    }
      if(document.forms.createOrderForm.discount.value=="") {

  alert("Veuillez Introduire un le remise.");

  document.forms.createOrderForm.discount.focus();
  

  return false;

    }
    if(document.forms.createOrderForm.paymentType.value=="") {

  alert("Veuillez choisir le type de payement.");

  document.forms.createOrderForm.paymentType.focus();
  

  return false;

    }
      if(document.forms.createOrderForm.paymentStatus.value=="") {

  alert("Veuillez choisir Statut de paiement.");

  document.forms.createOrderForm.paymentStatus.focus();
  

  return false;

    }
    }
  </script>
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
      <?php include("menu.php");?>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
  <div class="success-messages"></div> <!--/success-messages-->
 
<?php echo $buttonprint; ?>
      <form class="form-horizontal" method="POST"  id="createOrderForm" name="createOrderForm" onSubmit="return verif();">
<div style="width:50%">
 <div class="form-group">
          <label for="orderDate" class="col-sm-2 control-label"> </label>
          <div class="col-sm-10">
            <input type="hidden" class="form-control " id="clx" name="clx" autocomplete="off" value="1" />
<br>
 
          </div>
        </div>
		
		
        <div class="form-group">
          <label for="orderDate" class="col-sm-2 control-label">Date de commande</label>
          <div class="col-sm-10">
            <input type="date" class="form-control " id="orderDate" name="orderDate" autocomplete="off" value="<?php echo date('Y-m-d') ; ?>" />
<br>
 
          </div>
        </div> <!--/form-group-->
        <div class="form-group">
          <label for="clientName" class="col-sm-2 control-label" >Nom du client</label>

          <div class="col-sm-10">
             <datalist id="datalist"> 
    <?php  $sql0 = "select * from client";
 $m0 = $connect->query($sql0);

 while($row1 = $m0->fetch_array())
  { ?>
<option value="<?php echo $row1['tel']; ?>">
  <?php echo $row1['nom']." Téléphone:". $row1['tel']; ?>
    
  </option> 
  <input type="hidden" value="<?php echo $row1['nom']; ?>" name="clientContact1">
<?php } ?>
  
<!-- This data list will be edited through javascript     -->
</datalist> 
            <input type="text" class="form-control"  list="datalist" onkeyup="ac(this.value);" id="clientName" name="clientName" placeholder="Client Name" autocomplete="true" />
           <br>
<br>
<br>
<br>
          </div>
        </div> <!--/form-group-->
           
</div>
        <table class="table" id="productTable">
          <thead>
            <tr>              
              <th style="width:40%;">
Produit</th>
              <th style="width:20%;">Prix</th>
              <th style="width:15%;">Quantité</th>              
              <th style="width:15%;">Total</th>             
              <th style="width:10%;"></th>
            </tr>
          </thead>
          <tbody>
            <?php
            $arrayNumber = 0;
            
            for($x = 1; $x < 2; $x++) { ?>
              <tr id="row<?php echo $x; ?>" class="<?php echo $arrayNumber; ?>">                
                <td style="margin-left:20px;">
                  <div class="form-group">
                   <select data-live-search="true" class="form-control selectpicker" name="productName1" id="productName<?php echo $x; ?>" onchange="getProductData(<?php echo $x; ?>);addRow();clxx();" >
                    <option value="">~~SELECT~~</option>
                    <?php
                      $productSql = "SELECT * FROM produit WHERE 1";
                      $productData = $connect->query($productSql);

                      while($row = $productData->fetch_array()) {     
                                 
                        echo "<option value='".$row['ref']."' id='changeProduct".$row['ref']."'>".$row['des']."</option>";
                      } // /while 

                    ?>
                  </select>
				  
				  
				  
                  </div>
                </td>
                <td style="padding-left:20px;">                 
                  <input type="text" name="rate[]" id="rate<?php echo $x; ?>" autocomplete="off" disabled="true" class="form-control" />                  
                  <input type="hidden" name="rateValue[]" id="rateValue<?php echo $x; ?>" autocomplete="off" class="form-control" />                  
                </td>
                <td style="padding-left:20px;">
                  <div class="form-group">
                  <input type="number" name="quantity<?php echo $x; ?>" id="quantity<?php echo $x; ?>" onkeyup="getTotal(<?php echo $x ?>)" autocomplete="off" class="form-control" min="1" />
                  </div>
                </td>
                <td style="padding-left:20px;">                 
                  <input type="text" name="total[]" id="total<?php echo $x; ?>" autocomplete="off" class="form-control" disabled="true" />                  
                  <input type="hidden" name="totalValue[]" id="totalValue<?php echo $x; ?>" autocomplete="off" class="form-control" />                  
                </td>
                <td>

                  <button class="btn btn-default removeProductRowBtn" type="button" id="removeProductRowBtn" onclick="removeProductRow(<?php echo $x; ?>)"><i class="glyphicon glyphicon-trash"></i></button>
                </td>
              </tr>
            <?php
                 
            $arrayNumber++;
            
         
            } // /for
           
            ?>
             <input type="hidden" id="totalrow" value="<?php echo $arrayNumber ; ?>">
          </tbody>          
        </table>

        <div class="col-md-6">
		       <div class="form-group">
            <label for="paid" class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
              <input type="hidden" class="form-control" value="0" id="paid" name="paid" autocomplete="off" onkeyup="paidAmount()" /><br>
            </div>
          </div> <!--/form-group-->       
          <div class="form-group">
            <label for="due" class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
              <input type="hidden" class="form-control" id="due" name="due" disabled="true" />
              <input type="hidden" class="form-control" id="dueValue" name="dueValue" /><br>
            </div>
          </div> <!--/form-group-->   
          <div class="form-group">
            <label for="clientContact" class="col-sm-3 control-label"> </label>
            <div class="col-sm-9">
              <select hidden class="form-control" name="paymentType" id="paymentType">
                <option value="">~~SELECT~~</option>
                <option selected value="1">Cheque</option>
                <option value="2">Espece</option>
                <option value="3">Carte de crédit</option>
              </select><br>
            </div>
          </div> <!--/form-group-->               
          <div class="form-group">
            <label for="clientContact" class="col-sm-3 control-label"> </label>
            <div class="col-sm-9">
              <select hidden class="form-control" name="paymentStatus" id="paymentStatus">
                <option value="">~~SELECT~~</option>
                <option selected value="1">Payment total</option>
                <option value="2">Acompte</option>
                <option value="3">pas de payment</option>
              </select>
            </div>
          </div>	  <!--/form-group-->             
        </div> <!--/col-md-6-->

        <div class="col-md-6">
		
          <div class="form-group">
            <label for="subTotal" class="col-sm-3 control-label">T.H.T</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="subTotal" name="subTotal" disabled="true" />
              <input type="hidden" class="form-control" id="subTotalValue" name="subTotalValue" />
			  <br>
            </div>
          </div> <!--/form-group-->  

 		  
          <div class="form-group">
            <label for="vat" class="col-sm-3 control-label">TVA 19%</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="vat" name="vat" disabled="true" />
              <input type="hidden" class="form-control" id="vatValue" name="vatValue" />
			  <br>
            </div>
          </div> <!--/form-group-->       
          <div class="form-group">
            <label  for="totalAmount" class="col-sm-3 control-label"> </label>
            <div class="col-sm-9">
              <input type="hidden" class="form-control" id="totalAmount" name="totalAmount" disabled="true"/>
              <input type="hidden" class="form-control" id="totalAmountValue" name="totalAmountValue" />
			  <br>
            </div>
          </div> <!--/form-group-->       
          <div class="form-group">
            <label for="discount" class="col-sm-3 control-label">TIMBRE</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="discount" name="discount" onkeyup="discountFunc()" autocomplete="off" />
			  <br>
            </div>
          </div> <!--/form-group--> 
          <div class="form-group">
            <label for="grandTotal" class="col-sm-3 control-label">T.TTC</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="grandTotal" name="grandTotal" disabled="true" />
              <input type="hidden" class="form-control" id="grandTotalValue" name="grandTotalValue" />
			  <br>
            </div>
          </div>
	 

		  <!--/form-group-->               
        </div> <!--/col-md-6-->


        <div class="form-group submitButtonFooter">
          <div class="col-sm-offset-2 col-sm-10">
          <button type="button" class="btn btn-default" onclick="addRow()" id="addRowBtn" data-loading-text="Loading..."> <i class="glyphicon glyphicon-plus-sign"></i> Ajouter ligne produit </button>

            <button type="submit" name="submit" id="createOrderBtn" data-loading-text="Loading..." class="btn btn-success"><i class="glyphicon glyphicon-ok-sign"></i> Enregistrer</button>

            <button type="reset" class="btn btn-default" onclick="resetOrderForm()"><i class="glyphicon glyphicon-erase"></i> Annuler</button>
          </div>
        </div>
      </form>
    
        </div>
 
      </div>
    </div>

    <script src="custom/js/order.js"></script>
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>
