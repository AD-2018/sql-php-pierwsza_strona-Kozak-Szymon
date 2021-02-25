<?php
echo("jestes w new_autor.php <br>");
echo "<li>". $_POST['autor'];

require_once("../connect.php");

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//definiujemy zapytanie $sql
$sql = "INSERT INTO bibl_autor (id_autor,autor) 
      VALUES (null, '".$_POST['autor']."')";

//wyświetlamy zapytanie $sql
echo "<li>". $sql;

if ($conn->query($sql) === TRUE) {
   header ('Location:https://kozak-szymon.herokuapp.com/Biblioteka/biblioteka.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 