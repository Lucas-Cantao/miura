<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection</title>
</head>
<body>
    <?php

$servidor = "localhost";
$user = "root";
$senha = "";
$database = "logins";
$connection = new mysqli($servidor, $user, $senha, $database);

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['pass'];

$email = mysqli_real_escape_string($connection, $email);

$sql = "SELECT email FROM logins.users WHERE email='$email'";

$retorno = mysqli_query($connection, $sql);

if(mysqli_num_rows($retorno)>0){
    echo "o email já cadastrado, tente novamente com um email diferente";
}else{
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['pass'];

    $sql = "INSERT INTO logins.users(nmUser, email, dsSenha) values('$nome', '$email', '$senha')";
    $result = mysqli_query($connection, $sql);
    echo ">>>Usuário cadastrado com sucesso<br>";
};



if($connection->connect_error){
    die("conexão falhou: " . $connection->connect_error);
}else{
    echo "conexão bem sucedida";
};







    ?>
</body>
</html>