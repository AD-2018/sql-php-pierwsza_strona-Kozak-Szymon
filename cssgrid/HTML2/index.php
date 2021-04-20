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
                    $sql = "SELECT * FROM Produkt";

                    $result = mysqli_query($conn, $sql);
                    if ( $result) {
                    } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                    echo('<table border="1">');
                    echo('<th>id_produkt</th><th>produkt</th>');
                    while($row=mysqli_fetch_assoc($result)){
                    echo('<tr>');
                    echo('<td>'.$row['id_produkt'].'</td><td>'.$row['produkt'].'</td>'.
                
                
                    '<td>
	
                    <form action="DelProdukt.php" method="POST">
                            <input type="text" name="id_produkt" value="'.$row["id_produkt"].'" hidden>
                            <input type="submit" value="Usun">
                        </form>
              </td>');
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

                <h3>Usuwanie producenta</h3>
                <form action="DelProducent.php" method="POST">
	            <label>Podaj id:</label>  <input type="number" name="id_producent"></br>
                <input type="submit" value="usun producenta">
                </form>  

            </div>
            <div class="ww">
            3
            </div>
            <div class="qq">
                <?php
                    require_once("../../connect.php");

                    echo("<br>SKLEP<br>");
                    $sql = "SELECT id, producent, produkt FROM Sklep, Producent, Produkt WHERE Producent.id_producent = Sklep.id_producent AND Produkt.id_produkt = Sklep.id_produkt";

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
            <div class="zolte">
                5
            </div>
        </div>
    </body>
</html>