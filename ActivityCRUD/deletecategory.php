<?php

require_once 'dbconnect.php';



if(isset($_GET['id'])){

    $id = $_GET['id'];

$sql = "DELETE FROM category WHERE id = '$id';";
$res = $conn->query($sql);

if($res){
    echo "{\"res\" : \"success\"}";

}
else{
    echo "{\"res\" : \"error\"}";

}
}







?>