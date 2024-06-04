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

    //Hobbies
    $sql = "SELECT id, nome, descricao FROM hobbies ORDER BY ordem";
    $result = $connection->query($sql);

    if($result->num_rows > 0){
        $hobbies = array();

        // Loop através dos resultados e armazenar os dados em um array
        while ($row = $result->fetch_assoc()) {
            $hobbies[] = $row;
        }
    } else {
        echo "Nenhum hobby encontrado.";
    }
    
    // Fechar conexão
    $connection->close();


?>