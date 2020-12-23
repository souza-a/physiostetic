
<?php

$nomeDoServidor = "localhost";
$nomeDoUsuario = "root";
$senha = "";
$db = "physiostetic";
global $conn; // variavel global de conexão

try{
    $conn = new PDO("mysql:host=$nomeDoServidor;dbname=$db", $nomeDoUsuario, $senha);
    //configurando a exceção ao modo de erro PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conexão Bem Executada";
} catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}


?>