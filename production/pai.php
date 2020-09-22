 

      <?php include('cnx.php');  
     
     $data = "UPDATE orders SET order_status='1' WHERE  id_client='".$_GET['client']."'";
     echo$data;
    $val=mysqli_query($conn,$data);
    
    
    
    $data = "UPDATE bl SET stat='1' WHERE  idclient='".$_GET['client']."'";
     echo$data;
    $val=mysqli_query($conn,$data);
    
    require_once 'php_action/db_connect.php'; 
    
     $max="select max(id) as max from factnum";
     
      $m=$connect->query($max);
      $row1 = $m->fetch_array();
      
     if($row1['max']==0){$z=1;} else {$z=$row1['max']+1;}
    
    $sql = "INSERT INTO factnum VALUES ('".$z."','".$_GET['client']."')";
    echo$sql;
     $Data = $connect->query($sql);
    mysqli_query($con,'SET NAMES utf8');
    mysqli_query($con,'SET CHARACTER SET utf8');
     
          
    
    
          
     header('location: fact.php');
    
      ?>
                            
     
                          