<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "celke";
$port = 3306;

try{
$conn = new PDO("mysql:host=$host;port=$port;dbname=".$dbname,$user,$pass);
 //echo"Conexao com banco de dados foi realizada com sucesso.";

}catch(PDOException $er){
    echo"Erro:Conexao com banco de dados nao foi realizada com sucesso. ERRO!!".$er->getMessage();

}




 ?>