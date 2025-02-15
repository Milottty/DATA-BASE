<?php


$host = "localhost";
$user = "root";
$pass = "";
$dbname = "dita8";
try{


    $conn = new PDO ("mysql:host=$host;dbname=$dbname", $user, $pass);

    // $sql = "CREATE DATABASE dita5";

    $sql = "CREATE TABLE user (id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    username VARCHAR(30) NOT NULL,
     password VARCHAR(30) NOT NULL)";



    $stmt = $dbname->prepare("SELECT users FROM tablename");
    $stmt->execute();
    $result=$stmt->fetchColumn();
    echo $result[0];

    $conn->exec($sql);



        // echo "Connected";
        // echo "Database is created";
        echo "Table created seccessfuly!"; 

}catch(Exeption $e){
    // echo "Not connected";
    // echo "Database not created, somthing went wrong";
    echo $e->getMessage();
}