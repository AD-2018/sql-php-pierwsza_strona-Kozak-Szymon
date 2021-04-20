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

                    echo("<br>PRAWNICY I SPRAWY<br>");
                    $sql = "SELECT id_sad, Imie, sprawa FROM prawnicy, sprawy, sad WHERE prawnicy.ID = sad.id_prawnik AND sprawy.ID = sad.id_sprawa";

                    $result = mysqli_query($conn, $sql);
                    if ( $result) {
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
            <div class="ww">
                1
            </div>
            <div class="qq">
                <?php
                    require_once("../../connect.php");

                    $sql = "SELECT * FROM sprawy";

                    $result = mysqli_query($conn, $sql);
                    if ( $result) {
                    } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                    echo('<table border="1">');
                    echo('<th>ID</th><th>Sprawa</th>');
                    while($row=mysqli_fetch_assoc($result)){
                    echo('<tr>');
                    echo('<td>'.$row['ID'].'</td><td>'.$row['sprawa'].'</td>'.
                
                    '<td>
	
                    <form action="DelSprawa.php" method="POST">
                            <input type="text" name="ID" value="'.$row["ID"].'" hidden>
                            <input type="submit" value="Usun">
                        </form>
              </td>');
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
                    $sql = "SELECT * FROM prawnicy";

                    $result = mysqli_query($conn, $sql);
                    if ( $result) {
                    } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                    echo('<table border="1">');
                    echo('<th>ID</th><th>Imie</th>');
                    while($row=mysqli_fetch_assoc($result)){
                    echo('<tr>');
                    echo('<td>'.$row['ID'].'</td><td>'.$row['Imie'].'</td>');
                    echo('</tr>');
                    }
                    echo('</table>');
                ?>
                
                <h3>Usuwanie prawnika</h3>
                <form action="DelPrawnik.php" method="POST">
	            <label>Podaj id:</label>  <input type="number" name="ID"></br>
                <input type="submit" value="usun prawnika">
                </form>

            </div>
        </div>
    </body>
</html>