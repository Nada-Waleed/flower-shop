<?php
$host ="localhost";
$user ="root";
$pass ="";
$db   ="flower";

try{
    $conn =new pdo("mysql:host=$host;dbname=$db" ,$user ,$pass);
    
}
catch(PDOException $e){
    echo "not connected : ".$e->getMessage(); 

}

?>