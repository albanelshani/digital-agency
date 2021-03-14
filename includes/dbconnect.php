<?php

try{
    $pdo = new PDO("mysql:host=localhost;dbname=digitalagency", "root" , "");    
}catch(PDOException $pdo){
    die("Unsuccessful connection");
}
?>