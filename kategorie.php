<?php
$serverName = "localhost";
$userName = "root";
$password ="";
$dbName = "quizie";
$conn = mysqli_connect($serverName,$userName,$password,$dbName);
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $category = filter_input(INPUT_POST,'kategoria',FILTER_SANITIZE_SPECIAL_CHARS);
    if(empty($category))
    {
    echo '<script>alert("brak kategorii")</script>';
    }
    else
    {
        $sql = "INSERT INTO kategorie (Kategoria) VALUES ('$category')";
        mysqli_query($conn,$sql);
        echo $category."<br>";
        echo "<i class='icon-cancel icon'></i><i class='icon-wrench icon'></i>";
    }
    header("Location: start.php");
}
?>