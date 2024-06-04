<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "portfolio_db";
class Artigo{

    // DB Connection

    public function getArticle($name_article, $multiple) {
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar conexão
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        $name_article = $conn->real_escape_string($name_article);
        $sql = "SELECT * FROM artigos WHERE name = '$name_article'";

        // Executar a consulta SQL
        $result = $conn->query($sql);

        // Verificar se há resultados
        if ($result->num_rows > 0) {
            // Retornar o conteúdo do artigo (único ou múltiplo)
            if ($multiplo) {
                $artigos = array();
                while ($row = $result->fetch_assoc()) {
                    $artigos[] = $row;
                }
                return $artigos;
            } else {
                return $result->fetch_assoc();
            }
        } else {
            return "Nenhum artigo encontrado.";
        }

    }
}
?>