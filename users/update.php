<?php
session_start();

require '../database.php';

$user_id = $_REQUEST['user_id'];
$name = addslashes($_REQUEST['name']);
$email = addslashes($_REQUEST['email']);

$users = doQuery("UPDATE users SET name = '{$name}', email = '{$email}' WHERE id = {$user_id}", $db);

if($users['numRows'] == 1){
    $_SESSION['success'] = "Usuário alterado com sucesso!";
}else{
    $_SESSION['error'] = 'Ocorreu um erro!';
}

header("Location: index.php");