<?php
function dbConnexion(){
    $connexion = null;
    $nam = "rendom_pick";
    $host = "localhost";
    try{
        $connexion = new PDO("mysql:host=$host;dbname=$nam", "root", "");
    }catch (PDOException $e){
        $connexion = $e->getMessage();
    }
    return $connexion;      
}