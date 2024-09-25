<?php
include 'conexao.php';
session_start();

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$dataNascimento = $_POST['dataNascimento'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$email = $_POST['email'];
$contatoEmergencia = $_POST['contatoEmergencia'];



if($_GET['acao'] == 'cadastrar'){
    
$email = $_POST['email'];
    $sql = "INSERT INTO usuarios (nome_usuario, cpf_usuario, dataNasc_usuario, endereco_usuario, cep_usuario, email_usuario, contato_emergencia ) VALUES ('$nome','$cpf', '$dataNascimento', '$endereco', '$cep','$email' , '$contatoEmergencia')";
    
    if($conexao->query($sql) === TRUE){
        $_SESSION['cadastro_realizado'] = true;
        header('Location: ../index.PHP');
        $conexao->close();
    }

}

if($_GET['acao'] == 'excluir'){
    $id = $_GET['id'];

    $sql = "DELETE FROM usuarios WHERE id_usuario='$id' ";

    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_affected_rows($conexao)){
        $_SESSION['excluir_usuario'] = true;
        header("Location: ../paginas/listarFuncionarios.php");
    }
}

if($_GET['acao'] == 'editar'){
    $id = $_POST['id'];
    $sql = "UPDATE usuario SET nome_usuario='$nome', cpf_usuario='$cpf', dataNasc_usuario='$dataNascimento', endereco_usuario='$endereco',cep_usuario='$cep', email_usuario='$email', contato_emergencia='$contatoEmergencia'  WHERE id_usuario='$id'";

    $resultado = mysqli_query($conexao, $sql);

        if(mysqli_affected_rows($conexao)){
            $_SESSION['edicao_ok'] = true;
            header('Location: ../paginas/listarFuncionarios.php');
        }else{
            $_SESSION['edicao_erro'] = true;
            header('Location: ../paginas/listarFuncionarios.php');
        }

}
