<!DOCTYPE html>
<?php 
require_once 'php_action/db_connect.php'; 
?>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>S.G.S</title>

    <!-- Bootstrap -->
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
		<script type="text/javascript" src="./production/js/bootstrap.bundle.min.js"></script>
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

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
           
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

      <?php include('cnx.php'); ?>
      <?php include('menu.php'); ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Liste <small>Facture Non payé</small></h3>  <?php
$sdataa = "SELECT *,SUM(TTTc) as som,SUM(Acompte) as pai FROM orders where order_status like'0'  ";
                               $svall=mysqli_query($con,$sdataa);			
                                    $srr=mysqli_fetch_array($svall);
								  $srr['al']=$srr['som']-$srr['pai'];?>
                  <h5 style="color: red;text-align: right;">Total credit <?php echo$srr['al'];?>DT</h5>
              </div>

              
            </div>

            <div class="clearfix"></div>

            

              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
						<th>N°</th>
                          <th>Nom Client</th>
                          <th>MS Client</th>
                          <th>Montant Total</th>
						  <th>Accompte</th>
                          <th>Reste</th>
                         <th>NB BL</th>
						 <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
<?php $data = "SELECT * FROM orders where order_status like'0' GROUP BY id_client ";
  $val=mysqli_query($conn,$data);

$max="select max(id) as max from factnum";
 
  $m=$connect->query($max);
  $row1 = $m->fetch_array();
  
$z=$row1['max'];
while($r=mysqli_fetch_array($val))

{ 
$z=$z+1;
$dataa = "SELECT *,SUM(TTTc) as som,SUM(Acompte) as pai,COUNT(*)as cout,client.mf FROM orders inner join client on client.id=orders.id_client where order_status like'0' and id_client='".$r['id_client']."' ";
 
  
                               $vall=mysqli_query($con,$dataa);			
                                    $rr=mysqli_fetch_array($vall);



?>
                        <tr>
                          <td><?php echo$z;?></td>
                          <td><?php echo$r['client_name'];?></td>
                          <td><?php echo$rr['mf'];?></td>
                          <td><?php echo$rr['som'];?></td>
                          <td><?php echo$rr['pai'];?></td>
						   
                          
                          
						  <td><?php $rr['al']=$rr['som']-$rr['pai'];echo$rr['al'];?></td>
						   
                          <td><?php echo$rr['cout'];?></td>
                          <td><Button class="btn btn-primary" onclick='printOrderv("<?php echo$r['id_client'];?>")' ><i class="fa fa-search"></i></Button>
						  <a href="pai.php?client=<?php echo$rr['id_client'];?>">
              <Button class="btn btn-primary"><i class="fa fa-money"></i></Button></a>
						  
						  
						  </td>
                        </tr>
<?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
                </div>
              </div>

			  
			       <div class="title_left">
                <h3>Liste <small>Facture payé</small></h3>  
				<div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
						<th>N°</th>
                          <th>Nom Client</th>
                          <th>MS Client</th>
                          <th>Montant Total</th>
						  <th>Accompte</th>
                          <th>Reste</th>
                         <th>NB BL</th>
						 <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
<?php $data = "SELECT * FROM orders where order_status like'1' GROUP BY id_client ";
  $val=mysqli_query($conn,$data);

$max="select max(id) as max from factnum";
 
  $m=$connect->query($max);
  $row1 = $m->fetch_array();
  
$z=$row1['max'];
while($r=mysqli_fetch_array($val))

{ 
$z=$z+1;
$dataa = "SELECT *,SUM(TTTc) as som,SUM(Acompte) as pai,COUNT(*)as cout,client.mf FROM orders inner join client on client.id=orders.id_client where order_status like'1' and id_client='".$r['id_client']."' ";
 
  
                               $vall=mysqli_query($con,$dataa);			
                                    $rr=mysqli_fetch_array($vall);



?>
                        <tr>
                          <td><?php echo$z;?></td>
                          <td><?php echo$r['client_name'];?></td>
                          <td><?php echo$rr['mf'];?></td>
                          <td><?php echo$rr['som'];?></td>
                          <td><?php echo$rr['pai'];?></td>
						   
                          
                          
						  <td><?php $rr['al']=$rr['som']-$rr['pai'];echo$rr['al'];?></td>
						   
                          <td><?php echo$rr['cout'];?></td>
                          <td><Button class="btn btn-primary" onclick='printoverdevv("<?php echo$r['id_client'];?>")' ><i class="fa fa-search"></i></Button>

						  
						  
						  </td>
                        </tr>
<?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
                </div>
              </div>
            
 
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Application Created By <a href="www.facebook.com/smida.korltli">Abd Smad Korli 21620772</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>


    <script src="custom/js/order.js"></script> 
	
  </body>
</html>