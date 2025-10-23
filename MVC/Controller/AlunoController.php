<?php
require_once 'C:/Turma1/xampp/htdocs/Hercules/MVC/Model/AlunoModel.php';

class AlunoController{
    private $AlunoModel;

public function __construct ($pdo){
    $this->AlunoModel = new AlunoModel($pdo);
}
 public function listar() {
        $alunos = $this->AlunoModel->buscarTodosAlunos();
        include_once "C:/Turma1/xampp/htdocs/Hercules/MVC/View/Aluno/listar.php";
        return $alunos;
    }
    public function buscarAluno($id){
        $usuario = $this->AlunoModel->buscarAluno($id);
        return $usuario;

    }

 public function cadastrar($nome, $email, $senha){
    return $this->AlunoModel->cadastrarAluno($nome, $email, $senha);
}

public function deletar($id){
    $usuario = $this->AlunoModel->deletarAluno($id);

}

public function editar($id, $nome, $email, $senha){
    return $this->AlunoModel->editarAluno($id, $nome, $email, $senha);
}

public function autenticar($email, $senha){
    return $this->AlunoModel->autenticar($email, $senha);
}
}
?>
