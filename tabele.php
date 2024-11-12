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
        <a href="index.php">Strona główna</a><br>
        <a href="tabele.php">Baza danych</a><br>
    </header>
    <nav>
        <h2><b>Witamy w YeCinema!</b></h2><br>

        <form method="post">
            <h2>Wyswietl tabele</h2>
            <select name="tabela">
                <option value="bilety">bilety</option>
                <option value="filmy">filmy</option>
                <option value="filmy_rodzaj">filmy_rodzaj</option>
                <option value="klienci">klienci</option>
                <option value="rodzaj_filmu">rodzaj_filmu</option>
                <option value="sale">sale</option>
                <option value="seanse">seanse</option>
                <option value="sprzedawcy">sprzedawcy</option>
            </select>
            <input type="submit" value="wyswietl">
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

if(isset($_POST["tabela"]) && $_POST["tabela"] == "bilety"){
    var_dump($_POST["tabela"]); // Sprawdzanie wartości $_POST["tabela"]
    
    $sql = "SELECT * FROM bilety";
    $result = $conn->query($sql);
    if (!$result) {
        echo "Error: " . $conn->error; // Sprawdzanie błędów w zapytaniu
    } elseif ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - seansid:" . $row["seans_id"]. " - sprzedawca_id " . $row["sprzedawca_id"]. " - klient id: " . $row['klient_id'] . " - cena: " . $row['cena'] ."<br>";
        }
    } else {
        echo "0 results";
    }
}



?> 