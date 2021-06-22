<?php
include 'connect.php';

$querry = "SELECT * FROM picture";
if(isset($_POST["categorys"])){
    $categorys = explode(',', $_POST["categorys"]);
    $querry .= " WHERE";
    $skip = 1;
    foreach($categorys as $category){
        if($skip > 1){
            $querry .= " OR";
        }
        $skip++;
        $querry .= " Category=?";
    }
}
$querry .= " ORDER BY RAND()";
$sql = $dbh->prepare($querry);
if(isset($_POST["categorys"])){
    $param = 1;
    $categorys = explode(',', $_POST["categorys"]);
    foreach($categorys as $category){
        $sql->bindParam($param,$categorys[$param-1]);
        $param++;
    }
}
$sql->execute();
$rows = $sql->fetchAll(PDO::FETCH_ASSOC);
$html = "";
foreach($rows as $row){
    $html .= '<img src="./img/'.$row["Picture"].'" alt="">';
}

echo $html;