<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/style.css">
<title>Szymon Kozak</title>
</head>
<div class = "nav">
<?php include_once("../menu.php"); ?>
    </div>


<?php
	echo("jesteś na stronie.php");
	
	echo("<ul>");
	echo("<li>".$_POST["firstname"]);
	echo("<li>".$_POST["lastname"]);
	echo("<li>".$_POST["city"]);
	echo("<li>".$_POST["phone"]);
	echo("<li>".$_POST["postcode"]);	
	echo("<ul>");
?>
