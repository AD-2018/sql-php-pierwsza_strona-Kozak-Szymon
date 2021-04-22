<?php 
function selectColumn_werEDU($tableName, $myColumns=[]){
    print_r($mycolumns);
    echo ($mycolumns[0]);
    echo ($mycolumns[1]);

    require_once("connect.php");

    $kolumny_show= implode(',', $mycolumns);
    echo $kolumny_show;
    $kolumny = implode(',', $mycolumns);
    echo ("<li>wygenerowany SELECT: "."<br>");
    $sql="SELECT ".$kolumny."FROM".$tableName;

    echo $sql;
    $result = $conn->query($sql);

    echo("<p><table border=1>");
    echo("<tr>");
    for($i=0; $i<count($mycolumns);$i++){
        echo("<th>".$mycolumns[$i]."</th>");
    }
    while($row = $result->fetch_assoc() ){
        echo("<tr>");
        for($i=0; $i<count($mycolumns); $i++){
            echo( "<td>".$row[$mycolumns($i)]."</td>" );
        }
        echo("</tr>");
    }
    echo("</table></p>");
}
?>
