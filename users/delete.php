<?php
session_start();

require '../database.php';

$user_id = $_REQUEST['id'];

$users = doQuery("DELETE FROM users WHERE id = {$user_id}", $db);

if($users['numRows'] == 1){
    $_SESSION['success'] = 'Usuário excluído com sucesso!';
}else{
    $_SESSION['error'] = 'Ocorreu um erro!';
}

header("Location: index.php");