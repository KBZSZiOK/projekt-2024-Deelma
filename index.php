<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YeCinema</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="allshi">
    <header>
        <img id="logomale" src="yecinema.png" alt="LOGO">
    </header>
    <nav>
        <ul>    
            <li><a href="index.php">Dodawanie tabeli</a></li><br>
            <li><a href="tabele.php">Baza danych</a></li><br>
        </ul>
    </nav>
    <main>
        <section><h2><b>Witamy w YeCinema!</b></h2><br>
        <form method="post">
            <h2>Dodaj film</h2>
            Tytuł: <input type="text" name="tytul"><br>
            Reżyser: <input type="text" name="rezyser"><br>
            Czas trwania: <input type="number" min="0" name="czas_trwania"><br>
            <input type="submit" value="dodaj"><br><br>
        </form>
        </section>
        </main>
    <div id="animacja">
        <div id="animacja-content">
            Lorem ipsum asdasdas
        </div>
    </div>
    <footer>
        <h4>2024 Playboy Carti<br>
        <b>Strone wykonał: Nikodem Warmowski</b></h4>
    </footer>
</body>
<script src="script.js"></script>
</html>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kino_4tig1";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['tytul']) && isset($_POST['rezyser']) && isset($_POST['czas_trwania'])){
$tytul = $_POST['tytul'];
$rezyser = $_POST['rezyser'];
$czas_trwania = $_POST['czas_trwania'];
$sql = "INSERT INTO filmy (tytul, rezyser, czas_trwania) VALUES ('$tytul', '$rezyser', '$czas_trwania')";
if(mysqli_query($conn, $sql)){
    echo "Rekordy dodane.";
}else{
    echo "ERROR" . mysqli_error($conn);
}
}

?> 