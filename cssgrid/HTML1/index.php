<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Szymon Kozak</title>
        <link rel="stylesheet" href="style_1.css"/>
    </head>
    <body>
        <div class="container">
            <div class="hh">
               <?php
               require_once("../connect.php");
    
               $conn = new mysqli ($servername, $username, $password, $dbname);

               $sql = "SELECT * FROM Producent";
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>id_producent</th><th>producent</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
            echo ('<tr>');
            echo ('<td>'.$row["id_producent"].'</td><td>'.$row["producent"].'</td>');
            echo ('</tr>');
  	}echo ('</table>');
               ?>
            </div>
            <div class="ww">
                1
            </div>
            <div class="qq">
                2
            </div>
            <div class="ee">
                4
            </div>
            <div class="yy">
                3
            </div>
        </div>
    </body>
</html>