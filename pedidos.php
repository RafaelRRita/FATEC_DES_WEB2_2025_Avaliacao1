<?php
session_start();// Inicia a sessão

if (!isset($_SESSION['user']) || $_SESSION['user'] != 'professor') {// Verifica se o usuário está logado e se é um técnico
    header('Location: index.php'); // Redireciona para a página de login (index.php)
    exit();// Encerra o script
}
$handle = fopen("pedidos.txt", "r");
    while (!feof($handle)) {
        $line = fgets($handle); 
        echo $line . "<br>"; 
    }
    fclose($handle);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leitura pedidos</title>
</head>
<body>
<a href="cadastro_professor.php?logout=true">Voltar</a><br>
<a href="index.php?logout=true">Sair</a>
</body>
</html>