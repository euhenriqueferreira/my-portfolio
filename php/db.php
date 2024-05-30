<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "portfolio_db";

    // DB Connection
    $connection = new mysqli($servername, $username, $password, $dbname);

    // Verify DB Connection
    if($connection->connect_error){
        die("Conexão falhou: " . connection->connect_error);
    }

?>