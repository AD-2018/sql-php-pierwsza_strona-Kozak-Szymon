<?php
echo("Delete");
echo $_POST['ID'];

require_once("../../connect.php");


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "DELETE FROM prawnicy WHERE ia_sad=".$_POST['id_sad'];

echo $sql;

if ($conn->query($sql) === TRUE) {
    header ('Location:https://kozak-szymon.herokuapp.com/cssgrid/HTML1/index.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>