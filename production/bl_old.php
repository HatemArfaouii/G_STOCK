<?php 
require_once 'php_action/db_connect.php'; 
$buttonprint="";
$erreurs="";
if(isset($_POST['submit']))
{
   $orderDate            = date('Y-m-d', strtotime($_POST['orderDate']));  
   $clientName           = $_POST['nom'];
   $id                   = $_POST['id'];
   $clientContact        = $_POST['id'];
   $subTotalValue        = $_POST['subTotal'];
   $vatValue             = $_POST['vat'];
   $timbre               = $_POST['timbre'];
   $discount             = $_POST['gender'];;
   $grandTotalValue      = $_POST['grandTotal'];
   $paid                 = $_POST['paid'];
   $dueValue             = $_POST['due'];
     $xl                 = $_POST['clx'];
 $paymentType            = $_REQUEST['paymentType'];
   $paymentStatus        = $_REQUEST['paymentStatus'];

if($_POST['dueValue']==0){$u='1';}else{$u='0';}
 $max="select max(id) as max from bl";
  $m=$connect->query($max);
  $row1 = $m->fetch_array();
 if($row1['max']==0){$z=1;} else {$z=$row1['max']+1;}
  $sql = "INSERT INTO orders VALUES ('".$z."','$orderDate', '$clientName', '$clientContact', '$subTotalValue', '$vatValue', '$timbre', '$discount', '$grandTotalValue', '$paid', '$dueValue', '$paymentType', '$paymentStatus', '$u')";
  
 $Data = $connect->query($sql);
  
 
  $max="select max(id) as max from bl";
  $m=$connect->query($max);
  $row1 = $m->fetch_array();      
  
 for($x = 1; $x < $xl; $x++) {
	 if($row1['max']==0){$z=1;} else {$z=$row1['max']+1;}
  
 $px="productName".$x."";
 $prix="rate".$x."";
 

 if(isset($_POST[$px])){
	 $ctt="quantity".$x."";
	 $y=$_POST[$px];
	 $p=$_POST[$prix];
  $sql = "INSERT INTO bl  VALUES ('".$z."','".$y."','".$p."','".$_POST[$ctt]."','".$id."','".$u."')";
   
 $Data = $connect->query($sql);
 
 
 $qt="select qtprod as qt from detvoiture where idprod='".$y."' ";
 
  $m=$connect->query($qt);
   $row2 = $m->fetch_array();
    
$qont=$row2['qt']-$_POST[$ctt];
 $sqll = "UPDATE `detvoiture` SET qtprod='".$qont."' WHERE idprod='".$y."'";
 $Dataa = $connect->query($sqll);
  }
 	 
			}
  $buttonprint="<div class='alert alert-success' style='margin-top: 4%;'><button type='button' class='close' data-dismiss='alert'>×</button><strong><i class='glyphicon glyphicon-ok-sign'></i></strong> Successfully Added <br> <br> <a type='button' onclick='printOrder(".$z.")' class='btn btn-primary'> <i class='glyphicon glyphicon-print'></i> Print </a></div>";
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
  function tvanull(){
	  
	  var x=document.getElementById("vat").value;
	  var y=document.getElementById("grandTotal").value;
	  
	  var x=Math.round(x * 1000) / 1000;
	  var y=Math.round(y * 1000) / 1000;
	  var su=Math.round((y-x) * 1000) / 1000;;
	  var k=su.toFixed(3);
	  document.getElementById("grandTotal").value=k;
	  document.getElementById("vat").value=0;
	   
	  
	  
  }
    function tvanull2(){
	   
	  var y=document.getElementById("grandTotal").value;
	    document.getElementById("vat").value=document.getElementById("vatValue").value;
		var x=document.getElementById("vat").value;
	  
	  var x=Math.round(x * 1000) / 1000;
	  var y=Math.round(y * 1000) / 1000;
	  var su=Math.round((y+x) * 1000) / 1000;
	  
	  var k=su.toFixed(3);
	  document.getElementById("grandTotal").value=k;
	 
	  
	  
  }
   function timb(){
	    var z=new Number(document.getElementById("subTotal").value);
	    var y=new Number(document.getElementById("vat").value);
		var x=new Number(document.getElementById("timbre").value);
		 var su=y+x+z;
	     
	 var k=su.toFixed(3);
	  document.getElementById("grandTotal").value=k;
	  
  }
  
  
  </script>
  
  
  <script>
  function clxx()
    {
		var c=Number(document.forms.createOrderForm.clx.value);
		document.forms.createOrderForm.clx.value=c+1;
	}
	 function getcl()
    {
		var cli=document.forms.createOrderForm.clientName.value;
		
			 	 
		var productId = cli;		
		
		 
			$.ajax({
				url: 'php_action/fetchclient.php',
				type: 'post',
				data: {productId : productId},
				dataType: 'json',
				success:function(response) {
					 
					
					$("#tel").val(response.tel);
					$("#ad").val(response.adresse);
					$("#ms").val(response.mf);
					$("#nom").val(response.nom);
					$("#id").val(response.id);
				
				}  
			});  
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
<div  >
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
            
		 <select data-live-search="true" class="form-control selectpicker" name="clientName" id="clientName" onchange="getcl();" >
			 <br>
                    <option value="">~~SELECT~~</option>
			          <?php  $sql0 = "select * from client";
                $m0 = $connect->query($sql0);

                while($row1 = $m0->fetch_array())
                  { ?>
                <option value="<?php echo $row1['id']; ?>">
                  <?php echo $row1['nom']." Téléphone:". $row1['tel']; ?>
                    
  </option> 
  <?php } ?>
  
  
			</select>	  
			 <br>
			 <br>
          </div>
        </div> 
		
		        <div class="form-group">
          <label for="orderDate" class="col-sm-2 control-label"> </label>
          <div class="col-sm-10">
            <label for="clientName" class="col-sm-2 control-label" >Nom </label> <input type="text" class="form-control " style="width:25%;float:left" id="nom" name="nom"  placeholder ="nom" />
            <label for="clientName" class="col-sm-2 control-label" >Contact</label> <input type="text" class="form-control " style="width:30%;float:left" id="tel" name="tel"  placeholder ="Telephone" />
 
            <br><label for="clientName" class="col-sm-2 control-label" >Adresse</label> <input type="text" class="form-control " style="width:25%;float:left"id="ad" name="ad" autocomplete="off" placeholder ="Adresse" />
 
            <label for="clientName" class="col-sm-2 control-label" >M/F</label> <input type="Text" class="form-control " style="width:25%;float:left"id="ms" name="ms" autocomplete="off" placeholder ="MS" />
 
             <label for="clientName" class="col-sm-3 control-label" style="
    width: 17%;
">ID</label> <input type="Text" class="form-control " style="width:25%;float:left"id="id" name="id" autocomplete="off" placeholder ="id" />

          </div>
        </div> 
		
           
</div>
        <table class="table" id="productTable">
          <thead>
            <tr>              
              <th style="width:40%;">Produit</th>
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
                      $productSql = "SELECT * FROM produit WHERE qt>0";
                      $productData = $connect->query($productSql);

                      while($row = $productData->fetch_array()) {     
                                 
                        echo "<option value='".$row['ref']."' id='changeProduct".$row['ref']."'>".$row['des']."</option>";
                      } // /while 

                    ?>
                  </select>
				  
				  
				  
                  </div>
                </td>
                <td style="padding-left:20px;">                 
                  <input type="text" name="rate<?php echo $x; ?>" id="rate<?php echo $x; ?>" autocomplete="off"  onkeyup="getTotal(<?php echo $x ?>);"   class="form-control" />                  
                  <input type="hidden" name="rateValue[]" id="rateValue<?php echo $x; ?>" autocomplete="off" class="form-control" />                  
                </td>
                <td style="padding-left:20px;">
                  <div class="form-group">
                  <input type="number" name="quantity<?php echo $x; ?>" id="quantity<?php echo $x; ?>" onkeyup="getTotal(<?php echo $x ?>);" autocomplete="off" class="form-control" min="0" />
                  </div>
                </td>
                <td style="padding-left:20px;">                 
                  <input type="text" name="total[]" id="total<?php echo $x; ?>" autocomplete="off" class="form-control" disabled="true" />                  
                  <input type="hidden" name="totalValue[]" id="totalValue<?php echo $x; ?>" autocomplete="off" class="form-control" />                  
                </td>
                <td>
 
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
            <label for="paid" class="col-sm-3 control-label">Acompte</label>
            <div class="col-sm-9">
              <input type="text" class="form-control"  required id="paid" name="paid" autocomplete="off" onkeyup="paidAmount()" /><br>
            </div>
          </div> <!--/form-group-->       
          <div class="form-group">
            <label for="due" class="col-sm-3 control-label">Reste</label>
			
            <div class="col-sm-9">
              <input type="text" class="form-control" id="due" name="due" readonly />
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
              <select  hidden class="form-control" name="paymentStatus" id="paymentStatus">
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
              <input type="text" class="form-control" id="subTotal" name="subTotal" readonly />
              <input type="hidden" class="form-control" id="subTotalValue" name="subTotalValue" />
			  <br>
            </div>
          </div> <!--/form-group-->  

 		  
          <div class="form-group">
            <label for="vat" class="col-sm-3 control-label">TVA 19%</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="vat" name="vat"   />
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
          </div>

  <div class="form-group">
            <label  for="totalAmount" class="col-sm-3 control-label">Timbre </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="timbre"  onkeyup="timb();paidAmount();"name="timbre" required />
              
			  <br>
            </div>
          </div>


		  <!--/form-group-->       
          <div class="form-group">
            <label for="discount" class="col-sm-3 control-label">TVA NULL</label>
			 <div class="col-sm-9">
             
             
		<input type="radio" name="gender" value="ouitva" onclick="tvanull2()"checked> Oui<br>
  <input type="radio" name="gender" value="nontva"  onclick="tvanull()" > Non<br>
   </div>
             
          </div> <!--/form-group--> 
          <div class="form-group">
            <label for="grandTotal" class="col-sm-3 control-label">T.TTC</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="grandTotal" name="grandTotal" readonly />
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
