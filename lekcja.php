<html>
    <head>
        <meta charset="UTF-8">
        <title>szymon kozak</title>
        </head>
        <body>
            <h1 class="cos">STRONA</h1>
            <?php
            require_once("connect.php");
            require_once("function.php");

            selectColumn_werEDU("pracownik",["imie","zarobki","data_urodzenia","dzial"]);
            select("pracownicy",["imie","zarobki","data_urodzenia","dzial"]);
            ?>
</body>
</html>
