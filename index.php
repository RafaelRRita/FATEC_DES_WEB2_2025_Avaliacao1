<?php
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username']; 
    $password = $_POST['password'];
    if ($username == 'professor' && $password == 'professor') { 
        $_SESSION['user'] = 'professor'; 
        header('Location: cadastro_professor.php'); 
    } elseif ($username == 'biblio' && $password == 'biblio') { 
        $_SESSION['user'] = 'biblio'; 
        header('Location: cadastro_biblio.php'); 
        $error = "Login ou senha incorretos!";
    }else {
        $error = "Login ou senha incorretos!";
    }
}

if (isset($_GET['logout'])) { 
    session_destroy();     
    header('Location: index.php'); 
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="post" action="">
       <p><label>Usuário:</label>
        <input type="text" name="username" required><br>
        <label>Senha:</label>
        <input type="password" name="password" required><br>
        <button type="submit" name="login">Entrar</button></p>
    </form>
    <?php if (isset($error)) { echo $error; } ?> 
</body>
</html>