<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Szymon Kozak</title>
        <link rel="stylesheet" href="style3.css"/>
    </head>
    <body>
        <div class="container">
            <div class="header">
            <?php
            require_once("../../connect.php");

      echo("<br>SYSTEM INFORMATYCZNY<br>");
$sql = "SELECT id_inf, imie, rola FROM systeminf, osoby, rola WHERE rola.id = systeminf.id_rola AND osoby.id = systeminf.id_osoba";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>ID</th><th>osoba</th><th>rola</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_inf'].'</td><td>'.$row['imie'].'</td><td>'.$row['rola'].'</td>');
        echo('</tr>');
    }

echo('</table>');

?>
            </div>
            <div class="nav">
            <?php
               require_once("../../connect.php");

               echo("<br>OSOBY<br>");
            $sql = "SELECT * FROM osoby";
    echo($sql);

        $result = mysqli_query($conn, $sql);
        if ( $result) {
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        echo('<table border="1">');
        echo('<th>id</th><th>imie</th>');
        while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id'].'</td><td>'.$row['imie'].'</td>');
        echo('</tr>');
        }
        echo('</table>');
                ?>
            </div>
            <div class="main">
                2
            </div>
            <div class="aside">
                4
            </div>
            <div class="footer">
            <?php
               require_once("../../connect.php");

               echo("<br>ROLA<br>");
            $sql = "SELECT * FROM rola";
    echo($sql);

        $result = mysqli_query($conn, $sql);
        if ( $result) {
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        echo('<table border="1">');
        echo('<th>ID</th><th>rola</th>');
        while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id'].'</td><td>'.$row['rola'].'</td>');
        echo('</tr>');
        }
        echo('</table>');
                ?>
            </div>
        </div>
    </body>
</html>