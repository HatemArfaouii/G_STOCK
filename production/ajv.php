<?php 
 if(isset($_POST['aj'])){
	 
	 
	 session_start();
	 $_SESSION['chauffeur']=$_POST['nom'];
   $_SESSION['Mat']=$_POST['mat'];
 	 header("Location: php_action/printOrdervo.php");
 }
 
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>STE ARTIMAG </title>
		<script src="jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css" >
		<link rel="stylesheet" type="text/css" href="bootstrap-select.min.css">
		<script type="text/javascript" src="bootstrap.bundle.min.js"></script>
		<script type="text/javascript" src="bootstrap-select.min.js"></script>
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php include('menu.php'); ?>

    
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Fiche chauffeur</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ajouter chauffeur<small></small></h2>
                
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form method="POST"id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

						 
						
					 
                      <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nom - Prenom  </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input id="middle-name" class="form-control" type="text" value=" "name="nom">
                        </div>
                      </div>
					       <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Matricule Voiture </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input id="middle-name" class="form-control" type="text" value="" name="mat">
                        </div>
                      </div>
                       
					  
        
                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                          
						  <button class="btn btn-primary" type="reset">Reset</button>
                           
						  <button type="submit" name="aj"class="btn btn-success">Submit</button>
						 
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div></div>
    </div> 
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>
