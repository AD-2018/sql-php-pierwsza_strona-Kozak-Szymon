<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="/style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Dane do bazy </title>
</head>
<body>	
<div class= "imie">    
<a href="https://github.com/AD-2018/sql-php-pierwsza_strona-Kozak-Szymon">github</a>
<h1>Szymon Kozak</h1>
</div>
<div class = "nav">
<?php include_once("../menu.php"); ?>
  </div>
<div class= "flexbox-containter">
    <div class="zawartosc">
<h3>DODAJ PRACOWNIKA</h3>
    <form action="/pracownicy/insert.php" method="POST">
        <p>Imie:</p>
        <input type="text" name="imie"></br>
    	<p>Dzial:</p>
        <input type="number" name="dzial"></br>
    	<p>Zarobki:</p>
        <input type="number" name="zarobki"></br>
	<p>Data urodzenia:</p>
        <input type="date" name="data_urodzenia"></br>
        <input type="submit" value="dodaj pracownika">
    </form>
    </div>
    <div class="zawartosc">
<h3>usuwanie pracownika</h3>
<form action="/pracownicy/delete.php" method="POST">
	<label>Podaj id:</label>  <input type="number" name="id_pracownicy"></br>
   <input type="submit" value="usuń pracownika">
</form>
    </div>
</div>
<?php
require_once("../connect.php");

$conn = new mysqli ($servername, $username, $password, $dbname);
echo("<div class='tabelki'>");
    echo("<div class='wnetrze'>");
echo("<h3> ŚCIĄGAWKA DZIAŁÓW </h3>");
$sql = "SELECT * FROM organizacja";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>ID Org</th><th>Nazwa Działu</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["id_org"].'</td><td>'.$row["nazwa_dzial"].'</td>');
                echo ('</tr>');
        }echo ('</table>');   
    echo("</div>");


    echo("<div class='wnetrze'>");
	echo("<h3> PIERWOWZÓR </h3>");
$sql = "SELECT * FROM pracownicy, organizacja WHERE id_org=dzial";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>ID</th><th>Imie</th><th>Zarobki</th><th>Data Urodzenia</th><th>Dzial</th><th>Usun</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["id_pracownicy"].'</td><td>'.$row["imie"].'</td><td>'.$row["zarobki"].'</td><td>'.$row["data_urodzenia"].'</td><td>'.$row["nazwa_dzial"].'</td>'.
		
	'<td>
	
	 	 <form action="delete.php" method="POST">
          		<input type="text" name="id_pracownicy" value="'.$row["id_pracownicy"].'" hidden>
          		<input type="submit" value="Usun">
    	  	</form>
	</td>');
	        echo ('</tr>');
  	}echo ('</table>');
    echo("</div>");
echo('</div>');
?>
</body>
</html>
