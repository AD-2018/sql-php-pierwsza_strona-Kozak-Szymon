<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/style.css">
<title>Szymon Kozak</title>
</head>
<body>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-Kozak-Szymon">github</a>
    <h1>Szymon Kozak</h1>
    
    <div class = "nav">
        <a href="/index.php">strona główna</a>
        <br>
        <a href="/pracownicy/pracownicy_organizacja.php">pracownicy organizacja</a>
        <br>
        <a href="/pracownicy/funkcje_agregujace.php">Funkcje Agregujace</a>
        <br>
        <a href="/pracownicy/data_czas.php">Data i Czas</a>
         <br> 
        <a href="/pracownicy/Formularz.html">Formularze</a>
        <br>
        <a href="/pracownicy/dane_do_bazy.php">Dane do bazy</a>
        <br>
        <a href="/Biblioteka/biblioteka.php">biblioteka</a>
    </div>

    <h3>DODAJ TYTUL</h3>
    <form action="/Biblioteka/new_book.php" method="POST">
    	<p>Tytul:</p>
        <input type="text" name="tytul"></br>
        <input type="submit" value="dodaj tytul">
    </form>
    
    <h3>DODAJ AUTORA</h3>
    <form action="/Biblioteka/new_autor.php" method="POST">
    	<p>Tytul:</p>
        <input type="text" name="autor"></br>
        <input type="submit" value="dodaj autora">
    </form>

<?php   
$servername = "mysql-szymonkozak.alwaysdata.net";
$username = "217196_jan";
$password = "Kacpertorudamałpa_12";
$dbname = "szymonkozak_pracownicy";

$conn = new mysqli ($servername, $username, $password, $dbname);
        echo('<h2>BIBLIOTEKA<h2>');
	echo('<br>');
	echo('<h2>Listy:<h2>');
	echo('<h2>lista NR 1<h2>');
	$sql ="SELECT autor,tytul from bibl_autor,bibl_tytul, bibl_book where bibl_autor.id_autor=bibl_book.id_autor and bibl_tytul.id_tytul=bibl_book.id_tytul";
$result = mysqli_query($conn, $sql);
if ( $result) {
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<select name="bibl_autor">');
	while($row = mysqli_fetch_assoc($result)) {
          echo '<option value="'.$row['id'].'">';
	    echo($row['autor'].', '.$row['tytul']);
 	    echo "</option>";
	};
	echo('</select>');

	
	
    echo("<h3> CALOSC </h3>");
$sql = "SELECT * FROM bibl_autor,bibl_tytul, bibl_book where bibl_autor.id_autor=bibl_book.id_autor and bibl_tytul.id_tytul=bibl_book.id_tytul";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>ID</th><th>Autor</th><th>Ksiazka</th><th>wyporzyczenia</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["ID_TAB"].'</td><td>'.$row["autor"].'</td><td>'.$row["tytul"].'</td><td>'.$row["wypoz"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
	
	
	
    echo("<h3>Baza</h3>");
$sql = "SELECT * FROM bibl_book";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>ID</th><th>Pisarz</th><th>Powiesc</th><th>Wypozyczenia</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["id_book"].'</td><td>'.$row["id_autor"].'</td><td>'.$row["id_tytul"].'</td><td>'.$row["wypoz"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
    
    
 
    echo("<h3>Pisarz</h3>");
$sql = "SELECT * FROM bibl_autor";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>ID</th><th>Autor</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["id_autor"].'</td><td>'.$row["autor"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
    
    
    
    echo("<h3>Ksiazka</h3>");
$sql = "SELECT * FROM bibl_tytul";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>ID</th><th>ksiazka</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["id_tytul"].'</td><td>'.$row["tytul"].'</td>');
                echo ('</tr>');
        }echo ('</table>');