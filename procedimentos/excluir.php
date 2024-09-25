<?php
    include "../conexao.php";

   
    $id = $_GET['id_usuario'];

    
    $sql = "DELETE FROM usuarios WHERE id_usuario = '$id'";

    
    $conexao->query($sql);

    header("Location: ../listarFuncionarios.php");
?>