 

      <?php include('cnx.php');  
     
     $data = "DELETE FROM  fournisseur WHERE id='".$_GET['id']."'";
     echo$data;
    $val=mysqli_query($conn,$data);			
     header('location: chfornisseur.php');
    
      ?>
                            
     
                          