 

      <?php include('cnx.php');  
     
 $data = "DELETE FROM  produit WHERE ref='".$_GET['id']."'";
 echo$data;
$val=mysqli_query($conn,$data);			
 header('location: chproduit.php');

  ?>
                        
 
                      