 

      <?php include('cnx.php');  
     
     $data = "DELETE FROM detvoiture WHERE id='".$_GET['id']."'";
     echo$data;
    $val=mysqli_query($conn,$data);			
     header('location: modstock.php');
    
      ?>
                            
     
                          