<!DOCTYPE html>
<html>

<head>
    <title>My Web App</title>
</head>

<body>

<?php
ini_set("display_errors", 1);
header('Content-Type: text/html; charset=utf-8');

echo 'Versão Atual do PHP: ' . phpversion() . '<br>';

$servername = "51.204.121.12";
$username = "root";
$password = "@Teste2023";
$database = "mydatabasetest";

// Criar conexão
$link = new mysqli($servername, $username, $password, $database);

/* Verificar a conexão */
if ($link->connect_error) {
    die("Erro na conexão: " . $link->connect_error);
}

$valor_rand = strtoupper(substr(bin2hex(random_bytes(4)), 1));
$host_name = gethostname();

$query = "INSERT INTO dados (nome, sobrenome, endereco, cidade, host) 
          VALUES ('$valor_rand', '$valor_rand', '$valor_rand', '$valor_rand', '$host_name')";

if ($link->query($query) === TRUE) {
    echo "Novo registro criado com sucesso";
} else {
    echo "Erro: " . $link->error;
}

$link->close();
?>

</body>

</html>