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
        echo "<li>ok";
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