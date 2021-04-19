<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Szymon Kozak</title>
</head>
<body>
<div class= "imie">    
<a href="https://github.com/AD-2018/sql-php-pierwsza_strona-Kozak-Szymon">github</a>
<h1>Szymon Kozak</h1>
</div>
    <div class = "nav">
    <?php include_once("menu.php"); ?>
    </div>
<?php   

if ($hostname == 'localhost') {
    require_once ("config.php");
}
require_once("connect.php");

$conn = new mysqli ($servername, $username, $password, $dbname);
echo("<div class='tabelki'>");
    echo("<div class='wnetrze'>");
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
    echo("</div>");
    echo("<div class='wnetrze'>");
     echo("<h3> ZAD 1 </h3>");
$sql = "SELECT * FROM pracownicy where dzial =2";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>imie</th><th>zarobki</th><th>data_urodzenia</th><th>dzial</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["imie"].'</td><td>'.$row["zarobki"].'</td><td>'.$row["data_urodzenia"].'</td><td>'.$row["dzial"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
    echo("</div>");
    echo("<div class='wnetrze'>");
       echo("<h3> ZAD 2 </h3>");
$sql = "SELECT * FROM pracownicy where (dzial = 2 or dzial = 3)";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>imie</th><th>zarobki</th><th>data_urodzenia</th><th>dzial</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["imie"].'</td><td>'.$row["zarobki"].'</td><td>'.$row["data_urodzenia"].'</td><td>'.$row["dzial"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
    echo("<div>");
    echo("<div class='wnetrze'>");
       echo("<h3> ZAD 3 </h3>");
$sql = "SELECT * FROM pracownicy where zarobki<30";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>imie</th><th>zarobki</th><th>data_urodzenia</th><th>dzial</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["imie"].'</td><td>'.$row["zarobki"].'</td><td>'.$row["data_urodzenia"].'</td><td>'.$row["dzial"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
    echo("<div>");
echo("</div>");
    ?>
    </body>
</html>
