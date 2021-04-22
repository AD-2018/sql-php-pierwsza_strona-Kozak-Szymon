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

                    $result = mysqli_query($conn, $sql);
                    if ( $result) {
                    } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                    echo('<table border="1">');
                    echo('<th>ID</th><th>osoba</th><th>rola</th><th>USUN</th>');

                    while($row=mysqli_fetch_assoc($result)){
                    echo('<tr>');
                    echo('<td>'.$row['id_inf'].'</td><td>'.$row['imie'].'</td><td>'.$row['rola'].'</td>'.
                
                    '<td>
	
                    <form action="DelSys.php" method="POST">
                            <input type="text" name="id_inf" value="'.$row["id_inf"].'" hidden>
                            <input type="submit" value="Usun">
                        </form>
                    </td>');
                
                    echo('</tr>');
                    }
                    echo('</table>');

                    ?>

                <form action="DelSys.php" method="POST">
	            <label>Podaj id:</label>  <input type="number" name="id_inf"></br>
                <input type="submit" value="usun">
                </form>

                </div>
                <div class="nav">
                    <?php
                    require_once("../../connect.php");

                    echo("<br>OSOBY<br>");
                    $sql = "SELECT * FROM osoby";

                    $result = mysqli_query($conn, $sql);
                    if ( $result) {
                    } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                    echo('<table border="1">');
                     echo('<th>id</th><th>imie</th>');
                    while($row=mysqli_fetch_assoc($result)){
                    echo('<tr>');
                    echo('<td>'.$row['id'].'</td><td>'.$row['imie'].'</td>'.

                    '<td>
	
                    <form action="DelOsoba.php" method="POST">
                            <input type="text" name="id" value="'.$row["id"].'" hidden>
                            <input type="submit" value="Usun">
                        </form>
                    </td>');

                    echo('</tr>');
                    }
                    echo('</table>');
                    ?>

                    <form action="DelOsoba.php" method="POST">
	            <label>Podaj id:</label>  <input type="number" name="id"></br>
                <input type="submit" value="usun">
                </form>

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

                     $result = mysqli_query($conn, $sql);
                     if ( $result) {
                     } else {
                     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
                     echo('<table border="1">');
                     echo('<th>ID</th><th>rola</th><th>USUN</th>');
                     while($row=mysqli_fetch_assoc($result)){
                     echo('<tr>');
                     echo('<td>'.$row['id'].'</td><td>'.$row['rola'].'</td>'.
                    
                     '<td>
	
                     <form action="DelRola.php" method="POST">
                             <input type="text" name="id" value="'.$row["id"].'" hidden>
                             <input type="submit" value="Usun">
                         </form>
                     </td>');
                     echo('</tr>');
                     }
                     echo('</table>');
                     ?>

                <form action="DelRola.php" method="POST">
	            <label>Podaj id:</label>  <input type="number" name="id"></br>
                <input type="submit" value="usun">
                </form>

                </div>
        </div>
    </body>
</html>