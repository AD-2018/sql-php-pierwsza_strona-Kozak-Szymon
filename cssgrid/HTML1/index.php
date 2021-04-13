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
               require_once("../../connect.php");

               echo("<br>SPRAWY<br>");
            $sql = "SELECT * FROM sprawy";
    echo($sql);

        $result = mysqli_query($conn, $sql);
        if ( $result) {
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        echo('<table border="1">');
        echo('<th>ID</th><th>Sprawa</th>');
        while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['ID'].'</td><td>'.$row['sprawa'].'</td>');
        echo('</tr>');
        }
        echo('</table>');
                ?>
            </div>
            <div class="ww">
                1
            </div>
            <div class="qq">
            <?php
            require_once("../../connect.php");

      echo("<br>PRAWNICY I SPRAWY<br>");
$sql = "SELECT id_sad, Imie, sprawa FROM prawnicy, sprawy, sad WHERE prawnicy.ID = sad.id_prawnik AND sprawy.ID = sad.id_sprawa";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>ID</th><th>PRAWNIK</th><th>SPRAWA</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_sad'].'</td><td>'.$row['Imie'].'</td><td>'.$row['sprawa'].'</td>');
        echo('</tr>');
    }

echo('</table>');

?>
            </div>
            <div class="ee">
                4
            </div>
            <div class="yy">
            <?php
               require_once("../../connect.php");

               echo("<br>SPRAWY<br>");
            $sql = "SELECT * FROM sprawy";
    echo($sql);

        $result = mysqli_query($conn, $sql);
        if ( $result) {
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        echo('<table border="1">');
        echo('<th>ID</th><th>Sprawa</th>');
        while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['ID'].'</td><td>'.$row['sprawa'].'</td>');
        echo('</tr>');
        }
        echo('</table>');
                ?>
            </div>
        </div>
    </body>
</html>