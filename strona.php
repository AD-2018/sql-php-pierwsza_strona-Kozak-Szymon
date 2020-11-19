<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>

<div class = "nav">
        <a href="index.php">strona główna</a>
        <br>
        <a href="pracownicy_organizacja.php">pracownicy organizacja</a>
        <br>
        <a href="funkcje_agregujace.php">Funkcje Agregujace</a>
        <br>
        <a href="data_czas.php">Data i Czas</a>
        <br>
        <a href="Formularz.html">Formularze</a>
        <br>
        <a href="strona.php">Strona Formularza</a>
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
