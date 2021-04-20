<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Szymon Kozak</title>
        <link rel="stylesheet" href="style4.css"/>
    </head>
    <body>
        <div class="container">
            <header>
                <?php
                    require_once("../../connect.php");

                    echo("<br>FIRMA<br>");
                    $sql = "SELECT id_firma, pracownik, projekt FROM pracownik_projekt, pracownik, projekt WHERE pracownik.id = pracownik_projekt.id_pracownik AND projekt.id = pracownik_projekt.id_projekt";

                    $result = mysqli_query($conn, $sql);
                    if ( $result) {
                     } else {
                      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }

                    echo('<table border="1">');
                    echo('<th>id</th><th>pracownik</th><th>projekt</th><th>USUN</th>');

                    while($row=mysqli_fetch_assoc($result)){
                    echo('<tr>');
                    echo('<td>'.$row['id_firma'].'</td><td>'.$row['pracownik'].'</td><td>'.$row['projekt'].'</td>'.
                
                    '<td>
	
                    <form action="DelFirma.php" method="POST">
                            <input type="text" name="id_firma" value="'.$row["id_firma"].'" hidden>
                            <input type="submit" value="Usun">
                        </form>
              </td>');      
                
                    echo('</tr>');
                    }

                    echo('</table>');

                ?>
            </header>
            <nav>
                1
            </nav>
            <main>
                <?php
                    require_once("../../connect.php");

                    echo("<br>PROJEKT<br>");
                    $sql = "SELECT * FROM projekt";

                    $result = mysqli_query($conn, $sql);
                    if ( $result) {
                    } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                    echo('<table border="1">');
                    echo('<th>id</th><th>Projekt</th><th>USUN</th>');
                    while($row=mysqli_fetch_assoc($result)){
                    echo('<tr>');
                    echo('<td>'.$row['id'].'</td><td>'.$row['projekt'].'</td>'.
                
                    '<td>
	
                    <form action="DelProjekt.php" method="POST">
                            <input type="text" name="id" value="'.$row["id"].'" hidden>
                            <input type="submit" value="Usun">
                        </form>
                    </td>');     
                
                    echo('</tr>');
                    }
                    echo('</table>');
                ?>
            </main>
            <aside>
                4
            </aside>
            <footer>
                <?php
                    require_once("../../connect.php");

                    echo("<br>PRACOWNICY<br>");
                    $sql = "SELECT * FROM pracownik";

                    $result = mysqli_query($conn, $sql);
                    if ( $result) {
                    } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                    echo('<table border="1">');
                    echo('<th>id</th><th>pracownik</th>');
                    while($row=mysqli_fetch_assoc($result)){
                    echo('<tr>');
                    echo('<td>'.$row['id'].'</td><td>'.$row['pracownik'].'</td>');
                    echo('</tr>');
                    }
                    echo('</table>');
                ?>
                <form action="DelPracownik.php" method="POST">
	            <label>Podaj id:</label>  <input type="number" name="id"></br>
                <input type="submit" value="usun procownika">
                </form> 
            </footer>
        </div>
    </body>
</html>