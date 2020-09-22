
<?php include 'cnx.php';

if (isset($_POST['aj'])) {
 // $sql = "INSERT INTO matricule VALUES ('','".$_POST['matricule']."'')";
 $sql = "INSERT INTO matricule VALUES ('','".$_POST['matricule']."')";

    
    mysqli_query($con, 'SET NAMES utf8');
    mysqli_query($con, 'SET CHARACTER SET utf8');

    if ($con->query($sql) === true) {
        echo "<script>alert('effectué avec succes')</script>";
    } else {
        echo "<script>alert('SVP Verifier votre information ')</script>";
    }
}

if (isset($_POST['Mo'])) {

    $sql = "UPDATE  matricule  SET  matricule='" . $_POST['matricule'] . "'";

    if ($conn->query($sql) === true) {

        echo "<script>alert('Modifier avec  succès')</script>";
        header("Location: chmat.php");
    } else {
        echo "<script>alert('Verifier votre information ')</script>";
    }

}

if (isset($_GET['id'])) {
    $datax = "SELECT * FROM matricule  WHERE id='" . $_GET['id'] . "'";

    $vall = mysqli_query($conn, $datax);
    $rx = mysqli_fetch_array($vall);
    $iid = $rx['id'];
    $imatricule = $rx['matricule'];
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
        <?php include 'menu.php';?>


        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Fiche matricule</h3>
              </div>


            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ajouter matricule <small></small></h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form method="POST"id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    <?php if (isset($_GET['id'])) {?>
						<div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">id<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="first-name" name="id" value="<?php if (isset($_GET['id'])) {echo $iid;} else {?> <?php }?> " readonly required="required" class="form-control ">
                        </div>
                      </div>
						<?php }?>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Matricule<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="first-name" name="matricule" value="<?php if (isset($_GET['id'])) {echo $imatricule;} else {?> <?php }?> " required="required" class="form-control ">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">

						  <button class="btn btn-primary" type="reset">Reset</button>
                           <?php if (isset($_GET['id'])) {?>
						  <button type="submit" name="Mo"class="btn btn-success">Modifier</button>
						  <?php } else {?>
						  <button type="submit" name="aj"class="btn btn-success">Submit</button>
						  <?php }?>
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
