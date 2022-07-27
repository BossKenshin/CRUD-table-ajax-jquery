<?php

require_once 'dbconnect.php';

if( isset($_GET['id']) && isset($_GET['name'])){

    $name = $_GET['name'];
    $id = $_GET['id'];

    $sql = "UPDATE category SET name = '$name' WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
   
    if($result){
        echo "{\"res\" : \"success\"}";
    }else{
        echo "{\"res\" : \"error\"}";
    }

}





?>