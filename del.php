<?php   
 include 'connection.php';  
    $sql = "SELECT Kategoria FROM kategorie;";
    $result = mysqli_query($conn,$sql);
 if (isset($_GET['id'])) {  
      $id = $_GET['id'];  
      $query = "DELETE FROM `pytania` WHERE id = '$id'";  
      $run = mysqli_query($conn,$query);  
      if ($run) {  
        while($row = mysqli_fetch_assoc($result))
           header("location:edytuj-quiz.php?Kategoria=".$row['Kategoria']."");

      }else{  
           echo "Error: ".mysqli_error($conn);  
      }  
 }  
 ?> 