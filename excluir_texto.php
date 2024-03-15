<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["linha"])) {
    $linha = $_GET["linha"];
    $arquivo = 'textos.txt';
    $linhas = file($arquivo);
    unset($linhas[$linha]);
    file_put_contents($arquivo, $linhas);
    header("Location: index.php");
    exit();
} else {
    header("Location: index.php");
    exit();
}
?>