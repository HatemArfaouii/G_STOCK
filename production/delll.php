 

      <?php include('cnx.php');  
     
     $data = "DELETE FROM  client WHERE id='".$_GET['id']."'";
     echo$data;
    $val=mysqli_query($conn,$data);			
     header('location: chclient.php');
    
      ?>
                            
     
                          