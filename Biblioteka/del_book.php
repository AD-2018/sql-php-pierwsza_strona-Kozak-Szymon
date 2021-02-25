<?php
echo("Delete");
echo $_POST['id_tytul'];

require_once("../connect.php");


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "DELETE FROM bibl_tytul WHERE id_tytul=".$_POST['id_tytul'];

echo $sql;

if ($conn->query($sql) === TRUE) {
    header ('Location:https://kozak-szymon.herokuapp.com/Biblioteka/biblioteka.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>