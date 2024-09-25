<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$conexao = new mysqli('localhost', 'root', '', 'xluminous');

$conexao->set_charset('utf8');

printf("Success... %s\n", $conexao->host_info);