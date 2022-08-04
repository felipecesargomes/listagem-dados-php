<?php 
include_once "conexao.php";

$query_usuarios = "SELECT id, nome, email FROM USUARIOS LIMIT 10";
$result_usuarios = $conn->prepare($query_usuarios);
$result_usuarios->execute();
$dados = "";

while($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)) {
    extract($row_usuario);
    $img = $nome;
    $dados .= "<tr>
    <td>$id</td>
    <td>$nome</td>
    <td>$email</td>
    <td><img src='./img/$nome.jpg'></td>
    <td>Ações</td></tr>";
}

echo $dados;