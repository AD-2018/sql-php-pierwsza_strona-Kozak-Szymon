<?php
echo("Delete");
echo $_POST['ID'];

require_once("../../connect.php");


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "DELETE FROM Producent WHERE id_producent=".$_POST['id_producent'];

echo $sql;

if ($conn->query($sql) === TRUE) {
    header ('Location:https://kozak-szymon.herokuapp.com/cssgrid/HTML2/index.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>