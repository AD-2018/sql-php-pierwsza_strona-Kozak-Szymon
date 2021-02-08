<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/style.css">
<title>Szymon Kozak</title>
</head>

<div class = "nav">
        <a class="panel" href="/index.php">strona główna</a>
        <br>
        <a class="panel" href="/pracownicy/pracownicy_organizacja.php">pracownicy organizacja</a>
        <br>
        <a class="panel" href="/pracownicy/funkcje_agregujace.php">Funkcje Agregujace</a>
        <br>
        <a class="panel" href="/pracownicy/data_czas.php">Data i Czas</a>
        <br>
        <a class="panel" href="/pracownicy/Formularz.html">Formularze</a>
        <br>
        <a class="panel" href="/pracownicy/strona.php">Strona Formularza</a>
    </div>


<?php
	echo("jesteś na stronie.php");
	
	echo("<ul>");
	echo("<li>".$_POST["firstname"]);
	echo("<li>".$_POST["lastname"]);
	echo("<li>".$_POST["city"]);
	echo("<li>".$_POST["phone"]);
	echo("<li>".$_POST["postcode"]);	
	echo("<ul>");
?>
