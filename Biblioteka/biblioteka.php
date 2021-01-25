<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style-Biblioteka.css">
</head>
<body>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-Kozak-Szymon">github</a>
    <h1>Szymon Kozak</h1>
    
    <div class = "nav">
        <a href="pracownicy_organizacja.php">pracownicy organizacja</a>
        <br>
        <a href="funkcje_agregujace.php">Funkcje Agregujace</a>
        <br>
        <a href="data_czas.php">Data i Czas</a>
         <br> 
        <a href="Formularz.html">Formularze</a>
        <br>
        <a href="dane_do_bazy.php">Dane do bazy</a>
        <br>
        <a href="biblioteka.php">biblioteka</a>
    </div>
<?php   
$servername = "mysql-szymonkozak.alwaysdata.net";
$username = "217196_jan";
$password = "Kacpertorudamałpa_12";
$dbname = "szymonkozak_pracownicy";

$conn = new mysqli ($servername, $username, $password, $dbname);
    echo("<h3> BIBLIOTEKA </h3>");
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
    
    
    
    echo("<h3> AUTORZY </h3>");
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
    
    
    
    echo("<h3> TYTULY </h3>");
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
   
   
$conn = new mysqli ($servername, $username, $password, $dbname);
    echo("<h3> CALOSC </h3>");
$sql = "select (biblAutor_biblTytul.id) as ID_TAB, autor, tytul, biblWypoz from biblAutor_biblTytul,biblAutor,biblTytul where bibl_autor.id=bibl_autor_id and bibl_tytul.id=bibl_tytul_id";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>ID</th><th>Autor</th><th>Ksiazka</th><th>wyporzyczenia</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["ID_TAB"].'</td><td>'.$row["autor"].'</td><td>'.$row["ksiazka"].'</td><td>'.$row["wypoz"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
