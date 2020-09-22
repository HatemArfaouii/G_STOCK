
<?php include 'cnx.php';



if (isset($_POST['Mo'])) {

    $sql = "UPDATE  detvoiture  SET  qtprod='" . $_POST['qtprod'] . "' where id='" . $_GET['id'] . "'";

    if ($conn->query($sql) === true) {

        echo "<script>alert('Modifier avec  succès')</script>";
        header("Location: modstock.php");
    } else {
        echo "<script>alert('Verifier votre information ou envoyer message sur la page facebook INLUCC ')</script>";
    }

}

if (isset($_GET['id'])) {
    $datax = "SELECT * FROM detvoiture, produit  WHERE id='" . $_GET['id'] . "'";

    $vall = mysqli_query($conn, $datax);
    $rx = mysqli_fetch_array($vall);
    $iid = $rx['id'];
    $f = $rx['fornisseur'];
    $ref = $rx['ref'];
    $des = $rx['des'];
    $qt = $rx['qtprod'];
    $prix = $rx['prix'];
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <title>S.G.S </title>
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
                <h3>Fiche De Produit</h3>
              </div>


            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate method="POST"class="form-horizontal form-label-left">
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">id <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="first-name" name="id" value="<?php if (isset($_GET['id'])) {echo $iid;} else {?> <?php }?> " required="required" class="form-control ">
                        </div>
                      </div>

						<div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Fournisseur <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                           <select data-live-search="true" name="forn"class="form-control selectpicker">
						   <option value=" <?php if (isset($_GET['id'])) {echo $f;} else {?>inconuu <?php }?> "><?php if (isset($_GET['id'])) {echo $f;} else {?>inconuu <?php }?></option>

						  <?php $data = "SELECT * FROM fournisseur ";

$val = mysqli_query($conn, $data);
while ($r = mysqli_fetch_array($val)) {?>
							<option value="<?php echo $r['nom']; ?>"><?php echo $r['nom']; ?></option>
<?php }?>

						</select>

                        </div>
                      </div>





                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Code Produit <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="first-name" name="ref" value="<?php if (isset($_GET['id'])) {echo $ref;} else {?> <?php }?> " required="required" class="form-control ">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Designation <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="last-name" name="des" value=" <?php if (isset($_GET['id'])) {echo $des;} else {?> <?php }?> "required="required" class="form-control">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Prix  </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input id="middle-name" class="form-control" name="prix" value=" <?php if (isset($_GET['id'])) {echo $prix;} else {?> <?php }?> " type="text" >
                        </div>
                      </div>


					       <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Quntite </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input id="middle-name" class="form-control" name="qtprod" value=" <?php if (isset($_GET['id'])) {echo $qt;} else {?> <?php }?> " type="text" >
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
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
