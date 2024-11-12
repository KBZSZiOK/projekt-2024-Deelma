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
        <h1>YeCinema</h1>
        <h3><a href="index.php">Strona główna</a></h3><br>
        <h3><a href="tabele.php">Baza danych</a></h3><br>
    </header>
    <nav>
        <h2><b>Witamy w YeCinema!</b></h2><br>

        <form method="post" >
            <br>
            <h2>Dodaj film</h2>
            Tytuł: <input type="text" name="tytul"><br>
            Reżyser: <input type="text" name="rezyser"><br>
            Czas trwania: <input type="number" min="0" name="czas_trwania"><br>
            <input type="submit" value="dodaj"><br><br>
        </form>
    </nav>
    <footer>
        <h4>2024 Playboy Carti<br>
        <b>Strone wykonał: Nikodem Warmowski</b></h4>
    </footer>
    </div>
</body>
</html>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kino_4tig1";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$tytul = $_POST['tytul'];
$rezyser = $_POST['rezyser'];
$czas_trwania = $_POST['czas_trwania'];

$sql = "INSERT INTO filmy (tytul, rezyser, czas_trwania) VALUES ('$tytul', '$rezyser', '$czas_trwania')";

if(mysqli_query($conn, $sql)){
    echo "Rekordy dodane.";
}else{
    echo "ERROR" . mysqli_error($conn);
}

?> 