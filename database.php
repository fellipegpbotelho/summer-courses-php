<?php

$dbName = 'minicurso-php';
$hostName = 'localhost';
$dbUsername = 'root';
$dbPassword = '5557975';

try{
    $db = new PDO("mysql:dbname={$dbName};host={$hostName}", $dbUsername, $dbPassword);
}catch(PDOException $exception){
    echo "Falhou: {$exception->getMessage()}";
}

function doQuery($sql, $db){

    $array = [];

    try{

        $query = $db->query($sql);

        $array['numRows'] = $query->rowCount();
        $array['result'] = $query->fetchAll(PDO::FETCH_OBJ);
    }catch(PDOException $exception){
        echo 'Erro: '.$exception->getMessage();
    }

    return $array;
}