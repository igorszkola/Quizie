<?php   
 include 'connection.php';  
 if (isset($_GET['id'])) {  
      $id = $_GET['id'];  
      $query = "DELETE FROM `kategorie` WHERE ID_Kategoria = '$id'";  
      $run = mysqli_query($conn,$query);  
      if ($run) {  
           header('location:start.php');  
      }else{  
           echo "Error: ".mysqli_error($conn);  
      }  
 }  
 ?> 