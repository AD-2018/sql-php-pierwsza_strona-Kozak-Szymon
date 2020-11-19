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
	<label>Firstaname</label>
	echo("<br>".$_POST["firstname"]);
	<label>Firstaname</label>
	echo("<br>".$_POST["lastname"]);
	<label>Firstaname</label>
	echo("<br>".$_POST["city"]);
	<label>Firstaname</label>
	echo("<br>".$_POST["phone"]);
	<label>Firstaname</label>
	echo("<br>".$_POST["postcode"]);
		
	echo("<ul>");
?>
