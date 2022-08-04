<?php

$host = "localhost";
$user = "root";
$pass = "root";
$dbname = "felipe-bd";
$port = 3306;

try {
    $conn = new PDO("mysql:host=$host;post=$port;dbname=" . $dbname, $user, $pass);

}catch(PDOException $err) {
    echo "Erro: Falha na conexão: " . $err->getMessage();
}
