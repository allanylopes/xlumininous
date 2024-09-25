<?php
    include '../conexao.php';
    session_start();
    
    $nome = mysqli_real_escape_string($conexao, $_GET['nome']);
    $cpf = mysqli_real_escape_string($conexao, $_GET['cpf']);
    $dataNascimento = mysqli_real_escape_string($conexao, $_GET['dataNascimento']);
    $endereco = mysqli_real_escape_string($conexao, $_GET['endereco']);
    $cep = mysqli_real_escape_string($conexao, $_GET['cep']);
    $email = mysqli_real_escape_string($conexao, $_GET['email']);
    $contatoEmergencia = mysqli_real_escape_string($conexao, $_GET['contatoEmergencia']);

    $sql = "INSERT INTO usuarios (nome_usuario, cpf_usuario, dataNasc_usuario, endereco_usuario, cep_usuario, email_usuario, contato_emergencia ) VALUES ('$nome','$cpf', '$dataNascimento', '$endereco', '$cep', '$email', '$contatoEmergencia')";

    $conexao->query($sql);

    header("Location: ../paginas/cadEfetuado.php");



?>