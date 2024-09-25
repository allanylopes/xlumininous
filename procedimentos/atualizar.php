<?php
    
    include "../conexao.php";
    

    $id = $_GET['id_usuario'];
    $nome = $_GET['nome'];
    $cpf = $_GET['cpf'];
    $dataNascimento = $_GET['dataNascimento'];
    $endereco = $_GET['endereco'];
    $cep = $_GET['cep'];
    $email = $_GET['email'];
    $contatoEmergencia = $_GET['contatoEmergencia'];

    
    $sql = "UPDATE usuarios SET nome_usuario = '$nome',  cpf_usuario = '$cpf', dataNasc_usuario = '$dataNascimento', endereco_usuario = '$endereco', cep_usuario = '$cep', contato_emergencia = '$contatoEmergencia', email_usuario = '$email' WHERE id_usuario = '$id'";


    mysqli_query($conexao, $sql);

  
    header('Location: ../listarFuncionarios.php');
?>