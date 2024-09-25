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

    echo $nome."<br>";
    echo $cpf."<br>";
    echo $dataNascimento."<br>";
    echo $endereco."<br>";
    echo $cep."<br>";
    echo $email."<br>";
    echo $contatoEmergencia."<br>";

    $sql = "INSERT INTO usuarios (nome_usuario, cpf_usuario, dataNasc_usuario, endereco_usuario, cep_usuario, email_usuario, contato_emergencia ) VALUES ('$nome','$cpf', '$dataNascimento', '$endereco', '$cep','$email' , '$contatoEmergencia')";

    $conexao->query($sql);

?>