<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-Kozak-Szymon">github</a>
    <h1>Szymon Kozak</h1>
    
    <div class = "nav">
        <a href="index.php">strona główna</a>
        <br>
        <a href="pracownicy_organizacja.php">pracownicy organizacja</a>
        <br>
        <a href="funkcje_agregujace.php">Funkcje Agregujace</a>
    </div>
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
    
      echo("<h3> zad 1 </h3>");
$sql = "SELECT sum(zarobki) FROM pracownicy";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>suma_zarobkow</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["sum(zarobki)"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
 
    echo("<h3> zad 2 </h3>");
$sql = "SELECT sum(zarobki) FROM pracownicy where imie like'%a'";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>suma_zarobkow_kobiet</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["sum(zarobki)"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
    
    echo("<h3> zad 3 </h3>");
$sql = "SELECT sum(zarobki) FROM pracownicy WHERE imie NOT LIKE '%a' and (dzial=3 OR dzial=2)";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>suma_zarobkow_mężczyzn(działy 2 i 3)</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["sum(zarobki)"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
   
    
    echo("<h3> zad 4 </h3>");
$sql = "SELECT avg(zarobki) FROM pracownicy WHERE imie LIKE '%a'";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>srednia_zarobkow_mężczyzn(działy 2 i 3)</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["avg(zarobki)"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
   
    
      echo("<h3> zad 5 </h3>");
$sql = "SELECT AVG(zarobki) FROM pracownicy WHERE dzial=4";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>srednia_zarobkow_dział(4)(działy 2 i 3)</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["avg(zarobki)"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
    
    ?>
</body>
</html>
