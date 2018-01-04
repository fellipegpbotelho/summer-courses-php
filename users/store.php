<?php
session_start();

require '../database.php';

$name = addslashes($_REQUEST['name']);
$email = addslashes($_REQUEST['email']);
$password = md5($_REQUEST['password']);

$users = doQuery("INSERT INTO users SET name = '{$name}', email = '{$email}', password = '{$password}'", $db);

if($users['numRows'] == 1){
    $_SESSION['success'] = "Usuário cadastrado com sucesso!";
}else{
    $_SESSION['error'] = 'Ocorreu um erro!';
}

header("Location: index.php");