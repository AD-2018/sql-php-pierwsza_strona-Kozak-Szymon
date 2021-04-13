<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Szymon Kozak</title>
        <link rel="stylesheet" href="style2.css"/>
    </head>
    <body>
        <div class="container">
            <div class="hh">
            <?php
               require_once("../../connect.php");

               echo("<br>PRODUKT<br>");
            $sql = "SELECT * FROM Produkt ";
    echo($sql);

        $result = mysqli_query($conn, $sql);
        if ( $result) {
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        echo('<table border="1">');
        echo('<th>id_produkt</th><th>produkt</th>');
        while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_produkt'].'</td><td>'.$row['produkt'].'</td>');
        echo('</tr>');
        }
        echo('</table>');
                ?>
            </div>
            <div class="ee">
                1
            </div>
            <div class="yy">
            <?php
               require_once("../../connect.php");

               echo("<br>PRODUCENT<br>");
            $sql = "SELECT * FROM Producent";
    echo($sql);

        $result = mysqli_query($conn, $sql);
        if ( $result) {
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        echo('<table border="1">');
        echo('<th>id_producent</th><th>producent</th>');
        while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_producent'].'</td><td>'.$row['producent'].'</td>');
        echo('</tr>');
        }
        echo('</table>');
                ?>
            </div>
            <div class="ww">
            <?php
            require_once("../../connect.php");

      echo("<br>SKLEP<br>");
$sql = "SELECT id_produkt, producent, produkt FROM Sklep, Producent, Produkt WHERE Producent.id_producent = Sklep.id_producent AND Produkt.id_produkt = Sklep.id_produkt";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>ID</th><th>Producent</th><th>Produkt</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id'].'</td><td>'.$row['producent'].'</td><td>'.$row['produkt'].'</td>');
        echo('</tr>');
    }

echo('</table>');

?>
            </div>
            <div class="qq">
                3
            </div>
            <div class="zolte">
                5
            </div>
        </div>
    </body>
</html>