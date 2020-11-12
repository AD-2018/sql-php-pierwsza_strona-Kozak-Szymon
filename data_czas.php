<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-Kozak-Szymon">github</a>
    <h1>Szymon Kozak</h1>
    
    <div class = "nav">
        <a href="index.php">Strona Główna</a>
        <br>
        <a href="pracownicy_organizacja.php">Pracownicy Organizacja</a>
        <br>
        <a href="funkcje_agregujace.php">Funkcje Agregujace</a>
        <br>
        <a href="data_czas.php">Data i Czas</a>
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
    
    echo("<h3> ZAD 1</h3>");
$sql = "SELECT * ,YEAR(curdate())-YEAR(data_urodzenia) AS wiek FROM pracownicy;";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>imie</th><th>wiek</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["imie"].'</td><td>'.$row["wiek"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
    
       echo("<h3> ZAD 2</h3>");
$sql = "SELECT * ,YEAR(curdate())-YEAR(data_urodzenia) AS wiek FROM pracownicy, organizacja WHERE id_org=dzial and nazwa_dzial='serwis'";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>imie</th><th>wiek</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["imie"].'</td><td>'.$row["wiek"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
    
    echo("<h3> ZAD 3 </h3>");
$sql = "SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as suma_lat from pracownicy";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>Suma Lat</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["suma_lat"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
    
    echo("<h3> ZAD 4 </h3>");
$sql = "SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as suma from pracownicy,organizacja WHERE id_org=dzial and nazwa_dzial='handel'";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>Suma_lat_dzialu_handel</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["suma"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
    
    echo("<h3> ZAD 5 </h3>");
$sql = "SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as suma_lat_kobiet from pracownicy WHERE imie LIKE '%a'";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>Suma_lat_kobiet</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["suma_lat_kobiet"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
    
    echo("<h3> ZAD 6 </h3>");
$sql = "SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as suma_lat_mezczyzn from pracownicy WHERE imie not LIKE '%a'";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>Suma_lat_mezczyzn</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["suma_lat_mezczyzn"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
    
    echo("<h3> ZAD 7 </h3>");
$sql = "SELECT AVG(YEAR(CURDATE()) - YEAR(data_urodzenia)) as srednia, nazwa_dzial from pracownicy,organizacja WHERE id_org=dzial GROUP BY dzial";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>srednia</th><th>nazwa_dzial</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["srednia"].'</td><td>'.$row["nazwa_dzial"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
    
    echo("<h3> ZAD 8 </h3>");
$sql = "SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as suma_lat, nazwa_dzial from pracownicy,organizacja WHERE id_org=dzial GROUP BY dzial";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>suma_lat</th><th>nazwa_dzial</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["suma_lat"].'</td><td>'.$row["nazwa_dzial"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
    
        ?>
        </body>
        </html>
