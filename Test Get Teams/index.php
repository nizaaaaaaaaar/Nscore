<?php
$json = file_get_contents('equipes.json');
$json_data = json_decode($json,true);
foreach($json_data["data"] as $key => $value){
    echo "<img src='".$value["logo"]."'" . "<br>";
}

?>