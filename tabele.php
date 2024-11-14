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
            <select name="tabele">
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
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "kino_4tig1";
        $conn = new mysqli($servername, $username, $password, $db);
    
        if($conn->connect_error){
            die("Błąd połączenia: " . $conn->connect_error);
        }else{
 
     if($_POST["tabele"] == "bilety"){
        $comm = "SELECT * FROM bilety";
        $result = $conn->query($comm);
        if($result->num_rows > 0){
         while($row = $result->fetch_assoc()){
             echo "id: " . $row["id"] . " |  seans_id: " . $row["seans_id"] . " | id sprzedawcy: " . $row["sprzedawca_id"] . " | ID klienta: " . $row["klient_id"] . " | cena: " . $row["cena"] . "<br>";
         }
     }
    }

    if($_POST["tabela"] == "filmy"){
        $comm = "SELECT * FROM filmy";
        $result = $conn->query($comm);
        if($result->num_rows > 0){
         while($row = $result->fetch_assoc()){
             echo "id: " . $row["id"] . " | tytuł: " . $row["tytul"] . " | rezyser: " . $row["rezyser"] . " | czas_trwania: " . $row["czas_trwania"] . "<br>";
         }
     }
    }

    if($_POST["tabela"] == "filmy_rodzaj"){
        $comm = "SELECT * FROM filmy_rodzaj";
        $result = $conn->query($comm);
        if($result->num_rows > 0){
         while($row = $result->fetch_assoc()){
             echo "id: " . $row["id"] . " | filmy_id: " . $row["filmy_id"] . " | rodzaj_id: " . $row["rodzaj_id"];
         }
     }
    }
    
    if($_POST["tabela"] == "klienci"){
        $comm = "SELECT * FROM klienci";
        $result = $conn->query($comm);
        if($result->num_rows > 0){
         while($row = $result->fetch_assoc()){
             echo "id: " . $row["id"] . " | imie: " . $row["imie"] . " | nazwisko: " . $row["nazwisko"] . " | mail: " . $row["mail"] . "<br>";
         }
     }
    }
 
    if($_POST["tabela"] == "rodzaj_filmu"){
        $comm = "SELECT * FROM rodzaj_filmu";
        $result = $conn->query($comm);
        if($result->num_rows > 0){
         while($row = $result->fetch_assoc()){
             echo "id: " . $row["id"] . " | nazwa: " . $row["nazwa"] . "<br>";
         }
     }
    }

    if($_POST["tabela"] == "sale"){
        $comm = "SELECT * FROM sale";
        $result = $conn->query($comm);
        if($result->num_rows > 0){
         while($row = $result->fetch_assoc()){
             echo "id: " . $row["id"] . " | ilosc miejsc: " . $row["ilosc_miejsc"] . "<br>";
         }
     }
    }

    if($_POST["tabele"] == "seanse"){
        $comm = "SELECT * FROM seanse";
        $result = $conn->query($comm);
        if($result->num_rows > 0){
         while($row = $result->fetch_assoc()){
             echo "id: " . $row["id"] . " | termin: " . $row["termin"] . " | sala_id: " . $row["sala_id"] . " | film_id: " . $row["film_id"] . " | liczba_wolnych_miejsc: " . $row["liczba_wolnych_miejsc"] . "<br>";
         }
     }
    }

    if($_POST["tabela"] == "sprzedawcy"){
        $comm = "SELECT * FROM sprzedawcy";
        $result = $conn->query($comm);
        if($result->num_rows > 0){
         while($row = $result->fetch_assoc()){
             echo "id: " . $row["id"] . " | imie: " . $row["imie"] . " | nazwisko: " . $row["nazwisko"]  . "<br>";
         }
     }
    }
}
 
?>
    </nav>
     <div id="animacja">
        <marquee behavior="reverse" id="animacja" scrollamount="11">
                    Lorem ipsum dolor sit amet cosik.
        </marquee>
    <footer>
        <h4>2024 Playboy Carti<br>
        <b>Strone wykonał: Nikodem Warmowski</b></h4>
    </footer>
    </div>
</body>
</html>