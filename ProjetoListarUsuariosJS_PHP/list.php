<?php 
include_once"conexao.php";

$query_usuarios  = "SELECT id,nome,email FROM usuarios LIMIT 10";
$result_usuarios = $conn->prepare($query_usuarios);
$result_usuarios->execute();

$dados = "";

while($row_usuarios = $result_usuarios->fetch(PDO::FETCH_ASSOC)){
  // var_dump($row_usuarios);
    extract($row_usuarios);
    $dados .=  "
                <tr>
                <td>$id</td>
                <td>$nome</td>
                <td>$email</td>
                </tr>
              ";
    /* echo"<td>$id<td>";
    echo"<td>$nome<td>";
    echo"<td>$email<td>";
    echo"<td>Acoes<td>";*/
}

echo $dados;