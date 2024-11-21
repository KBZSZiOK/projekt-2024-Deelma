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

        <a href="index.php">Strona główna</a><br>
        <a href="tabele.php">Baza danych</a><br>
    </header>
    <nav>
        <h2><b>Witamy w YeCinema!</b></h2><br>
        <form method="post">
            <h2>Dodaj film</h2>
            Tytuł: <input type="text" name="tytul"><br>
            Reżyser: <input type="text" name="rezyser"><br>
            Czas trwania: <input type="number" min="0" name="czas_trwania"><br>
            <input type="submit" value="dodaj"><br><br>
        </form>
    </nav>
    <div id="animacja">
        <marquee behavior="reverse" id="animacja" scrollamount="11">
                    Lorem ipsum dolor sit amet cosik.
        </marquee>
    </div>
    <footer>
        <h4>2024 Playboy Carti<br>
        <b>Strone wykonał: Nikodem Warmowski</b></h4>
    </footer>
</body>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const marquee = document.getElementById('animacja');
});
</script>
</html>
