<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="img/icon.png"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Marhey:wght@300..700&display=swap" rel="stylesheet">    
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizie</title>
    <link rel='stylesheet' href='start.css' />
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
        <main class="glowny">
                <input class="kod" placeholder="kod PIN gry">
                <button class="dolacz">Wprowadź</button>
                <p class='lacznik'>LUB</p>
                <button class='tworz'>Stwórz własny Quizie</button>
        </main>
        <form class='opcje'>
                    <label class='opcja'>Kategoria: </label>
                        <select class="dane">
                            <?php
                                $sql = "SELECT Kategoria FROM kategorie;";
                                $result = mysqli_query($conn,$sql);
                                $resultCheck = mysqli_num_rows($result);
                                if($resultCheck > 0 )
                                {
                                    while($row = mysqli_fetch_assoc($result))
                                        echo "<option>". $row['Kategoria'] . "</option>";
                                }
                            ?>
                        </select>
                    <label class='opcja'>Ilość pytań: </label><input min ='5' max='10'type='number' class='dane'>
                    <label class='opcja'>Czas na odpowiedź: </label><input min ='10'type='number' class='dane'>
                    <label class='opcja'>Losowa kolejność pytań</label><input type='checkbox' class='dane checkbox'>
                    <button class='create'>Utwórz Quizie</button>
                    <p class='edytor-btn'>Przejdź do edytora Quizie!</p>  
        </form>
        <div class='profil'>
            <img class ='podstawowe'src='img/icon_5.png'>
            <button class='btn'>Zmień awatar</button>
            <p class='nickname'>Wprowadź swój pseudonim</p>
            <input class='nick'>
            <button class='dolacz'>Dolacz do gry</button>
        </div>
        <div class='center'>
            <section class='avatary'>
                <div class='ikony'><img src='img/icon_1.png' class='ikon'><img src='img/icon_2.png' class='ikon'><img src='img/icon_3.png' class='ikon'><img src='img/icon_4.png' class='ikon'><img src='img/icon_5.png' class='ikon'><button class='close'>X</button></div>
            </section>
        </div>
        <div class='edytor'>
        <h2 class='naglowek'>Edytor Quizów</h2>
            <div class='quiz-list'>
                <?php
                    $sql = "SELECT * FROM kategorie;";
                    $result = mysqli_query($conn,$sql);
                    $resultCheck = mysqli_num_rows($result);
                    if($resultCheck > 0 )
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {
                            echo $row['Kategoria']. "()";
                            echo "<a id ='del' class='icon-red icon-cancel icon' href='delete.php?id=".$row['ID_Kategoria']."'></a><a id ='modify' class='icon-wrench icon' href='edytuj-quiz.php?Kategoria=".$row['Kategoria']."'></a>";
                        }
                    }
                    ?>
            </div>
            <div class='btn-add'>
                <button class='add-quiz'><i class='icon-plus'></i></button>
            </div>
        </div>
        <div class='center'>
            <form class='nowy-quiz' action='kategorie.php' method='POST'>
                    <input class='category' name='kategoria' placeholder='Podaj nową kategorie' value=''>
                    <button class='add-category category-btn'><i class='icon-plus'></i></button>
                    <button class='cancel-quiz category-btn'><i class='icon-cancel'></i></button>
            </form>
        </div>
    <script src='kreator.js'></script>
    <script src='przyciski.js'></script>     
</body>
</html>