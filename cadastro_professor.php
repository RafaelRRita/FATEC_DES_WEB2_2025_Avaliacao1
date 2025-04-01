<?php
session_start();
if (!isset($_SESSION["user"]) || $_SESSION['user'] != 'professor'){
    header('Location: index.php');
    exit();
}

if(isset($_POST['submit'])){
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editora = $_POST['editora'];
    $isbn = $_POST['isbn'];
    $file = 'pedidos.txt';
    $data = "$titulo | $autor | $editora | $isbn";

    if (!file_exists($file)){
        $handle = fopen($file, "w");
    }else{
        $handle = fopen($file, "a");
    }
    fwrite($handle, $data);
    fflush($handle);
    fclose($handle);
    $message="Salvo com sucesso!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Professor</title>
</head>
<body>
    <h1>Cadastro Professor</h1>
    <form action="" method = "post">
        <label >Titulo do livro:</label>
        <input type="text" name="titulo" id="titulo"><br>
        <label>Autor:</label>
        <input type="text" name= "autor" id = "autor"><br>
        <label>Editora:</label>
        <input type="text" name= "editora" id = "editora"><br>
        <label>ISBN:</label>
        <input type="text" name="isbn" id="isbn"><br>
        <button type = "submit" name = "submit">Cadastrar</button>
    </form>
    <a href="index.php" class="btn btn-danger">Sair da conta</a><br>
    <a href="pedidos.php" class="btn btn-danger">Visualizar pedidos</a>

</body>
</html>