<?php
include '../php/conexao.php';
session_start();

$sql = "SELECT * FROM usuarios";

$resultado = mysqli_query($conexao, $sql);

echo "
<table border='1px' width='500px'>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>Data de Nascimento</th>
        <td>Endereço</td>
        <td>CEP</td>
        <th>E-mail</th>
        <th>Contato de Emergencia</th>

    </tr>
";

while ($linha = mysqli_fetch_assoc($resultado)) {
    echo "
        <tr>
            <td>" . $linha['id_usuario'] . "</td>
            <td>" . $linha['nome_usuario'] . "</td>
            <td>" . $linha['cpf_usuario'] . "</td>
            <td>" . $linha['dataNasc_usuario'] . "</td> 
            <td>" . $linha['endereco_usuario'] . "</td>
            <td>" . $linha['cep_usuario'] . "</td>
            <td>" . $linha['email_usuario'] . "</td> 
            <td>" . $linha['contato_emergencia'] . "</td>
            <td>
            <a href='cadFunc.php?e=1&id=" . $linha['id_usuario'] . "'>Editar</a> - 
            <a href='../php/procFunc.php?acao=excluir&id=" . $linha['id_usuario'] . "'>Excluir</a>
            </td>
        </tr>
    ";
}

echo "</table>";

if (isset($_SESSION['excluir_usuario'])) {
    echo "Registro excluido com sucesso!";
}
unset($_SESSION['excluir_usuario']);


