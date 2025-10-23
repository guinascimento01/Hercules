<?php
require_once 'DB/Database.php';
require_once 'MVC/Controller/AlunoController.php';

$AlunoController = new AlunoController($pdo);
$aluno = $AlunoController->listar();
?>