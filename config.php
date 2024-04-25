<?php
$dbHost = 'localhost';
$dbUserName = 'root' ;
$dbPassword = '';
$dbName = 'formulario';

$conexao = new mysqli($dbHost, $dbUserName, $dbPassword, $dbName);

// if($conexao->connect_errno){
//     echo "Erro";
// }else{
//     echo "ok";
// }
?>