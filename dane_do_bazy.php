<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Dane do Bazy</title>
</head>
<body>	
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
        	<a href="delete.php">Usuwanie z bazy</a>
  </div>
<form action="insert.php" method="POST">
	<label>Imie:</label>
	<input type="text" name="imie"></br>
	<label>Dzial:</label>
	<input type="number" name="dzial"></br>
	<label>Zarobki</label>
	<input type="number" name="zarobki"></br>
	<label>Data urodzenia</label>
	<input type="date" name="data_urodzenia"></br>
	<input type="submit" value="dodaj pracownika">
</form>


<h3>usuwanie pracownika</h3>
<form action="delete.php" method="POST">
	<label>Podaj id:</label>  <input type="number" name="id_pracownicy"></br>
   <input type="submit" value="usuń pracownika">
</form>

<?php
$servername = "mysql-szymonkozak.alwaysdata.net";
$username = "217196_jan";
$password = "Kacpertorudamałpa_12";
$dbname = "szymonkozak_pracownicy";

$conn = new mysqli ($servername, $username, $password, $dbname);
    echo("<h3> PIERWOWZÓR </h3>");
$sql = "SELECT * FROM pracownicy";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>imie</th><th>zarobki</th><th>data_urodzenia</th><th>dzial</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["imie"].'</td><td>'.$row["zarobki"].'</td><td>'.$row["data_urodzenia"].'</td><td>'.$row["dzial"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
?>
</body>
</html>