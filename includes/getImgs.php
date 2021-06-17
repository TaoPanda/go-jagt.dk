<?php
include 'connect.php';
print_r($_POST);
$querry = "SELECT * FROM picture";
if(isset($_POST["categorys"])){
    $querry .= " WHERE";
    $skip = 1;
    foreach($_POST["categorys"] as $category){
        if($skip > 1){
            $querry .= " OR";
        }
        $skip++;
        $querry .= " Category=?";
    }
}
$sql = $dbh->prepare($querry);
if(isset($_POST["categorys"])){
    foreach($_POST["categorys"] as $category){
        $sql->bind_param('s', $category);
    }
}
$sql->execute();
$rows = $sql->fetchAll();
$html = "";
foreach($rows as $row){
    $html .= '<img src="./img/'.$row["Picture"].'" alt="">';
}

echo $html;