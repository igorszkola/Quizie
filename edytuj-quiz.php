
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/png" href="img/icon.png"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Marhey:wght@300..700&display=swap" rel="stylesheet">  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edytuj Quizie</title>
    <link rel='stylesheet' href='edit.css' />
    <link rel='stylesheet' href='css/fontello.css' />
</head>
<body>
<div class='center'>
        <header class='header'>
        <h1 class="marhey"><span class="blue">Q</span>uizie</h1>
            <div class='line'>
                <div class='icon-reply-1'></div>
                <div class='icon-info'></div>
            </div>
        </header>
    </div>
    <div class='glowny'>
                <?php
                include 'connection.php'; 
                if(isset($_GET['Kategoria'])) {  
                    $name = $_GET['Kategoria'];  
                    echo "<h2 class='naglowek'>Edytujesz: $name</h2>";
                }
                        $sql = "SELECT * FROM `pytania` where Kategoria = '$name';";
                        $result = mysqli_query($conn,$sql);
                        $resultCheck = mysqli_num_rows($result);
                        if($resultCheck > 0 )
                        {
                            while($row = mysqli_fetch_assoc($result))
                            {
                            echo "<section class='zestaw'>";
                            echo  "<div class='pytanie'>".$row['Pytanie']."</div>";
                            echo  "<div class='odp'>".$row['Poprawna']."</div>";
                            echo  "<div class='odp-b'>".$row['Bledna1']."</div>";
                            echo  "<div class='odp-b'>".$row['Bledna2']."</div>";
                            echo  "<div class='odp-b'>".$row['Bledna3']."</div>";
                            echo "<a href='edit.php?id=".$row['id']."?kategoria=".$row['Kategoria']."'><button class='edit btn icon-pencil'></button></a>";
                            echo "<a href='del.php?id=".$row['id']."?kategoria=".$row['Kategoria']."'><button class='del btn icon-trash'></button></a><br>";
                            echo "</section>";
                            }
                        }
                ?>
                <button class='btn add icon-plus'></button>
    </div>
    <div class='center'>
        <div class='nowe-pytanie'>
            <form class='dane' action='add.php' method='POST'>
                <label class='pytanie'>Pytanie</label><input name='pytanie' class='pytanie'></input>
                <input  name='kategoria' value='<?php echo $name ?>' class='none pytanie'></input>
                <label>Poprawna Odpowiedź</label><input name='p-odp' class='odp'></input>
                <label>Błędna Odpowiedź 1</label><input name='b-odp1' class='odp-b'></input>
                <label>Błędna Odpowiedź 2</label><input name='b-odp2' class='odp-b'></input>
                <label>Błędna Odpowiedź 3</label><input name='b-odp3' class='odp-b'></input>
                <button type='submit' class='add-question'><i class='icon-ok'></i></button>
                <div class='cancel-question'><i class='icon-cancel'></i></div>
            </form>
        </div>
        
    </div>
    <script src='edycja.js'></script>
</body>
</html>