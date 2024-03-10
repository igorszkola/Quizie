<?php
include('connection.php');
            $category = $_POST['kategoria'];
            $pytanie = $_POST['pytanie'];
            $poprawne = $_POST['p-odp'];
            $bledne1 = $_POST['b-odp1'];
            $bledne2 = $_POST['b-odp2'];
            $bledne3 = $_POST['b-odp3'];

               $sql = "SELECT Kategoria FROM kategorie;";
               $result = mysqli_query($conn,$sql);
               if(!empty($pytanie))
               {
                 $query = "INSERT INTO pytania VALUES('','$category','$pytanie','$poprawne','$bledne1','$bledne2','$bledne3')";  
                 $run = mysqli_query($conn,$query); 
                 if ($run) {  
                   while($row = mysqli_fetch_assoc($result))
                      header("location:edytuj-quiz.php?Kategoria=".$category."");
           
                 }else{  
                      echo "Error: ".mysqli_error($conn);  
                 }  
               }
               else
               {
                    while($row = mysqli_fetch_assoc($result))
                    header("location:edytuj-quiz.php?Kategoria=".$row['Kategoria']."");
               }
        ?>