<?php
$servidor = 'localhost';
$usuario  = 'root';
$senha    = '';
$db       = 'irisdb';

$mysqli = new mysqli($servidor, $usuario, $senha, $db);

if($mysqli->connect_error){
    echo "conexao_erro";
	die($mysqli->connect_error);
}
else{
    //echo "conexao_ok";
}

?>