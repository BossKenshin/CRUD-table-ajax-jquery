<?php


require_once 'dbconnect.php';

if(isset($_GET['name'])){

    $name = $_GET['name'];

    $sql = "INSERT INTO category (name)  VALUES('$name')";
    $result = mysqli_query($conn, $sql);
   
    if($result){
        echo "{\"res\" : \"success\"}";
    }else{
        echo "{\"res\" : \"error\"}";
    }
}




?>