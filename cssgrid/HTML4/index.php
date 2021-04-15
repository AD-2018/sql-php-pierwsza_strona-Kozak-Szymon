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

      echo("<br>SYSTEM INFORMATYCZNY<br>");
$sql = "SELECT id, pracownik, projekt FROM pracownik_projekt, pracownik, projekt WHERE pracownik.id = pracownik_projekt.id_projekt AND projekt.id = pracownik_projekt.id_projekt";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>ID</th><th>Pracownik</th><th>Projekt</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id'].'</td><td>'.$row['pracownik'].'</td><td>'.$row['projekt'].'</td>');
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
    echo($sql);

        $result = mysqli_query($conn, $sql);
        if ( $result) {
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        echo('<table border="1">');
        echo('<th>id</th><th>Projekt</th>');
        while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id'].'</td><td>'.$row['projekt'].'</td>');
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
    echo($sql);

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
            </footer>
        </div>
    </body>
</html>